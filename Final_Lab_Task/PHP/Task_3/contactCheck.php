<?php
if(isset($_POST['submit'])){

    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $subject = $_POST['subject'];
    $message = trim($_POST['message']);
    $fileMsg = "";

  
    if($name=="" || $email=="" || $subject=="" || $message==""){
        $error = "All required fields must be filled!";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Invalid email format!";
    }
    elseif(strlen($message) < 10){
        $error = "Message must be at least 10 characters!";
    }
    else{
        
        if(isset($_FILES['attachment']) && $_FILES['attachment']['name']!=""){
            $allowed = ['jpg','png','pdf','doc','docx'];
            $ext = pathinfo($_FILES['attachment']['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($ext), $allowed)){
                $error = "Invalid file type!";
            }
            elseif($_FILES['attachment']['size'] > 2*1024*1024){ 
                $error = "File size too large!";
            }
            else{
                $fileMsg = "Attachment: ".$_FILES['attachment']['name'];
            }
        }
    }

    if(isset($error)){
        echo "<p style='color:red;'>$error</p>";
        echo "<a href='contact.php'>Go Back</a>";
    }
    else{
        echo "<h3>Email Sent Successfully!</h3>";
        echo "Name: ".$name."<br>";
        echo "Email: ".$email."<br>";
        echo "Subject: ".$subject."<br>";
        echo "Message: ".$message."<br>";
        if($fileMsg!="") echo $fileMsg."<br>";
        echo "<a href='contact.php'>Send Another</a>";
    }

}else{
    header('location: contact.php');
}
?>
