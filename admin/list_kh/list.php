<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
            <h1>Danh Sách Tài Khoản</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Số điện thoại</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tùy biến</th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?action=suatk&id=" . $id;
                    $xoatk = "index.php?action=xoatk&id=" . $id;

                    echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $phone_number . '</td>
                        <td>' . $password . '</td>
                        <td>' . $email . '</td>
                        <td>' . $address . '</td>
                        <td>
                        <a href="' . $xoatk . '"><input type="button" value="Xóa" onclick="return confirm(\'bạn có muốn xóa tài khoản này\')"></a>
                    </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</section>