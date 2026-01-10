<?php
if(isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $cpass = trim($_POST['confirm']);

    if($name=="" || $email=="" || $pass=="" || $cpass==""){
        echo "Null submission!";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email!";
    }
    elseif($pass != $cpass){
        echo "Password not matched!";
    }
    else{
        echo "Registration Successful<br>";
        echo "Name: ".$name."<br>";
        echo "Email: ".$email;
    }

}else{
    header('location: registation.php');
}
?>
