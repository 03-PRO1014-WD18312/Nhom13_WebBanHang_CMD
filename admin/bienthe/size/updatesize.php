<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
            <h1>Sửa Màu</h1>
            <form action="index.php?action=updatesize" method="POST">
                <input type="hidden" name="idkichco" value="<?= $idkichco ?>" id="">
                <input type="text" name="kichco" value="<?= $kichco ?>" required>
                <button type="submit" name="capnhatsize">Thêm</button>
            </form><br><br>
            <?php if (isset($thanhcong) && $thanhcong != "") {
                echo $thanhcong;
            }  ?>
        </div>
    </div>
</section>