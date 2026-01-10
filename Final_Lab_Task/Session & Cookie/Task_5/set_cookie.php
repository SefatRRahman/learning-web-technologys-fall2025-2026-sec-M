<?php
if(isset($_POST['submit'])){
    $theme = $_POST['theme'] ?? 'Light';

    setcookie('user_theme', $theme, time() + 7*24*3600);

    header("Location: read_cookie.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set Theme Cookie</title>
</head>
<body>
<h1>Select Your Preferred Theme</h1>

<form method="post">
    <label>
        <input type="radio" name="theme" value="Light" checked> Light
    </label>
    <br>
    <label>
        <input type="radio" name="theme" value="Dark"> Dark
    </label>
    <br><br>
    <input type="submit" name="submit" value="Set Theme">
</form>
</body>
</html>
