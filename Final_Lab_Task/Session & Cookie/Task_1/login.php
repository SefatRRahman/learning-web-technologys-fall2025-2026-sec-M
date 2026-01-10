<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit();
}

$message = "";

if(isset($_POST['login'])){
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $valid_user = "admin";
    $valid_pass = "admin123";
    $role = "Admin";

    if($username=="" || $password==""){
        $message = "Please enter both username and password.";
    }
    elseif($username === $valid_user && $password === $valid_pass){
      
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = date("Y-m-d H:i:s");
        $_SESSION['user_role'] = $role;

        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
<h2>Login</h2>
<p style="color:red;"><?= $message ?></p>

<form method="post">
    Username: <input type="text" name="username" value="<?= $_POST['username'] ?? '' ?>"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>
