<section class="blog about-blog">
    <div class="container">
        <div class="blog-bradcrum">
            <span><a href="index.php">Trang chủ</a></span>
            <span class="devider">/</span>
            <span><a href="#">OrderItem</a></span>
        </div>
        <div class="blog-heading about-heading">
            <h1 class="heading">Xem Đơn Hàng</h1>
        </div>
    </div>
</section>
<section class="product-cart product footer-padding">
    <div class="container">
        <div class="cart-section">
            <table>
                <tbody>
                    <tr class="table-row table-top-row">
                        <td class="table-wrapper wrapper-product">
                            <h5 class="table-heading">SẢN PHẨM</h5>
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
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">MÀU</h5>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">TỔNG</h5>
                            </div>
                        </td>
                    </tr>
                    <?php foreach ($orderItem as $sanpham) : ?>
                        <tr class="table-row ticket-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="upload/<?= $sanpham['anhloaisanpham'] ?>" alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading"><?= $sanpham['tensanpham'] ?></h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading"><?= $sanpham['giathanh'] ?></h5>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <p><?= $sanpham['soluongtong'] ?></p>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <p><?= $sanpham['mausanpham'] ?></p>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <p><?= number_format($sanpham['tongtiensanpham'], 0, ",", ".") ?><u>đ</u></p>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="table-wrapper-center" style="text-align: center;">
                <span>
                    <a class="shop-btn" href="index.php?action=huydon&idOrder=<?= $idOrder ?>">H Ủ Y </a>
                </span>
            </div>
        </div>
        <!-- <div class="wishlist-btn cart-btn">
            <a href="empty-cart.html" class="clean-btn">Tổng tiền bao gồm cả phí ship</a>
            <a href="#" class="shop-btn update-btn">Update Cart</a>
            <a href="checkout.html" class="shop-btn">Proceed to Checkout</a>
        </div> -->
    </div>
</section>