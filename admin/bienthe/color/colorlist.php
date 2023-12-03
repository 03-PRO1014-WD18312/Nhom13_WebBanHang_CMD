<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
            <h1>Bảng Màu</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Màu</th>
                    <th>Tùy biến</th>
                </tr>
                <?php foreach ($colorlist as $color) {
                    extract($color);
                    $suamau = "index.php?action=suamau&idcolor=" . $idcolor ;
                    $xoamau = "index.php?action=xoamau&idcolor=" . $idcolor ;
                    echo '
                    <tr>
                        <td>'.$idcolor.'</td>
                        <td>'.$color.'</td>
                        <td>
                        <a href="'.$suamau.'">Sửa</a> | 
                        <a href="' . $xoamau . '"><input type="button" value="Xóa" onclick="return confirm(\'bạn có muốn xóa \')"></a>
                        </td>
                    </tr>
                        ';
                }
                ?>
            </table>
        </div>
    </div>
</section>