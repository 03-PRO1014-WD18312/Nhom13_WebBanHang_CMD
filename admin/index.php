<?php
include "../model/bienthe.php";
include "../model/danhmucsanpham.php";
include "../model/sanpham.php";
include "../model/pdo.php";
include "header.php";
if (isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
    switch ($action) {
            // danh mục sản phẩm
        case "danhsachdanhmuc":
            $danhsachdanhmuc = loadall_danhmuc();
            include "../admin/danhmucsanpham/danhsachdanhmuc.php";
            break;
        case "themdanhmuc":
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $tendanhmuc = $_POST['tendanhmuc'];
                insert_danhmuc($tendanhmuc);
                $thanhcong = "Thêm thành công";
            }
            include "../admin/danhmucsanpham/themdanhmuc.php";
            break;
        case "xoadanhmuc":
            if (isset($_GET['iddanhmuc'])) {
                $id = $_GET['iddanhmuc'];
                xoadanhmuc($id);
                $danhsachdanhmuc = loadall_danhmuc();
                include "../admin/danhmucsanpham/danhsachdanhmuc.php";
            }
            break;
        case "suadanhmuc":
            if (isset($_GET['iddanhmuc']) && ($_GET['iddanhmuc'] > 0)) {
                $danhmuc = loadone_danhmuc($_GET['iddanhmuc']);
                extract($danhmuc);
            }
            include "danhmucsanpham/updatedanhmuc.php";
            break;
        case "updatedanhmuc":
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $iddanhmuc = $_POST['iddanhmuc'];
                $tendanhmuc = $_POST['tendanhmuc'];
                update_danhmuc($iddanhmuc, $tendanhmuc);
                $thongbao = "cập nhật thành công!";
            }
            $danhsachdanhmuc = loadall_danhmuc();
            include "../admin/danhmucsanpham/danhsachdanhmuc.php";
            break;
            // sản phẩm
        case "danhsachsanpham":
            $danhsachloaisanpham = loadall_sanpham();
            include "../admin/sanpham/danhsachsanpham.php";
            break;
        case "themsanpham":
            // $loaisanphammoinhat = load_sanphammoinhat();
            // if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //     $iddanhmuc = $_POST['iddanhmuc'];
            //     $tenloaisanpham = $_POST['tenloaisanpham'];
            //     $giatiengoc = $_POST['giatiengoc'];
            //     $giakhuyenmai = $_POST['giakhuyenmai'];
            //     $motasanpham = $_POST['motasanpham'];
            //     $anhloaisanpham = $_FILES['anhloaisanpham']['name'];
            //     $taget_dir = "../upload/";
            //     $taget_file = $taget_dir . basename($_FILES['anhloaisanpham']['name']);
            //     $filetype = strtolower(pathinfo($anhloaisanpham, PATHINFO_EXTENSION));
            //     if (file_exists($taget_file)) {
            //         $thongbao = "File đã tồn tại";
            //     } else {
            //         if ($filetype != "jpg" && $filetype != "jpeg" && $filetype != "png") {
            //             $thongbao = $filetype;
            //         } else {
            //             if (move_uploaded_file($_FILES['anhloaisanpham']['tmp_name'], $taget_file)) {
            //                 // echo "Bạn đã up load ảnh thành công";
            //             } else {
            //                 echo "Bạn đã up load ảnh không thành công";
            //             }
            //             $anhmota = $_FILES['anhmota']['name'];
            //             foreach ($anhmota as $key => $value) {
            //                 if (move_uploaded_file($_FILES['anhmota']['tmp_name'][$key], "../upload/" . $value)) {
            //                     // echo "Bạn đã up load ảnh thành công";
            //                 } else {
            //                     echo "Bạn đã up load ảnh không thành công";
            //                 }
            //             }
            //             insert_sanpham($iddanhmuc, $tenloaisanpham, $giatiengoc, $giakhuyenmai, $motasanpham, $anhloaisanpham);
            //             extract($loaisanphammoinhat);
            //             foreach ($anhmota as $key => $value) {
            //                 insert_anhmota($idloaisanpham, $value);
            //             }
            //             $thanhcong = "Thêm thành công";
            //         }
            //     }
            // }
            // $danhsachdanhmuc = loadall_danhmuc();
            // include "sanpham/themsanpham.php";
            break;
        case "thembienthesanpham":
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $iddanhmuc = $_POST['iddanhmuc'];
                $tenloaisanpham = $_POST['tenloaisanpham'];
                $motasanpham = $_POST['motasanpham'];
                $anhloaisanpham = $_FILES['anhloaisanpham']['name'];
                $anhmota = $_FILES['anhmota']['name'];
                //mảng
                $color = $_POST['color'];
                $kichco = $_POST['kichco'];
                $giatiengoc = $_POST['giagoc'];
                $giakhuyenmai = $_POST['giakhuyenmai'];
                $soluong = $_POST['soluong'];
                // echo "<pre>";
                // print_r( $soluong) ;
                // echo "</pre>";
                //kết hợp mảng
                $combinedArray = array(
                    'color' => $color,
                    'kichco' => $kichco,
                    'giatiengoc' => $giatiengoc,
                    'giakhuyenmai' => $giakhuyenmai,
                    'soluong' => $soluong,
                );
                $taget_dir = "../upload/";
                $taget_file = $taget_dir . basename($_FILES['anhloaisanpham']['name']);
                $filetype = strtolower(pathinfo($anhloaisanpham, PATHINFO_EXTENSION));
                if (file_exists($taget_file)) {
                    $thongbao = "File đã tồn tại";
                } else {
                    if ($filetype != "jpg" && $filetype != "jpeg" && $filetype != "png") {
                        $thongbao = "Vui lòng nhập file ảnh";
                    } else {
                        if (move_uploaded_file($_FILES['anhloaisanpham']['tmp_name'], $taget_file)) {
                            // echo "Bạn đã up load ảnh thành công";
                        } else {
                            echo "Bạn đã up load ảnh không thành công";
                        }
                        foreach ($anhmota as $key => $value) {
                            if (file_exists($taget_dir . basename($value))) {
                                $thongbao = "File đã tồn tại";
                            } else {
                                if ($filetype != "jpg" && $filetype != "jpeg" && $filetype != "png") {
                                    $thongbao = "Vui lòng nhập file ảnh";
                                } else {
                                    if (move_uploaded_file($_FILES['anhmota']['tmp_name'][$key], "../upload/" . $value)) {
                                        // echo "Bạn đã up load ảnh thành công";
                                    } else {
                                        echo "Bạn đã up load ảnh không thành công";
                                    }
                                }
                            }
                        }
                        insert_sanpham($iddanhmuc, $tenloaisanpham, $motasanpham, $anhloaisanpham);
                        $loaisanphammoinhat = load_sanphammoinhat();
                        // lấy id sản phẩm để chèn
                        extract($loaisanphammoinhat);
                        foreach ($combinedArray['soluong'] as $key => $value) {
                            $kichco = $combinedArray['kichco'][$key];
                            $color = $combinedArray['color'][$key];
                            $giatiengoc = $combinedArray['giatiengoc'][$key];
                            $giakhuyenmai = $combinedArray['giakhuyenmai'][$key];
                            insert_sanphambienthe($value, $kichco, $color, $giatiengoc, $giakhuyenmai, $idloaisanpham);
                        }
                        foreach ($anhmota as $key => $value) {
                            insert_anhmota($idloaisanpham, $value);
                        }
                        $thanhcong = "Thêm thành công";
                    }
                }
            }
            $danhsachkichco = loadall_kichco();
            $danhsachcolor = loadall_color();
            $danhsachdanhmuc = loadall_danhmuc();
            include "../admin/sanpham/thembienthesanpham.php";
            break;
        case "xoasanpham":
            if (isset($_GET['idloaisanpham'])) {
                $id = $_GET['idloaisanpham'];
                xoasanpham($id);
                $danhsachloaisanpham = loadall_sanpham();
                include "../admin/sanpham/danhsachsanpham.php";
            }
            break;
        case "suasanpham":
            if (isset($_GET['idloaisanpham']) && ($_GET['idloaisanpham'] > 0)) {
                $loaisanpham = loadone_sanpham($_GET['idloaisanpham']);
                extract($loaisanpham);
            }
            include "../admin/sanpham/updatesanpham.php";
            break;
        case "danhsachbienthesanpham":
            $danhsachbienthesanpham = loadall_bienthesanpham();
            include "../admin/sanpham/danhsachbienthesanpham.php";
            break;
        case "addbienthe":
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addbienthe"])) {
                $name = $_POST["name"];
                $value = $_POST["value"];
                
                insert_bienthe($name, $value);
                $thanhcong = "Thêm thành công";
            }
            include "../admin/bienthe/addbienthe.php";
            break;
    }
} else {
    include "../admin/danhmucsanpham/themdanhmuc.php";
}
