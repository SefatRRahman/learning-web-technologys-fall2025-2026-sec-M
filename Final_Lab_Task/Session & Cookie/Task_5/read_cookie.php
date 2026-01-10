<?php
$theme = $_COOKIE['user_theme'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read Theme Cookie</title>
</head>
<body>
<h1>Read User Theme</h1>

<?php if($theme): ?>
    <p>Hello! Your preferred theme is <?= $theme ?>.</p>
<?php else: ?>
    <p>No theme selected. Please choose your preferred theme.</p>
<?php endif; ?>

<a href="delete_cookie.php">Delete Cookie</a> | 
<a href="set_cookie.php">Set Theme Again</a>
</body>
</html>
