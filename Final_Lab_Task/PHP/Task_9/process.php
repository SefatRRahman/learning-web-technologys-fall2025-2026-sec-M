<?php
if(isset($_POST['submit'])){

 
    $name = $_POST['name'] ?? "";
    $email = $_POST['email'] ?? "";
    $age = $_POST['age'] ?? "";
    $gender = $_POST['gender'] ?? "";
    $skills = $_POST['skills'] ?? [];
    $country = $_POST['country'] ?? "";

    $errors = [];


    if($name=="") $errors[] = "Name is required.";
    if($email=="") $errors[] = "Email is required.";
    if($age=="" || $age<=0) $errors[] = "Age must be a positive number.";
    if(!$gender) $errors[] = "Gender must be selected.";
    if(empty($skills)) $errors[] = "At least one skill must be selected.";

    echo "<h2>Form Submission Result</h2>";

    if(!empty($errors)){
        echo "<p style='color:red;'>Errors:</p><ul>";
        foreach($errors as $err) echo "<li>$err</li>";
        echo "</ul>";
        echo "<a href='form.php'>Go Back</a>";
    } else {
        echo "<p style='color:green;'>Form submitted successfully!</p>";
        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Age:</strong> $age <br>";
        echo "<strong>Gender:</strong> $gender <br>";
        echo "<strong>Skills:</strong> ".implode(", ", $skills)."<br>";
        echo "<strong>Country:</strong> $country <br>";

       
        echo "<hr>";
        echo "<h3>Server Info</h3>";
        echo "Request Method: ".$_SERVER['REQUEST_METHOD']."<br>";
        echo "Script Name: ".$_SERVER['SCRIPT_NAME']."<br>";
    }

} else {
    echo "<p>No data submitted. <a href='form.php'>Go Back</a></p>";
}
?>
