<?php

session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['username'] = "Sefat"; 
}

if(isset($_SESSION['visits'])){
    $_SESSION['visits'] += 1;
}else{
    $_SESSION['visits'] = 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session Example</title>
</head>
<body>
<h1>Welcome, <?= $_SESSION['username'] ?>!</h1>
<p>You have visited this page <?= $_SESSION['visits'] ?> time(s) in this session.</p>

<a href="session_destroy.php">End Session / Logout</a>
</body>
</html>
