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

$message = "";

if(isset($_POST['place'])){
    $name = $_POST['name'] ?? "";
    $email = $_POST['email'] ?? "";

    if(!$name || !$email){
        $message = "Please fill all fields";
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $message = "Invalid email";
    } else {
        $message = "Order placed successfully! Thank you, $name.";
        unset($_SESSION['cart']); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
</head>
<body>

<h2>Checkout</h2>
<a href="cart.php">Back to Cart</a><br><br>

<?php if(!empty($_SESSION['cart'])): ?>
<h3>Order Summary</h3>
<table border="1" cellpadding="5">
<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr>
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
<td><?= $qty ?></td>
<td>$<?= $subtotal ?></td>
</tr>
<?php endforeach; ?>
<tr><td colspan="3"><strong>Grand Total</strong></td><td><strong>$<?= $grand ?></strong></td></tr>
</table>
<br>
<form method="post" id="checkoutForm">
Name: <input type="text" name="name" id="name"><br><br>
Email: <input type="text" name="email" id="email"><br><br>
<input type="submit" name="place" value="Place Order">
</form>
<p style="color:red;"><?= $message ?></p>

<script>
document.getElementById("checkoutForm").addEventListener("submit", function(e){
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    let msg="";
    if(!name) msg="Name is required";
    else if(!email.includes("@") || !email.includes(".")) msg="Invalid email";
    if(msg){ e.preventDefault(); alert(msg); }
});
</script>

<?php else: ?>
<p>Your cart is empty.</p>
<?php endif; ?>

</body>
</html>
