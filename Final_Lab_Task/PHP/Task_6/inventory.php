<?php
$products = [
    ['name'=>'Laptop','price'=>800,'qty'=>5,'category'=>'Electronics'],
    ['name'=>'Phone','price'=>500,'qty'=>10,'category'=>'Electronics'],
    ['name'=>'Shirt','price'=>40,'qty'=>20,'category'=>'Clothing'],
    ['name'=>'Jeans','price'=>60,'qty'=>15,'category'=>'Clothing'],
    ['name'=>'Book','price'=>15,'qty'=>30,'category'=>'Books']
];

$discounts = [
    'Electronics'=>10,
    'Clothing'=>20,
    'Books'=>5
];

function discountPrice($price, $category, $discounts){
    $disc = $discounts[$category] ?? 0;
    return $price - ($price * $disc / 100);
}

function mostExpensive($products){
    $max = $products[0];
    foreach($products as $p){
        if($p['price'] > $max['price']) $max = $p;
    }
    return $max;
}

$totalValue = 0;
foreach($products as $p){
    $totalValue += discountPrice($p['price'],$p['category'],$discounts) * $p['qty'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory Management</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        th, td { border:1px solid #000; padding:5px; text-align:center; }
        th { background:#eee; }
    </style>
</head>
<body>

<h2>Product Inventory</h2>

<table>
<tr>
<th>Name</th>
<th>Category</th>
<th>Price ($)</th>
<th>Discount (%)</th>
<th>Discounted Price ($)</th>
<th>Quantity</th>
<th>Total Value ($)</th>
</tr>

<?php foreach($products as $p): 
    $discPrice = discountPrice($p['price'],$p['category'],$discounts);
    $total = $discPrice * $p['qty'];
?>
<tr>
<td><?= $p['name'] ?></td>
<td><?= $p['category'] ?></td>
<td><?= $p['price'] ?></td>
<td><?= $discounts[$p['category']] ?? 0 ?></td>
<td><?= $discPrice ?></td>
<td><?= $p['qty'] ?></td>
<td><?= $total ?></td>
</tr>
<?php endforeach; ?>
</table>

<h3>Total Inventory Value: $<?= $totalValue ?></h3>

<?php 
$exp = mostExpensive($products);
?>
<h3>Most Expensive Product: <?= $exp['name'] ?> ($<?= $exp['price'] ?>)</h3>

</body>
</html>
