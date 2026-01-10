<?php
session_start();

$products = [
    1=>['name'=>'Laptop','price'=>500],
    2=>['name'=>'Phone','price'=>300],
    3=>['name'=>'Headphones','price'=>50],
    4=>['name'=>'Keyboard','price'=>30],
    5=>['name'=>'Mouse','price'=>20],
    6=>['name'=>'Monitor','price'=>150],
];

if(isset($_GET['remove'])){
    $id = $_GET['remove'];
    unset($_SESSION['cart'][$id]);
    header("location:cart.php");
    exit;
}

if(isset($_POST['update'])){
    foreach($_POST['qty'] as $id=>$q){
        if($q>0) $_SESSION['cart'][$id]=$q;
        else unset($_SESSION['cart'][$id]);
    }
    header("location:cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
</head>
<body>
<h2>Shopping Cart</h2>
<a href="index.php">Back to Products</a>
<hr>

<?php if(!empty($_SESSION['cart'])): ?>
<form method="post">
<table border="1" cellpadding="5">
<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Subtotal</th><th>Action</th></tr>
<?php 
$grand = 0;
foreach($_SESSION['cart'] as $id=>$qty):
    $p = $products[$id];
    $subtotal = $p['price']*$qty;
    $grand += $subtotal;
?>
<tr>
<td><?= $p['name'] ?></td>
<td>$<?= $p['price'] ?></td>
<td><input type="number" name="qty[<?= $id ?>]" value="<?= $qty ?>" min="0"></td>
<td>$<?= $subtotal ?></td>
<td><a href="cart.php?remove=<?= $id ?>">Remove</a></td>
</tr>
<?php endforeach; ?>
<tr><td colspan="3"><strong>Grand Total</strong></td><td colspan="2"><strong>$<?= $grand ?></strong></td></tr>
</table>
<br>
<input type="submit" name="update" value="Update Cart">
<a href="checkout.php" style="margin-left:20px;">Proceed to Checkout</a>
</form>
<?php else: ?>
<p>Your cart is empty.</p>
<?php endif; ?>

</body>
</html>
