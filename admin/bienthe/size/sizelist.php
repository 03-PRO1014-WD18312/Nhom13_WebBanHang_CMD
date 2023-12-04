<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
            <h1>Bảng Size</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Bảng Size</th>
                    <th>Tùy biến</th>
                </tr>
                <?php foreach ($sizelist as $size) {
                    extract($size);
                    $suasize = "index.php?action=suasize&idkichco=" . $idkichco;
                    $xoasize = "index.php?action=xoasize&idkichco=" . $idkichco;
                    echo '
                    <tr>
                        <td>'.$idkichco.'</td>
                        <td>'.$kichco.'</td>
                        <td>
                        <a href="'.$suasize.'">Sửa</a> | 
                        <a href="' . $xoasize . '"><input type="button" value="Xóa" onclick="return confirm(\'bạn có muốn xóa\')"></a>
                        </td>
                    </tr>
                        ';
                }
                ?>


            </table>
        </div>
    </div>
</section>