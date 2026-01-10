<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session Destroyed</title>
</head>
<body>
<h1>Logout Successful!</h1>
<p>Your session has been ended.</p>

<a href="session_start.php">Go back to Start Session</a>
</body>
</html>
