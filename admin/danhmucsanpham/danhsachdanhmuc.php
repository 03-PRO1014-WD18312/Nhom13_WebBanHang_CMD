<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
            <h1>Danh sách danh mục</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên Danh mục</th>
                    <th>Tùy biến</th>
                </tr>
                <?php foreach ($danhsachdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadanhmuc = "index.php?action=suadanhmuc&iddanhmuc=" . $iddanhmuc;
                    $xoadanhmuc = "index.php?action=xoadanhmuc&iddanhmuc=" . $iddanhmuc;
                    echo '
                    <tr>
                        <td>'.$iddanhmuc.'</td>
                        <td>'.$tendanhmuc.'</td>
                        <td>
                        <a href="'.$suadanhmuc.'">Sửa</a> | 
                        <a href="' . $xoadanhmuc . '"><input type="button" value="Xóa" onclick="return confirm(\'bạn có muốn xóa danh mục\')"></a>
                        </td>
                    </tr>
                        ';
                }
                ?>


            </table>
        </div>
    </div>
</section>