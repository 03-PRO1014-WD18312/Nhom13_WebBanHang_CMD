<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
            <h1>Danh sách sản phẩm</h1>
            <table>
                <tr>
                    <th>Tên Loại Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Size</th>
                    <th>Màu</th>
                    <th>Giá gốc</th>
                    <th>Giá Khuyến mãi</th>
                    <th>Tùy biến</th>
                </tr>
                <?php foreach ($danhsachbienthesanpham as $value) {
                    extract($value);
                    echo '
                <tr>
                    <td>' . $tenloaisanpham . '</td>
                    <td>' . $soluongsanpham . '</td>
                    <td>' . $size . '</td>
                    <td>' . $color . '</td>
                    <td>' . $giatiengoc . '</td>
                    <td>' . $giakhuyenmai . '</td>
                    <td><a href="">Sửa</a> | <a href="">Xóa</a></td>
                </tr>
                        ';
                }
                ?>


            </table>
        </div>
    </div>
</section>