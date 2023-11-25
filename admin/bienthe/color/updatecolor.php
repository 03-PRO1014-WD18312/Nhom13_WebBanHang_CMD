<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
            <h1>Sửa Màu</h1>
            <form action="index.php?action=updatecolor" method="POST">
                <input type="hidden" name="idcolor" value="<?= $idcolor ?>" id="">
                <input type="text" name="color" value="<?= $color ?>" required>
                <button type="submit" name="capnhatmau">Thêm</button>
            </form><br><br>
            <?php if (isset($thanhcong) && $thanhcong != "") {
                echo $thanhcong;
            }  ?>
        </div>
    </div>
</section>