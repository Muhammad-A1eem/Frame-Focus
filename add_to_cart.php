<?php
session_start();

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if item is already in the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $price = floatval(htmlspecialchars($_POST['price']));
    $image = htmlspecialchars($_POST['image']);
    $quantity = 1; // Default quantity

    // Add item to cart
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] === $id) {
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        $_SESSION['cart'][] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'images' => [$image],
            'quantity' => $quantity
        ];
    }

    header('Location: cart.php'); // Redirect to cart page
    exit;
}
?>
