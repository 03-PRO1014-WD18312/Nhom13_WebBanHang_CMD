<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_add">
            <h1>Thêm mới biến thể</h1>
            <form action="index.php?action=addbienthe" method="POST">
                    <label for="">Tên biến thể</label>
                    <select name="name" id="inputName">
                        <option value="color">Màu Sắc</option>
                        <option value="size">Size</option>
                    </select>
                <div class="value1">
                    <label for="">Giá trị</label>
                    <input type="text" name="value" id=""required>
                </div>
                <div class="value2" style="display: none">
                    <label for="">Giá trị</label>
                    <input type="text" name="value" id=""required>
                </div>

                <button type="submit" name="addbienthe">Thêm mới</button>
            </form>
            <?php if (isset($thanhcong) && $thanhcong != "") {
                echo $thanhcong;
            }  ?>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#inputName').change(function(event) {
            var _ip = $('#inputName').val();
            if (_ip == 'size') {
                $('.value2').show();
                $('.value1').hide();
            } else {
                $('.value1').show();
                $('.value2').hide();
            }
        });
    });
</script>
