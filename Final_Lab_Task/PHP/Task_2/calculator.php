<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <style>
        body{font-family: Arial;}
        fieldset{width:300px; margin:50px auto;}
        input, select{width:100%;}
    </style>
</head>
<body>

<form action="calculatorCheck.php" method="post" id="calcForm">
    <fieldset>
        <h2>Calculator</h2>

        <table>
            <tr>
                <td>Number 1</td>
                <td><input type="text" name="num1" id="num1"></td>
            </tr>

            <tr>
                <td>Number 2</td>
                <td><input type="text" name="num2" id="num2"></td>
            </tr>

            <tr>
                <td>Operation</td>
                <td>
                    <select name="op" id="op">
                        <option value="">Select</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Calculate"></td>
            </tr>
        </table>

        <p id="errorMsg" style="color:red;"></p>
    </fieldset>
</form>

<script src="validation.js"></script>
</body>
</html>
