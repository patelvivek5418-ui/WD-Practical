<?php
echo "Write a PHP script to demonstrate the use of constants and arithmetic / logical operators in PHP.<br>";
echo "Name : vivek patel <br>";
echo "Enrollment Number : 24082291030 <br>";
echo "------------------------------------------<br><br>";

define("PI", 3.14);
define("Dhamo", "My PHP Operators");

echo "Welcome to " . Dhamo . "<br>";
echo "Value of PI: " . PI . "<br><br>";

$a = 10;
$b = 5;

echo "<h2>Arithmetic Operations</h2>";
echo "a = $a, <br> b = $b <br>";

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br><br>";

?>