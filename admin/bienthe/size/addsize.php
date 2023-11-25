<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
            <h1>Thêm kích cỡ sản phẩm</h1>
            <form action="index.php?action=addsize" method="POST">
                <input type="text" name="add_kichco" placeholder="Nhập size..." required>
                <button type="submit" name="adkichco">Thêm</button>
            </form><br><br>
            <?php if (isset($thanhcong) && $thanhcong != "") {
                echo $thanhcong;
            }  ?>
        </div>
    </div>
</section>