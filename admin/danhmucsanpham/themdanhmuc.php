<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
            <h1>Thêm Danh Mục</h1>
            <form action="index.php?action=themdanhmuc" method="POST">
                <input type="text" name="tendanhmuc" placeholder="Nhập thêm danh mục" required>
                <button type="submit" name="themmoidanhmuc">Thêm</button>
                <!-- <input type="submit" name="themmoidanhmuc" id="themmoidanhmuc" value="Thêm"> -->
            </form><br><br>
            <?php if (isset($thanhcong) && $thanhcong != "") {
                echo $thanhcong;
            }  ?>
        </div>
    </div>
</section>