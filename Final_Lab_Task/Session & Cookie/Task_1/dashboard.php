<?php
session_start();


if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Welcome to Dashboard</h2>
<p>Hello, <?= $_SESSION['username'] ?>!</p>
<p>User Role: <?= $_SESSION['user_role'] ?></p>
<p>Login Time: <?= $_SESSION['login_time'] ?></p>

<a href="profile.php">Go to Profile</a><br>
<a href="logout.php">Logout</a>
</body>
</html>
