<section class="blog about-blog">
    <div class="container">
        <div class="blog-bradcrum">
            <span><a href="index.php">Trang chủ</a></span>
            <span class="devider">/</span>
            <span><a href="#">Order</a></span>
        </div>
        <div class="blog-heading about-heading">
            <h1 class="heading">Xem đơn hàng</h1>
        </div>
    </div>
</section>
<section class="product-cart product footer-padding">
    <div class="container">
        <div class="cart-section">
            <table>
                <tbody>
                    <tr class="table-row table-top-row">
                        <td class="table-wrapper">
                            <h5 style="text-align: center;" class="table-heading">MÃ ĐH</h5>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">Ngày Đặt</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">PTTT</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">Địa chỉ</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">SĐT</h5>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">TỔNG</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">Trạng Thái</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">Tùy biến</h5>
                            </div>
                        </td>
                    </tr>
                    <?php foreach ($lichsumuahang as $sanpham) : ?>
                        <tr class="table-row ticket-row">
                            <th style="text-align: center;"><?= $sanpham['iddondathang'] ?></th>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading"><?= $sanpham['ngaydathang'] ?></h5>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading"><?= $sanpham['payment'] ?></h5>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <p><?= $sanpham['diachi'] ?></p>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <p><?= $sanpham['sdt'] ?></p>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <p><?= number_format($sanpham['tongtien'], 0, ",", ".") ?><u>đ</u></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <span>
                                        <?php
                                        if ($sanpham['trangthai'] == 0) {
                                            echo 'Chờ Xác Nhận <br>';
                                        } elseif ($sanpham['trangthai'] == 1) {
                                            echo "Đang Giao";
                                        } elseif ($sanpham['trangthai'] == 2) {
                                            echo "Đã Thanh Toán";
                                        } else {
                                            echo "Đã Hủy";
                                        }
                                        ?>
                                    </span>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <span>
                                        <a href="index.php?action=chitietdonhang&iddondathang=<?=$sanpham['iddondathang']?>" class="shop-btn">Xem</a>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="wishlist-btn cart-btn">
            <a href="empty-cart.html" class="clean-btn">Tổng tiền bao gồm cả phí ship</a>
            <a href="#" class="shop-btn update-btn">Update Cart</a>
            <a href="checkout.html" class="shop-btn">Proceed to Checkout</a>
        </div> -->
    </div>
</section>