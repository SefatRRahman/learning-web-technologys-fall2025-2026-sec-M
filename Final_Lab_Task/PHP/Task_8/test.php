<?php

$name = "Rizvi Rahmamn Sefat";
$studentID = "23-52399-2";
$department = "Computer Science & Engineering";

echo "<h2>Part A: PHP Variables and Output</h2>";
echo "Name: $name <br>";
echo "Student ID: $studentID <br>";
echo "Department: $department <br><hr>";




$num1 = 15;
$num2 = 4;
echo "<h2>Part B: Arithmetic and Type Casting</h2>";
echo "Numbers: $num1 and $num2<br>";
echo "Addition: ".($num1+$num2)."<br>";
echo "Subtraction: ".($num1-$num2)."<br>";
echo "Multiplication: ".($num1*$num2)."<br>";
echo "Division: ".($num1/$num2)."<br>";


$strNum = "50";
$floatNum = 12.7;

echo "String to integer: ".(int)$strNum."<br>";
echo "Float to integer: ".(int)$floatNum."<br><hr>";





$marks = 72;

echo "<h2>Part C: Control Flow</h2>";
echo "Marks: $marks<br>";

if($marks >= 80){
    echo "Grade: A";
} elseif($marks >= 65){
    echo "Grade: B";
} elseif($marks >= 50){
    echo "Grade: C";
} else {
    echo "Grade: Fail";
}
echo "<hr>";




echo "<h2>Part D: Loops</h2>";


echo "Numbers 1 to 10: ";
for($i=1; $i<=10; $i++){
    echo $i." ";
}
echo "<br>";


echo "Even numbers 1 to 20: ";
$j=2;
while($j<=20){
    echo $j." ";
    $j+=2;
}
echo "<hr>";





$languages = ["PHP","JavaScript","Python","C++","Java"];
echo "<h2>Part E: Arrays</h2>";
echo "Favorite Programming Languages:<br>";
foreach($languages as $lang){
    echo "- $lang <br>";
}


$info = [
    "Name"=>"Rizvi Rahman Sefat",
    "Email"=>"sefathasann@gmail.com",
    "City"=>"Dhaka"
];
echo "<br>Student Info:<br>";
foreach($info as $key=>$value){
    echo "$key: $value <br>";
}
echo "<hr>";




echo "<h2>Part F: User-Defined Function</h2>";

function calculateSquare($number){
    return $number * $number;
}

$numToSquare = 7;
echo "Number: $numToSquare <br>";
echo "Square: ".calculateSquare($numToSquare)."<br>";
?>
