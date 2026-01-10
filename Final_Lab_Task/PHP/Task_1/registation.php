<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>

<form id="regForm" action="registationCheck.php" method="post">
    <fieldset>
        <h1>Registration Page</h1>

        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm" id="confirm"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Registation"></td>
            </tr>
        </table>

        <p id="errorMsg" style="color:red;"></p>

    </fieldset>
</form>

<script src="validation.js"></script>

</body>
</html>
