<div>
    <style>
        .size-selector {
            display: inline-block;
            border: 1px solid #ccc;
            border - radius: 4px;
            overflow: hidden;
        }
        .size-selector select {
            width: 100%;
            padding: 8px;
            border: none;
            appearance: none;
            background: transparent;
            cursor: pointer;
            box-sizing: border-box;
        }
        .size-selector select option{
            display: block;
            padding: 8px;
            margin: 0;
        }
        .size-selector select option:checked {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</div>
<!-----------product------->
<section class="product">
        <div class="container">
            <div class="product-top row">
                <p>Trang chủ</p><span>&#10230;</span> 
                <p>
                <?php
                $danhmuc = loadone_danhmuc($_GET['iddanhmuc']);
                echo $danhmuc['tendanhmuc'] 
                ?> 
                </p><span></span> 
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
  
                    <img src="upload/<?php = $sanpham['anhsanpham'] ?>" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                    <?php
                    foreach ($anhmota as $value){
                        extract($value);
                        echo '<img src= "upload/' .$anhsanpham.'" alt="Lỗi">'
                    }
                     ?>   
                    <!-- <img src="image/sanpham1.jpg" alt="" >
                        <img src="image/sanpham1.jpg" alt="">
                        <img src="image/sanpham1.jpg" alt="">
                        <img src="image/sanpham1.jpg" alt="">-->
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1 style="font-size: 35px;"> <?= $sanpham['tenloaisanpham'] ?> </h1>
                        <p>MSP: <? = $sanpham['giasanpham'] ?></p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p> <? = $sanpham['idloaisanpham'] ?><sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product-color">
                        <p><span style="font-weight: bold;">Màu sác</span>: Xanh cổ vịt nhạt <span style="color: red;">*</span></p> 
                        <div class="product-content-right-product-color-img">
                            <img src="image/spcolor.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-content-right-product-size">
                        <div style="font-weight: bold;">
                            Size
                        </div>
                        <div class="size-selector">
                            <select name="" id="">
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                            </select>
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng: </p>
                        <input type="number" min="0" value="1"> 
                    </div>
                    <p style="color: red;">Vui lòng chọn size<span>*</span></p>
                    <div class="product-content-right-product-button">
                        <button><i class="fas fa-shopping-cart"></i> <p>MUA HÀNG</p></button>
                        <button><p>THÊM VÀO GIỎ HÀNG</p></button>
                    </div>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-phone-alt"></i> <p>Hotline</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-comment"></i> <p>Chat</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-envelope"></i> <p>Mail</p>
                        </div>
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title">
                                <div class="product-content-right-bottom-content-title-item">
                                    <p>Chi tiết</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item">
                                    <p>Bảo quản</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item">
                                    <p>Tham khảo size</p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-chitiet">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>


