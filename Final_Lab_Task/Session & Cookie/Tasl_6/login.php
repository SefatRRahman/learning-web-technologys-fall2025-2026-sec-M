<?php

$cookieUsername = $_COOKIE['username'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<h1>Login Page</h1>

<form action="process_login.php" method="post">
    <label>Username: 
        <input type="text" name="username" value="<?= $cookieUsername ?>">
    </label>
    <br><br>
    <label>Password: 
        <input type="password" name="password">
    </label>
    <br><br>
    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label>
    <br><br>
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>
