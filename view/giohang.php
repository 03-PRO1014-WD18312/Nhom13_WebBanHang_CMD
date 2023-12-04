<?php
if (empty($dataDb)) {
    echo '<section class="blog about-blog footer-padding">
    <div class="container">
        <div class="blog-bradcrum">
            <span><a href="index.php">Trang chủ</a></span>
            <span class="devider">/</span>
            <span><a href="#">Giỏ hàng</a></span>
        </div>
        <div class="blog-item" data-aos="fade-up">
            <div class="cart-img">
                <img src="assets/images/homepage-one/empty-cart.webp" alt>
            </div>
            <div class="cart-content">
                <p class="content-title">Trống! Giỏ hàng không bất kỳ sản phẩm nào </p>
                <a href="index.php" class="shop-btn">Trở lại trang chủ</a>
            </div>
        </div>
    </div>
  </section>';
} else {  ?>
    <section class="blog about-blog">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index.php">Trang chủ</a></span>
                <span class="devider">/</span>
                <span><a href="#">Giỏ hàng</a></span>
            </div>
            <div class="blog-heading about-heading">
                <h1 class="heading">Giỏ hàng</h1>
            </div>
        </div>
    </section>
    <section class="product-cart product footer-padding">
        <div class="container">
            <div class="cart-section">
                <table id="giohang">
                    <tbody>
                        <tr class="table-row table-top-row">
                            <td class="table-wrapper">
                                <h5 style="text-align: center;" class="table-heading">STT</h5>
                            </td>
                            <td class="table-wrapper wrapper-product">
                                <h5 class="table-heading">Sản phẩm</h5>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">Màu</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">Giá</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">Số lượng</h5>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">Tổng</h5>
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
                                            <button class="shop-btn" onclick="removeFormCart(<?= $product['idsanphambienthe'] ?>)">Xóa </button>
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
                                    <h5 class="table-heading"><?= number_format((int)$sum_total, 0, ",", ".") . 'đ' ?></h5>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
                <form action="index.php?action=dathang" method="post">
                    <div class="table-wrapper-center" style="text-align: center;">
                        <button class="shop-btn" type="submit">Thanh toán</button>
                    </div>
                </form>
            </div>
            <!-- <div class="wishlist-btn cart-btn">
                <a href="empty-cart.html" class="clean-btn">Clear Cart</a>
                <a href="#" class="shop-btn update-btn">Update Cart</a>
                <a href="checkout.html" class="shop-btn">Proceed to Checkout</a>
            </div> -->
        </div>
    </section>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('view/tableCartOrder.php', function(data) {
                    $('#giohang').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('#giohang').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>