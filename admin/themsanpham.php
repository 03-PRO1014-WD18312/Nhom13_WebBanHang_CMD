<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-product_add">
            <h1>Thêm Sản Phẩm</h1>
            <form action="index.php?action=themsanpham" method="POST" enctype="multipart/form-data">
                <select name="iddanhmuc" id="" required>
                   
                </select> <br>
                <label for="">Nhập tên loại sản phẩm <span style="color: red;">*</span></label>
                <input type="text" name="tenloaisanpham" required>

                <label for="">Nhập giá gốc loại sản phẩm<span style="color: red;">*</span></label>
                <input type="number" name="giatiengoc" required>

                <label for="">Nhập giá khuyến mại<span style="color: red;">*</span></label>
                <input type="number" name="giakhuyenmai" required>

                <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
                <textarea required name="motasanpham" id="editor1" cols="30" rows="10" placeholder="Mô tả..."></textarea>

                <label for="">Ảnh sản phẩm<span style="color: red;">* <?= $thongbao  ?? "" ?></span></label>
                <input type="file" name="anhloaisanpham" required>

                <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
                <input type="file" name="anhmota[]" multiple required>

                <button type="submit" name="themmoiloaisanpham">Thêm</button>
            </form>
        </div>
    </div>
</section>