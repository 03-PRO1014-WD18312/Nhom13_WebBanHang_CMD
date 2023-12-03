<?php
session_start();
include "../model/danhmucsanpham.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/pdo.php";
include "../model/dathang.php";
$danhsachdanhmuc = loadall_danhmuc();
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');

    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idList = implode(',', $productId);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);
?>
        <tr class="table-row table-top-row">
            <td class="table-wrapper">
                <h5 style="text-align: center;" class="table-heading">STT</h5>
            </td>
            <td class="table-wrapper wrapper-product">
                <h5 class="table-heading">SẢN PHẨM</h5>
            </td>
            <td class="table-wrapper">
                <div class="table-wrapper-center">
                    <h5 class="table-heading">MÀU</h5>
                </div>
            </td>
            <td class="table-wrapper">
                <div class="table-wrapper-center">
                    <h5 class="table-heading">GIÁ</h5>
                </div>
            </td>
            <td class="table-wrapper">
                <div class="table-wrapper-center">
                    <h5 class="table-heading">SỐ LƯỢNG</h5>
                </div>
            </td>
            <td class="table-wrapper wrapper-total">
                <div class="table-wrapper-center">
                    <h5 class="table-heading">TỔNG</h5>
                </div>
            </td>
            <td class="table-wrapper">
                <div class="table-wrapper-center">
                    <h5 class="table-heading">ACTION</h5>
                </div>
            </td>
        </tr>
        <?php
        $sum_total = 0;
        foreach ($dataDb as $key => $product) :
            //kiểm tra số lượng sp trong giỏ hàng
            $quantityInCart = 0;
            foreach ($_SESSION['cart'] as $item) {
                if ($item['id'] == $product['idsanphambienthe']) {
                    $quantityInCart = $item['quantity'];
                    break;
                }
            }
        ?>
            <tr class="table-row ticket-row">
                <th style="text-align: center;"><?= $key + 1 ?></th>
                <td class="table-wrapper wrapper-product">
                    <div class="wrapper">
                        <div class="wrapper-img">
                            <img src="upload/<?= $product['anhloaisanpham'] ?>" alt="img">
                        </div>
                        <div class="wrapper-content">
                            <h5 class="heading"><?= $product['tenloaisanpham'] ?></h5>
                        </div>
                    </div>
                </td>
                <td class="table-wrapper">
                    <div class="table-wrapper-center">
                        <h5 class="heading"><?= $product['color'] ?></h5>
                    </div>
                </td>
                <td class="table-wrapper">
                    <div class="table-wrapper-center">
                        <h5 class="heading"><?= number_format((int)$product['giakhuyenmai'], 0, ",", ".") ?><u>đ</u></h5>
                    </div>
                </td>
                <td class="table-wrappe-center" style="text-align: center;">
                    <input type="number" id="quantity_<?= $product['idsanphambienthe'] ?>" value="<?= $quantityInCart ?>" min="1" oninput="updateQuantity(<?= $product['idsanphambienthe'] ?>,<?= $key ?>)">
                </td>
                <td class="table-wrapper wrapper-total">
                    <div class="table-wrapper-center">
                        <h5 class="heading"><?= number_format((int)$product['giakhuyenmai'] * (int) $quantityInCart, 0, ",", ".") ?></h5>
                    </div>
                </td>
                <td class="table-wrapper">
                    <div class="table-wrapper-center">
                        <span>
                            <button class="shop-btn" onclick="removeFormCart(<?= $product['idsanphambienthe'] ?>)">xóa </button>
                        </span>
                    </div>
                </td>
            </tr>
        <?php
            $sum_total += (int)$product['giakhuyenmai'] * (int) $quantityInCart;
            $_SESSION['resultTotal'] = $sum_total;
        endforeach
        ?>
        <tr>
        <tr class="table-row ticket-row">
            <td class="table-wrapper" colspan="5">
                <div class="table-wrapper-center">
                    <h5 class="table-heading">Tổng tiền hàng:</h5>
                </div>
            </td>
            <td class="table-wrapper" colspan="2">
                <div class="table-wrapper-center">
                    <h5 class="table-heading"><?= number_format((int)$sum_total, 0, ",", ".") ?></h5>
                </div>
            </td>
        </tr>
<?php
    }
?>