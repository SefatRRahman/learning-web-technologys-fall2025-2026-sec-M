<?php
session_start();


if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
$cookieVal = $_COOKIE['username'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome to Dashboard, <?= $username ?>!</h2>

<p>Session ID: <?= session_id() ?></p>

<?php if($cookieVal): ?>
<p>Cookie "username" is set: <?= $cookieVal ?></p>
<?php else: ?>
<p>No cookie is set.</p>
<?php endif; ?>

<br>
<a href="logout.php">Logout</a>

</body>
</html>
