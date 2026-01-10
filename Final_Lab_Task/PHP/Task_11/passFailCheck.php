<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $marks = $_POST['marks'];

    if($name=="" || $marks==""){
        $result = "Please enter name and marks.";
    } elseif($marks >= 50){
        $result = "$name has Passed!";
    } else {
        $result = "$name has Failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pass/Fail Checker</title>
</head>
<body>

<h2>Student Pass/Fail System</h2>

<form method="post">
    Name: <input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>"><br><br>
    Marks: <input type="number" name="marks" value="<?= $_POST['marks'] ?? '' ?>"><br><br>
    <input type="submit" name="submit" value="Check Result">
</form>

<hr>
<?php if(isset($result)) echo $result; ?>

</body>
</html>
