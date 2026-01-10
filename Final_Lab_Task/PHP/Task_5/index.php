<?php
session_start();

$products = [
    1=>['name'=>'Laptop','price'=>500,'image'=>'https://www.startech.com.bd'],
    2=>['name'=>'Phone','price'=>300,'image'=>'https://www.startech.com.bd'],
    3=>['name'=>'Headphones','price'=>50,'image'=>'https://www.startech.com.bd'],
    4=>['name'=>'Keyboard','price'=>30,'image'=>'https://www.startech.com.bd'],
    5=>['name'=>'Mouse','price'=>20,'image'=>'https://www.startech.com.bd'],
    6=>['name'=>'Monitor','price'=>150,'image'=>'https://www.startech.com.bd'],
];


if(isset($_GET['add'])){
    $id = $_GET['add'];
    if(isset($products[$id])){
        if(isset($_SESSION['cart'][$id])) $_SESSION['cart'][$id]++;
        else $_SESSION['cart'][$id] = 1;
    }
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Catalog</title>
</head>
<body>

<h2>Products</h2>
<a href="cart.php">View Cart (<?= isset($_SESSION['cart'])?array_sum($_SESSION['cart']):0 ?>)</a>
<hr>

<?php foreach($products as $id=>$p): ?>
<div style="border:1px solid #ccc; padding:10px; width:200px; margin-bottom:10px;">
    <img src="<?= $p['image'] ?>" width="100" alt="<?= $p['name'] ?>"><br>
    <strong><?= $p['name'] ?></strong><br>
    Price: $<?= $p['price'] ?><br>
    <a href="index.php?add=<?= $id ?>">Add to Cart</a>
</div>
<?php endforeach; ?>

</body>
</html>
