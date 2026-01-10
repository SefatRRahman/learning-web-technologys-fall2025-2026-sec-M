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
    <title>Profile</title>
</head>
<body>
<h2>User Profile</h2>
<ul>
    <li>Username: <?= $_SESSION['username'] ?></li>
    <li>Role: <?= $_SESSION['user_role'] ?></li>
    <li>Login Time: <?= $_SESSION['login_time'] ?></li>
</ul>

<a href="dashboard.php">Back to Dashboard</a><br>
<a href="logout.php">Logout</a>
</body>
</html>
