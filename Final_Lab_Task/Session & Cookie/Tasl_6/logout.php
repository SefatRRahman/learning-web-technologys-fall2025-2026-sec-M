<?php
session_start();

session_unset();
session_destroy();

setcookie('username', '', time() - 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logout</title>
</head>
<body>
<h1>Logout Successful!</h1>
<p>Your session has ended.</p>

<a href="login.php">Login Again</a>
</body>
</html>
