  <section class="login account footer-padding">
      <div class="container">
          <div class="login-section account-section">
              <div class="review-form">
                  <h5 class="comment-title">ĐĂNG KÝ</h5>
                  <form action="index.php?action=dangky" method="post">
                      <div class=" account-inner-form">
                          <div class="review-form-name">
                              <?php $hoValue = isset($_POST['ho']) ? htmlspecialchars($_POST['ho']) : ''; ?>
                              <label for="fname" class="form-label">Họ</label>
                              <input type="text" id="fname" name="ho" class="form-control" placeholder="Họ">
                              <?php if (isset($errors['ho'])) { ?>
                                  <p class="error-message"><?php echo $errors['ho']; ?></p>
                              <?php } ?>
                          </div>
                          <div class="review-form-name">
                              <?php $tenValue = isset($_POST['ten']) ? htmlspecialchars($_POST['ten']) : ''; ?>
                              <label for="lname" class="form-label">Tên</label>
                              <input type="text" id="lname" name="ten" class="form-control" placeholder="Tên">
                              <?php if (isset($errors['ten'])) { ?>
                                  <p class="error-message"><?php echo $errors['ten']; ?></p>
                              <?php } ?>
                          </div>
                      </div>
                      <div class=" account-inner-form">
                          <div class="review-form-name">
                              <?php $emailValue = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>
                              <label for="email" class="form-label">Email</label>
                              <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email">
                              <?php if (isset($errors['email'])) { ?>
                                  <p class="error-message"><?php echo $errors['email']; ?></p>
                              <?php } ?>
                          </div>
                          <div class="review-form-name">
                              <?php $phone_numberValue = isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : ''; ?>
                              <label for="phone" class="form-label">Số điện thoại</label>
                              <input type="tel" id="phone" name="phone_number" class="form-control" placeholder="Nhập số điện thoại">
                              <?php if (isset($errors['phone_number'])) { ?>
                                  <p class="error-message"><?php echo $errors['phone_number']; ?></p>
                              <?php } ?>
                          </div>
                      </div>
                      <div class="review-form-name address-form">
                          <?php $addressValue = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?>
                          <label for="address" class="form-label">Địa chỉ</label>
                          <input type="text" id="address" name="address" class="form-control" placeholder="Nhập địa chỉ">
                          <?php if (isset($errors['address'])) { ?>
                              <p class="error-message"><?php echo $errors['address']; ?></p>
                          <?php } ?>
                      </div>
                      <div class="review-form-name address-form">
                          <label for="address" class="form-label">Mật Khẩu</label>
                          <input type="password" id="password" name="password" class="form-control" placeholder="Mật Khẩu">
                          <?php if (isset($errors['password'])) { ?>
                              <p class="error-message"><?php echo $errors['password']; ?></p>
                          <?php } ?>
                      </div>
                      <div class="review-form-name address-form">
                          <label for="address" class="form-label">Nhập lại mật khẩu</label>
                          <input type="password" id="password" name="rPassword" class="form-control" placeholder="Nhập lại mật khẩu">
                          <?php if (isset($errors['rPassword'])) { ?>
                              <p class="error-message"><?php echo $errors['rPassword']; ?></p>
                          <?php } ?>
                      </div>
                      <div class="login-btn text-center">
                          <button class="shop-btn" type="submit" name="dangky">Đăng ký</button>
                          <span class="shop-account">Bạn đã có tài khoản ?<a href="index.php?action=dangnhap">Đăng Nhập</a></span>
                      </div>

                  </form>
                  <p style="color: red"><?php if (isset($thongbao) && $thongbao != "") {
                                            echo $thongbao;
                                        }  ?></p>
              </div>
          </div>
      </div>
  </section>