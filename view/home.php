<style>
    .list-size.open {
        opacity: 0;
        visibility: visible;
        bottom: 49px;
    }

    .list-size {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #FFFFFF;
        border: 1px solid #E7E8E9;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -ms-transition: all 0.3s ease-in-out 0s;
    }

    .list-size li {
        list-style: none;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }

    .list-size ul li button {
        outline: 0;
        background: transparent;
        border: 0;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        color: #221F20;
        display: block;
        font-family: 'Montserrat';
        cursor: pointer;
        text-transform: uppercase;
        margin: 0 auto;
        padding: 12px 50px;
    }
</style>
<section id="hero" class="hero">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper hero-wrapper">
            <div class="swiper-slide hero-slider-one">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="wrapper-section" data-aos="fade-up">
                            <div class="wrapper-info">
                                <h5 class="wrapper-subtitle">GIẢM <span class="wrapper-inner-title">70%</span> CÁC
                                </h5>
                                <h1 class="wrapper-details">SẢN PHẨM TRÊN CMD</h1>
                                <a href="index.php?action=product-sidebar" class="shop-btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slider-two">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="wrapper-section">
                            <div class="wrapper-info">
                                <h5 class="wrapper-subtitle">GIẢM <span class="wrapper-inner-title">70%</span> CÁC
                                </h5>
                                <h1 class="wrapper-details">SẢN PHẨM TRÊN CMD</h1>
                                <a href="index.php?action=product-sidebar" class="shop-btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slider-three">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="wrapper-section">
                            <div class="wrapper-info">
                                <h5 class="wrapper-subtitle">GIẢM <span class="wrapper-inner-title">70%</span> CÁC
                                </h5>
                                <h1 class="wrapper-details">SẢN PHẨM TRÊN CMD</h1>
                                <a href="index.php?action=product-sidebar" class="shop-btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="product arrival">
    <div class="container">
        <div class="section-title">
            <h5>SẢN PHẨM MỚI</h5>

        </div>
        <div class="arrival-section">
            <div class="row g-5">
                <!-- // sản phẩm -->
                <?php foreach ($sanphamhome as $sp) :
                    extract($sp);
                    $linksanpham = "index.php?action=chitietsanpham&idsanpham=" . $idloaisanpham;
                    $bienthe = load_bienthesanpham($idloaisanpham);

                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="upload/<?= $anhloaisanpham ?>" alt="product-img">
                            </div>
                            <div class="product-info">
                                <!-- <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z" fill="#FFA800" />
                                            <path d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z" fill="#FFA800" />
                                            <path d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z" fill="#FFA800" />
                                            <path d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z" fill="#FFA800" />
                                            <path d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z" fill="#FFA800" />
                                        </svg>
                                    </span>
                                </div> -->
                                <div class="product-description">
                                    <a href="<?= $linksanpham ?>" class="product-details"><?= $tenloaisanpham ?>
                                    </a>
                                    <div class="price">
                                        <span class="price-cut"><?= number_format($giasanpham, 0, ",", ".") ?><u>đ</u></span>
                                        <span class="new-price"><?= number_format($giasale, 0, ",", ".") ?><u>đ</u></span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a class="product-btn"><button><span>
                                            <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.25357 3.32575C8.25357 4.00929 8.25193 4.69283 8.25467 5.37583C8.25576 5.68424 8.31536 5.74439 8.62431 5.74439C9.964 5.74603 11.3031 5.74275 12.6428 5.74603C13.2728 5.74767 13.7397 6.05663 13.9246 6.58104C14.2209 7.42098 13.614 8.24232 12.6762 8.25052C11.5919 8.25982 10.5075 8.25271 9.4232 8.25271C9.17714 8.25271 8.93107 8.25216 8.68501 8.25271C8.2913 8.2538 8.25412 8.29154 8.25412 8.69838C8.25357 10.0195 8.25686 11.3412 8.25248 12.6624C8.25029 13.2836 7.92603 13.7544 7.39891 13.9305C6.56448 14.2088 5.75848 13.6062 5.74863 12.6821C5.73824 11.7251 5.74645 10.7687 5.7459 9.81173C5.7459 9.41965 5.74754 9.02812 5.74535 8.63604C5.74371 8.30849 5.69012 8.2538 5.36204 8.25326C4.02235 8.25162 2.68321 8.25545 1.34352 8.25107C0.719613 8.24943 0.249902 7.93008 0.0710952 7.40348C-0.212153 6.57065 0.388245 5.75916 1.31017 5.74658C2.14843 5.73564 2.98669 5.74384 3.82495 5.74384C4.30779 5.74384 4.79062 5.74384 5.274 5.74384C5.72184 5.7433 5.7459 5.71869 5.7459 5.25716C5.7459 3.95406 5.74317 2.65096 5.74699 1.34786C5.74863 0.720643 6.0625 0.253102 6.58799 0.0704598C7.40875 -0.213893 8.21803 0.370671 8.25248 1.27349C8.25303 1.29154 8.25303 1.31013 8.25303 1.32817C8.25357 1.99531 8.25357 2.66026 8.25357 3.32575Z" fill="#6E6D79" />
                                            </svg>
                                        </span> <span>
                                            <svg width="35" height="28" viewBox="0 0 35 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.4444 21.897C14.8444 21.897 13.2441 21.8999 11.6441 21.8963C9.79233 21.892 8.65086 21.0273 8.12595 19.2489C7.04294 15.5794 5.95756 11.9107 4.87166 8.24203C4.6362 7.4468 4.37783 7.25412 3.55241 7.25175C2.7786 7.24964 2.00507 7.25754 1.23127 7.24911C0.512247 7.24148 0.0157813 6.79109 0.000242059 6.15064C-0.0160873 5.48281 0.475637 5.01689 1.23232 5.00873C2.11121 4.99952 2.99089 4.99214 3.86951 5.01268C5.36154 5.04769 6.52014 5.93215 6.96393 7.35415C7.14171 7.92378 7.34055 8.49026 7.46382 9.07201C7.54968 9.47713 7.77881 9.49661 8.10566 9.49582C11.8335 9.48897 15.5611 9.49134 19.2889 9.49134C21.0825 9.49134 22.8761 9.48108 24.6694 9.49503C26.0848 9.50608 27.0907 10.4906 27.0156 11.7778C27.0006 12.0363 26.925 12.2958 26.8473 12.5457C26.1317 14.8411 25.4124 17.1351 24.6879 19.4279C24.1851 21.0186 23.0223 21.8826 21.3504 21.8944C19.7151 21.906 18.0797 21.897 16.4444 21.897Z" fill="#6E6D79"></path>
                                                <path d="M12.4012 27.5161C11.167 27.5227 10.1488 26.524 10.1345 25.2928C10.1201 24.0419 11.1528 22.9982 12.3967 23.0066C13.6209 23.0151 14.6422 24.0404 14.6436 25.2623C14.6451 26.4855 13.6261 27.5095 12.4012 27.5161Z" fill="#6E6D79"></path>
                                                <path d="M22.509 25.2393C22.5193 26.4842 21.5393 27.4971 20.3064 27.5155C19.048 27.5342 18.0272 26.525 18.0277 25.2622C18.0279 24.0208 19.0214 23.0161 20.2572 23.0074C21.4877 22.9984 22.4988 24.0006 22.509 25.2393Z" fill="#6E6D79"></path>
                                            </svg>

                                        </span></button></a>
                            </div>
                            <div class="list-size open">
                                <ul>
                                    <?php foreach ($bienthe as $value) {
                                        extract($value); ?>

                                        <li><button data-id="<?= $idsanphambienthe ?>" onclick="addToCart(<?= $idsanphambienthe ?>, '<?= $tenloaisanpham ?>', <?= $giakhuyenmai ?>,'<?= $color ?>')" class="btn bt-large">
                                                <P class="bienthecolor"><?= $color ?></P>
                                            </button></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- // kết thúc sản phẩm -->
            </div>
        </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');

    function addToCart(productId, productName, productPrice, productColor) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice,
                color: productColor
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
    document.addEventListener("DOMContentLoaded", function() {
        var cartButtons = document.querySelectorAll('.product-cart-btn');

        cartButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var productWrapper = this.closest('.product-wrapper');
                var listSize = productWrapper.querySelector('.list-size');

                // Toggle visibility with opacity
                listSize.style.opacity = (listSize.style.opacity === '1') ? '0' : '1';
            });
        });
    });
</script>