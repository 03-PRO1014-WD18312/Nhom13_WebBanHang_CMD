<?php
session_start();
ob_start();
include "model/danhmucsanpham.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/pdo.php";
include "model/dathang.php";
$danhsachdanhmuc = loadall_danhmuc();
include "view/header.php";
$sanphamhome = loadall_sanpham_home();
if (isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
    switch ($action) {
        case "sanpham":
            if (isset($_GET['iddanhmuc']) && ($_GET['iddanhmuc'] > 0)) {
                $iddanhmuc = $_GET['iddanhmuc'];
            } else {
                $iddanhmuc = 0;
            }
            $danhsachloaisanpham = loadall_sanpham_danhmuc($iddanhmuc);
            include "view/sanpham.php";
            break;
        case "contact-us":
            include "view/contact-us.php";
            break;
        case "chitietsanpham":
            if (isset($_GET['idsanpham']) && ($_GET['idsanpham'] > 0)) {
                $idsanpham = $_GET['idsanpham'];
                $sanpham = loadone_sanpham($idsanpham);
                $anhmota = loadall_anhmota_sanpham($idsanpham);
                $bienthesanpham = load_bienthesanpham($idsanpham);
            }
            include "view/chitietsanpham.php";
            break;
        case "listCart":
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                $productId = array_column($cart, 'id');

                // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                $idList = implode(',', $productId);

                // Lấy sản phẩm trong bảng sản phẩm theo id
                $dataDb = loadone_sanphamCart($idList);
                // var_dump($dataDb);
            }
            include "view/giohang.php";
            break;
        case "dathang":
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                if (isset($_SESSION['user'])) {
                    if (isset($_POST['orderCart'])) {
                        $sdtnhanhang = $_POST['sdtnhanhang'];
                        $diachinhanhang = $_POST['diachinhanhang'];
                        $payment = $_POST['payment'];

                        $productId = array_column($cart, 'id');
                        $listId = implode(',', $productId);
                        $sanphambienthe = loadone_sanphamCart($listId);
                        $idOrder = insert_orders($_SESSION['user'], $payment, $_SESSION['resultTotal'], $diachinhanhang, $sdtnhanhang);
                        foreach ($sanphambienthe as $key => $item) {
                            extract($item);
                            insert_odertiem($anhloaisanpham, $cart['quantity'][$key], $tenloaisanpham, $giakhuyenmai, $color, $giakhuyenmai * $cart['quantity'][$key], $idOrder);
                        }
                        unset($_SESSION['cart']);
                        header("Location:index.php?action=lichsumuahang");
                    }
                } else {
                    $thongbao1 = "Đăng nhập mới được mua hàng";
                    include "view/account/dangnhap.php";
                }
                include "view/dathang.php";
            } else {
                header("Location: index.php?action=listCart");
            }
            break;
        case "muangay":
            if (isset($_SESSION['user'])) {
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    // echo "<pre>";
                    // print_r($_POST);
                    // echo "</pre>";
                    $idsanphambienthe = $_POST['idsanphambienthe'];
                    $soluongsanphamMuangay = $_POST['soluongsanpham'];
                    $sanphambienthe = loadone_sanpham_muangay($idsanphambienthe);
                    extract($sanphambienthe);
                    $productMuangay = [
                        'id' => $idsanphambienthe,
                        'name' => $tenloaisanpham,
                        'price' => $giakhuyenmai,
                        'color' => $color,
                        'quantity' => $soluongsanphamMuangay,
                    ];
                    include "view/dathangmuangay.php";
                }
            } else {
                $thongbao1 = "Đăng nhập mới được mua hàng";
                include "view/account/dangnhap.php";
            }
            break;
        case "lichsumuahang":
            if (isset($_SESSION['user']) && $_SESSION['user']) {
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $sdtnhanhang = $_POST['sdtnhanhang'];
                    $diachinhanhang = $_POST['diachinhanhang'];
                    $payment = $_POST['payment'];
                    $idsanphambienthe = $_POST['idsanphambienthe'];
                    $soluongsanphamMuangay = $_POST['soluongsanpham'];
                    $sanphambienthe = loadone_sanpham_muangay($idsanphambienthe);
                    extract($sanphambienthe);
                    $idOrder = insert_orders($_SESSION['user'], $payment, $soluongsanphamMuangay * $giakhuyenmai + 40000, $diachinhanhang, $sdtnhanhang);
                    insert_odertiem($anhloaisanpham, $soluongsanphamMuangay, $tenloaisanpham, $giakhuyenmai, $color, $soluongsanphamMuangay * $giakhuyenmai, $idOrder);
                }
                $lichsumuahang = loadall_lichsumuahang_user($_SESSION['user']);
                include "view/lichsumuahang.php";
            } else {
                $thongbao1 = "Đăng nhập mới được mua hàng";
                include "view/account/dangnhap.php";
            }
            break;
        case 'chitietdonhang':
            if (isset($_GET['iddondathang'])) {
                $idOrder = $_GET['iddondathang'];
                $orderItem = loadall_orderitems($idOrder);
            }
            include "view/chitietdonhang.php";
            break;
        case 'huydon':
            if (isset($_GET['idOrder'])) {
                $idOrder = $_GET['idOrder'];
                huy_donhang($idOrder);
            }
            $lichsumuahang = loadall_lichsumuahang_user($_SESSION['user']);
            include "view/lichsumuahang.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && !empty($_POST['email']) && !empty($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                // Thêm giá trị role cần kiểm tra
                $checkuser = checkuser($email, $password);
                if (is_array($checkuser)) {
                    $_SESSION['email'] = $checkuser;

                    // // Kiểm tra giá trị role và chuyển hướng
                    if ($checkuser['role'] == 1) {
                        $_SESSION['admin'] = $checkuser['id'];
                        header('location:admin/index.php');
                    } else {
                        $_SESSION['user'] = $checkuser['id'];
                        header('location:index.php');
                    }
                } else {
                    $thongbao = "Tài khoản không tồn tại hoặc mật khẩu không đúng. Vui lòng kiểm tra lại!";
                }
            }
            include "view/account/dangnhap.php";
            break;
        case "dangxuat":
            session_unset();
            header('location:index.php');
            break;
        case "user-profile":
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $ho = $_POST['ho'];
                $ten = $_POST['ten'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $id = $_POST['id'];

                update_taikhoan($id, $ho, $ten, $phone_number, $email, $password, $address);
                $_SESSION['email'] = checkuser($email, $password);
            }
            include "view/user-profile.php";
            break;
        case 'dangky':
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $ho = $_POST['ho'];
                $ten = $_POST['ten'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $rPassword = $_POST['rPassword'];

                $errors = [];
                // Kiểm tra Họ và Tên
                // Kiểm tra Họ
                if (empty($ho)) {
                    $errors['ho'] = "Họ không được bỏ trống!";
                }
                // Kiểm tra Tên
                if (empty($ten)) {
                    $errors['ten'] = "Tên không được bỏ trống!";
                }
                // Kiểm tra Email
                if (empty($email)) {
                    $errors['email'] = "Email không được bỏ trống!";
                }
                // Kiểm tra Email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Email không hợp lệ!";
                }

                // Kiểm tra Số điện thoại
                if (!preg_match('/^[0-9]{10}$/', $phone_number)) {
                    $errors['phone_number'] = "Số điện thoại không hợp lệ!";
                }


                // Kiểm tra Điện thoại
                if (empty($phone_number)) {
                    $errors['phone_number'] = "Số điện thoại không được bỏ trống!";
                }


                // Kiểm tra Địa chỉ
                if (empty($address)) {
                    $errors['address'] = "Địa chỉ không được bỏ trống!";
                }

                // Kiểm tra mật khẩu có độ dài ít nhất là 8 ký tự
                if (empty($password)) {
                    $errors['password'] = "Vui lòng nhập mật khẩu!";
                } elseif (strlen($password) < 8) {
                    $errors['password'] = "Mật khẩu phải có ít nhất 8 ký tự!";
                }

                // Kiểm tra Nhập lại mật khẩu
                if ($password !== $rPassword) {
                    $errors['rPassword'] = "Mật khẩu nhập lại không khớp!";
                }

                // Nếu không có lỗi, thực hiện đăng ký
                if (empty($errors)) {
                    // Gọi hàm để chèn thông tin người dùng vào cơ sở dữ liệu
                    insert_taikhoan($ho, $ten, $phone_number, $email, $address, $password);
                    $thongbao = "Đăng ký thành công!";
                    // header("Location: index.php?action=dangky"); // Thay thế success.php bằng trang bạn muốn chuyển hướng đến
                    // exit();
                }
            }
            include "view/account/dangky.php";
            break;
        case "about":
            include "view/about.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
