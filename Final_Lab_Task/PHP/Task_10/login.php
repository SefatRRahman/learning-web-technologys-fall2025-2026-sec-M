<?php

$cookieUser = $_COOKIE['username'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Page</h2>

<form action="process_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?= $cookieUser ?>"><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember Me</label><br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
