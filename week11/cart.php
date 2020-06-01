<?php
session_start();
$items = array(
    'item1' => 'Item 1',
    'item2' => 'Item 2',
    'item3' => 'Item 3',
    'item4' => 'Item 4',
);
$itemId = $_SESSION['selectedItem'];
$cart = $_SESSION['cart'];
if (!$cart) {
    $cart = array();
}
array_push($cart, $itemId);

echo 'Cart:';
foreach ($cart as $item) {
    echo $items[$item];
}
$_SESSION['cart'] = $cart;

?>
<a href="./cartlist.php">Continue shopping</a>