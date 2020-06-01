<?php session_start() ?>
<?php

$items = array(
    'item1' => 'Item 1',
    'item2' => 'Item 2',
    'item3' => 'Item 3',
    'item4' => 'Item 4',
);

$itemId = $_POST['item'];
$_SESSION['selectedItem'] = $itemId;
echo 'Selected Item: ', $items[$itemId];
?>

<a href="./cart.php">Add to Cart</a>