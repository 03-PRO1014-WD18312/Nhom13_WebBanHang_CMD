<section class="blog about-blog">
    <div class="container">
        <div class="blog-bradcrum">
            <span><a href="index.php">Trang chủ</a></span>
            <span class="devider">/</span>
            <span><a href="#">
                    Thủ tục thanh toán</a></span>
        </div>
        <div class="blog-heading about-heading">
            <h1 class="heading">
                Thủ tục thanh toán</h1>
        </div>
    </div>
</section>
<section class="checkout product footer-padding">
    <div class="container">
        <div class="checkout-section">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="checkout-wrapper">
                        <!-- <a href="login.html" class="shop-btn">Log into Your Account</a> -->
                        <div class="account-section billing-section">
                            <h5 class="wrapper-heading">Chi tiết thanh toán</h5>
                            <div class="review-form">
                                <form action="index.php?action=dathang" method="post">
                                    <div class=" account-inner-form">
                                        <div class="review-form-name">
                                            <label for="fname" class="form-label">Họ và tên*</label>
                                            <input type="text" id="fname" class="form-control" placeholder="Nhập họ và tên" required>
                                        </div>
                                    </div>
                                    <div class=" account-inner-form">
                                        <div class="review-form-name">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" id="email" name="emailOrder" class="form-control" placeholder="Nhập email" required>
                                        </div>
                                        <div class="review-form-name">
                                            <label for="phone" class="form-label">Số điện thoại*</label>
                                            <input type="tel" id="phone" name="sdtnhanhang" class="form-control" placeholder="Nhập số điện thoại" required>
                                        </div>
                                    </div>
                                    <div class="review-form-name address-form">
                                        <label for="address" class="form-label">Địa chỉ*</label>
                                        <input type="text" id="address" name="diachinhanhang" class="form-control" placeholder="Nhập địa chỉ" required>
                                    </div>
                                    <div class="subtotal payment-type">
                                        <div class="checkbox-item">
                                            <div class="bank">
                                                <h5 style="font-size: 20px;" class="wrapper-heading">Phương thức thanh toán</h5>
                                                <p class="paragraph">Mọi giao dịch đều được bảo mật và nã hóa.
                                                    Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại
                                                </p>
                                            </div>
                                        </div>
                                        <div class="checkbox-item">
                                            <input type="radio" id="cash" name="payment" value="4" required>
                                            <div class="cash">
                                                <h5 style="font-size: 20px;" class="wrapper-heading">Nhận Hàng Thanh Toán</h5>
                                            </div>
                                        </div>
                                        <div class="checkbox-item">
                                            <input type="radio" id="credit" name="payment" value="3" required>
                                            <div class="credit">
                                                <h5 style="font-size: 20px;" class="wrapper-heading">Thẻ Tín Dụng</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="shop-btn" name="orderCart" value="Đặt hàng" id="">
                                </form>
                                <!-- <div class=" account-inner-form city-inner-form">
                                        <div class="review-form-name">
                                            <label for="city" class="form-label">Town / City*</label>
                                            <select id="city" class="form-select">
                                                <option>Choose...</option>
                                                <option>Newyork</option>
                                                <option>Dhaka</option>
                                                <option selected>London</option>
                                            </select>
                                        </div>
                                        <div class="review-form-name">
                                            <label for="number" class="form-label">Postcode / ZIP*</label>
                                            <input type="number" id="number" class="form-control" placeholder="0000">
                                        </div>
                                    </div> -->
                                <!-- <div class="review-form-name checkbox">
                                        <div class="checkbox-item">
                                            <input type="checkbox" id="account">
                                            <label for="account" class="form-label">
                                                Create an account?</label>
                                        </div>
                                    </div> -->
                                <!-- <div class="review-form-name shipping">
                                        <h5 class="wrapper-heading">Shipping Address</h5>
                                        <div class="checkbox-item">
                                            <input type="checkbox" id="remember">
                                            <label for="remember" class="form-label">
                                                Create an account?</label>
                                        </div>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-wrapper">
                        <!-- <a href="#" class="shop-btn">Enter Coupon Code</a> -->
                        <div class="account-section billing-section">
                            <h5 class="wrapper-heading">ĐẶT HÀNG</h5>
                            <div class="order-summery">
                                <div class="subtotal product-total">
                                    <h5 class="wrapper-heading">Sản Phẩm</h5>
                                    <h5 class="wrapper-heading">Tổng</h5>
                                </div>
                                <hr>
                                <?php foreach ($cart as $key => $item) : ?>
                                    <div class="subtotal product-total">
                                        <ul class="product-list">
                                            <li>
                                                <div class="product-info">
                                                    <h5 class="wrapper-heading"><?= $item['name'] ?> </h5>
                                                    <p class="paragraph">Số lượng:<?= $item['quantity'] ?></p>
                                                    <p class="paragraph"><?= $item['color'] ?></p>
                                                </div>
                                                <div class="price">
                                                    <h5 class="wrapper-heading"><?= number_format((int)$item['quantity'] * (int)$item['price'], 0, ",", ".") ?><sup>đ</sup></h5>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <hr><?php endforeach ?>
                                <div class="subtotal product-total">
                                    <h5 class="wrapper-heading">Phí vận chuyển</h5>
                                    <h5 class="wrapper-heading"><?= number_format((int)$_SESSION['resultTotal'], 0, ",", ".") ?><sup>đ</sup></h5>
                                </div>

                                <div class="subtotal product-total">
                                    <ul class="product-list">
                                        <li>
                                            <div class="product-info">
                                                <p class="paragraph">Phí Ship</p>
                                                <h5 class="wrapper-heading">Miễn phí vận chuyển</h5>
                                            </div>
                                            <div class="price">
                                                <h5 class="wrapper-heading">+<?= $phiship = 40000 ?><sup>đ</sup></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="subtotal total">
                                    <h5 class="wrapper-heading">TỔNG</h5>
                                    <h5 class="wrapper-heading price"><?= number_format((int)$_SESSION['resultTotal'] + (int)$phiship, 0, ",", ".") ?><sup>đ</sup></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>