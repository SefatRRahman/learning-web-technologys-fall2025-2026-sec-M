<?php
if(isset($_POST['submit'])){

    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    $op   = $_POST['op'];

    if($num1=="" || $num2=="" || $op==""){
        echo "Null submission!";
    }
    elseif(!is_numeric($num1) || !is_numeric($num2)){
        echo "Both inputs must be numeric!";
    }
    else{
        if($op == "+"){
            echo "Result: ".($num1 + $num2);
        }
        elseif($op == "-"){
            echo "Result: ".($num1 - $num2);
        }
        elseif($op == "*"){
            echo "Result: ".($num1 * $num2);
        }
        elseif($op == "/"){
            if($num2 == 0){
                echo "Error: Division by zero!";
            } else {
                echo "Result: ".($num1 / $num2);
            }
        }
    }

}else{
    header('location: calculator.php');
}
?>
