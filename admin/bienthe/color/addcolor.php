<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
            <h1>Thêm màu sản phẩm</h1>
            <form action="index.php?action=addcolor" method="POST">
                <input type="text" name="add_color" placeholder="Nhập màu..." required>
                <button type="submit" name="adcolor">Thêm</button>
            </form><br><br>
            <?php if (isset($thanhcong) && $thanhcong != "") {
                echo $thanhcong;
            }  ?>
        </div>
    </div>
</section>