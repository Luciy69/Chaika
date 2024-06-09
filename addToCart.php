<?php
session_start();

$productId = $_POST['productId'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

array_push($_SESSION['cart'], $productId);

echo json_encode(['message' => 'Товар добавлен в корзину']);
?>
