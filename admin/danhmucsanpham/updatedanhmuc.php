<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
            <h1>Sửa Danh Mục</h1>
            <form action="index.php?action=updatedanhmuc" method="POST">
                <input type="hidden" name="iddanhmuc" value="<?= $iddanhmuc ?>" id="">
                <input type="text" name="tendanhmuc" value="<?= $tendanhmuc ?>" required>
                <button type="submit" name="capnhatdanhmuc">Thêm</button>
            </form><br><br>
            <?php if (isset($thanhcong) && $thanhcong != "") {
                echo $thanhcong;
            }  ?>
        </div>
    </div>
</section>