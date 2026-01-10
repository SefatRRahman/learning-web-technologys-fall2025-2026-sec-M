<?php
setcookie('user_theme', '', time() - 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Cookie</title>
</head>
<body>
<h1>Delete Cookie</h1>
<p>Cookie has been deleted successfully.</p>

<a href="set_cookie.php">Set Theme Again</a>
<a href="read_cookie.php">Check Cookie</a>
</body>
</html>
