<?php
$decision = "";
$name = "";
$department = "";
$days = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'] ?? '';
    $department = $_POST['department'] ?? '';
    $days = $_POST['days'] ?? '';

    if($name=="" || $department=="" || $days==""){
        $decision = "<p style='color:red;'>Please fill in all fields.</p>";
    } elseif(!is_numeric($days) || $days < 0){
        $decision = "<p style='color:red;'>Please enter a valid number of leave days.</p>";
    } else {
        if($days <= 5){
            $status = "Leave Approved";
            $color = "green";
        } else {
            $status = "Pending Approval";
            $color = "orange";
        }

        $decision = "<p>Employee: <strong>$name</strong><br>
                      Department: <strong>$department</strong><br>
                      Leave Days Requested: <strong>$days</strong><br>
                      Decision: <span style='color:$color;'>$status</span></p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Leave Request</title>
</head>
<body>

<h2>Employee Leave Request Form</h2>

<form method="post">
    Employee Name: <input type="text" name="name" value="<?= $name ?>"><br><br>
    Department: <input type="text" name="department" value="<?= $department ?>"><br><br>
    Number of Leave Days: <input type="number" name="days" value="<?= $days ?>" min="0"><br><br>
    <input type="submit" name="submit" value="Submit Request">
</form>


<?= $decision ?>

</body>
</html>
