<?php
session_start();

// Kiểm tra xem session giỏ hàng có tồn tại chưa, nếu chưa thì tạo mới
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];
    $productColor = $_POST['color'];
    // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
    $index = array_search($productId, array_column($_SESSION['cart'], 'id'));
    // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
    if ($index !== false) {
        $_SESSION['cart'][$index]['quantity'] += 1;
    } else {
        // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
        $product = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'color' => $productColor,
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
    }
    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['cart']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
