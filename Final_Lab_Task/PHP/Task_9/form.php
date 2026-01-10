<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Information Form</title>
</head>
<body>

<h2>User Information Form</h2>

<form action="process.php" method="post">
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="1"><br><br>

    
    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" id="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="Female" id="female">
    <label for="female">Female</label>
    <input type="radio" name="gender" value="Other" id="other">
    <label for="other">Other</label>
    <br><br>

    
    <label>Skills:</label>
    <input type="checkbox" name="skills[]" value="HTML" id="html">
    <label for="html">HTML</label>
    <input type="checkbox" name="skills[]" value="CSS" id="css">
    <label for="css">CSS</label>
    <input type="checkbox" name="skills[]" value="JavaScript" id="js">
    <label for="js">JavaScript</label>
    <input type="checkbox" name="skills[]" value="PHP" id="php">
    <label for="php">PHP</label>
    <br><br>

   
    <label for="country">Country:</label>
    <select name="country" id="country">
        <option value="">Select Country</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
