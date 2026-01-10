<?php
session_start();

$validUsername = "student";
$validPassword = "aiub123";

if(isset($_POST['login'])){
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    if($username === $validUsername && $password === $validPassword){
       
        $_SESSION['username'] = $username;

        
        if($remember){
            setcookie('username', $username, time() + 7*24*3600); 
        }

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password!</p>";
        echo "<a href='login.php'>Go Back</a>";
    }
} else {
    header("Location: login.php");
    exit();
}
