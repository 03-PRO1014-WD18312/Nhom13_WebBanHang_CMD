<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
            <h1>Danh sách sản phẩm</h1>
            <table>
                <tr>
                    <th>ID Loại Sản Phẩm</th>
                    <th>Tên Loại Sản phẩm</th>
                    <th>Ảnh Loại Sản Phẩm</th>
                    <th>Mô tả sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Tùy biến</th>
                </tr>
                <?php foreach ($danhsachloaisanpham as $loaisanpham) {
                    extract($loaisanpham);
                    $anhloaisanpham = '<img src="../upload/' . $anhloaisanpham . '" width="100px" height="100px"  alt="lỗi" > ';
                    echo '
                <tr>
                    <td>' . $idloaisanpham . '</td>
                    <td>' . $tenloaisanpham . '</td>
                    <td>' . $anhloaisanpham . '</td>
                    <td>' . $motasanpham . '</td>
                    <td>' . $tendanhmuc . '</td>
                    <td><a href="">Sửa</a> | <a href="">Xóa</a></td>
                </tr>
                        ';
                }
                ?>


            </table>
        </div>
    </div>
</section>