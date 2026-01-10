<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$cookieMsg = isset($_COOKIE['username']) ? "Cookie exists for username." : "No cookie set.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
<h1>Welcome, <?= $username ?>!</h1>
<p><?= $cookieMsg ?></p>

<a href="logout.php">Logout</a>
</body>
</html>
