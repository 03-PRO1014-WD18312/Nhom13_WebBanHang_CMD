<section class="login footer-padding">
    <div class="container">
        <div class="login-section">
            <div class="review-form">
                <div style="text-align: center;">
                    <p style="color: red"><?= $thongbao1 ?? "" ?></p>
                </div>
                <h5 class="comment-title">ĐĂNG NHẬP</h5>
                <form action="index.php?action=dangnhap" method="post">
                    <div class="review-inner-form ">
                        <div class="review-form-name">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="review-form-name">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="review-form-name checkbox">
                            <div class="checkbox-item">
                                <input type="checkbox">
                                <span class="address">Ghi nhớ tài khoản</span>
                            </div>
                            <div class="forget-pass">
                                <p>Quên mật khẩu?</p>
                            </div>
                        </div>
                    </div>
                    <div class="login-btn text-center">
                        <button class="shop-btn" type="submit" name="dangnhap">ĐĂNG NHẬP</button>
                        <span class="shop-account">Chưa có tài khoản ?<a href="index.php?action=dangky">Đăng ký
                            </a></span>
                    </div>
                </form>
                <p style="color: red"><?php if (isset($thongbao) && $thongbao != "") {
                                            echo $thongbao;
                                        }  ?></p>
            </div>
        </div>
    </div>
</section>