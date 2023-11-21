<div>
    <style>
        /* bien the san pham */
        .containerbienthe {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #formbienthe {
            background-color: #ffffff;
            padding: 0px;
            border-radius: 8px;
        }

        #formbienthe h2 {
            color: #333;
        }

        #formbienthe .form-control {
            display: flex;
            justify-content: space-between;
        }

        #formbienthe .col-md-6 {
            width: 48%;
        }

        #formbienthe .form-group {
            margin-bottom: 10px;
        }

        #formbienthe label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #formbienthe .cod-md-2 {
            width: 390px;
            padding: 12px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #category {
            height: 40px;
        }

        #formbienthe .cod-md-3 {
            width: 100%;
            height: 36px;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #formbienthe button {
            background-color: black;
            color: white;
            height: 30px;
            width: 100px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        #formbienthe button:hover {
            background-color: transparent;
            border: 1px solid black;
            color: black;
        }

        #formbienthe p {
            color: #777;
            margin-bottom: 10px;
        }

        #formbienthe hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .bienthesanpham #xoa {
            display: none
        }

        /* Add more styles as needed */
    </style>
</div>
<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <form action="index.php?action=thembienthesanpham" method="post" id="formbienthe" enctype="multipart/form-data">
            <div class="containerbienthe">
                <h2>THÊM MỚI SẢN PHẨM</h2>
                <div class="form-control">
                    <div class="cod-md-6">
                        <div class="form-group">
                            <label for="product-name">Tên sản phẩm <span style="color: red;">*</span></label>
                            <input type="text" name="tenloaisanpham" id="product-name" class="cod-md-2" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả<span style="color: red;">*</span></label>
                            <textarea name="motasanpham" id="description" cols="30" rows="10" class="cod-md-2" required></textarea>
                        </div>
                    </div>
                    <div class="cod-md-6">
                        <div class="form-group">
                            <label for="category">Danh mục sản phẩm<span style="color: red;">*</span></label>
                            <select name="iddanhmuc" id="category" class="cod-md-2" required>
                                <option value="" disabled selected>--Chọn Danh Mục</option>
                                <?php foreach ($danhsachdanhmuc as $danhmuc) {
                                    extract($danhmuc); ?>
                                    <option value="<?= $iddanhmuc ?>"><?= $tendanhmuc ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh<span style="color: red;">* <?= $thongbao  ?? "" ?></span></label>
                            <input type="file" name="anhloaisanpham" id="image" class="cod-md-2" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh mô tả<span style="color: red;">* <?= $thongbao  ?? "" ?></span></label>
                            <input type="file" name="anhmota[]" multiple id="image" class="cod-md-2" required>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Biến thể sản phẩm</p>
                </div>
                <hr>
                <div class="bienthesanpham">
                    <div class="form-control bienthe">
                        <div class="form-group">
                            <label for="">Màu sắc<span style="color: red;">*</span></label>
                            <select name="color[]" id="" class="cod-md-3" required>
                                <option value="" disabled selected>Color</option>
                                <?php foreach ($danhsachcolor as $value) {
                                    extract($value); ?>
                                    <option value="<?= $idcolor ?>"><?= $color ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kichco">Size<span style="color: red;">*</span></label>
                            <select name="kichco[]" id="" class="cod-md-3" required>
                                <option value="" disabled selected>Size</option>
                                <?php foreach ($danhsachkichco as $value) {
                                    extract($value); ?>
                                    <option value="<?= $idkichco ?>"><?= $kichco ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Giá gốc<span style="color: red;">*</span></label>
                            <input type="number" name="giagoc[]" min="0" class="cod-md-3" required>
                        </div>
                        <div class="form-group">
                            <label for="">Giá khuyến mãi<span style="color: red;">*</span></label>
                            <input type="number" name="giakhuyenmai[]" min="0" class="cod-md-3" required>
                        </div>
                        <div class="form-group">
                            <label for="">Số lượng<span style="color: red;">*</span></label>
                            <input type="number" name="soluong[]" min="0" class="cod-md-3" required>
                        </div>
                        <div class="form-group" id="xoa">
                            <label for="">Tùy Biến</label>
                            <button type="button" onclick="deleteContainer(this)">Xóa</button>
                        </div>
                    </div>
                </div>
                <div class="bienthesanpham1">

                </div>
                <div style="text-align: center;"><button type="button" onclick="thembienthe()">+</button></div>
                <button type="submit" name="thembienthesanpham">Thêm Mới</button>
                <button type="reset">Reset</button>
                <div style="text-align: center; color: red "><?php if (isset($thanhcong) && $thanhcong != "") {
                                                                    echo $thanhcong;
                                                                }  ?></div>

            </div>
        </form>

    </div>
</section>
<script>
    function thembienthe() {
        // Lấy phần tử container có sẵn
        var originalContainer = document.querySelector('.bienthe');

        // Sao chép phần tử container
        var newContainer = originalContainer.cloneNode(true);

        // Lấy body của trang
        var bientheElement = document.querySelector('.bienthesanpham1');

        // Thêm phần tử mới (container sao chép) vào body
        bientheElement.appendChild(newContainer);
    }

    function deleteContainer(button) {
        var containerToRemove = button.closest('.bienthe');
        var containers = document.querySelectorAll('.bienthe');

        // Không cho xóa nếu chỉ còn một biến thể
        if (containers.length === 1) {
            alert("Không thể xóa hết biến thể!");
            return;
        }

        // Xóa container cha của nút xóa được bấm
        containerToRemove.remove();
    }
</script>


