<?php
echo "Write a PHP script to demonstrate basic string functions such as strlen(), substr(), trim(), and strpos().<br>";
echo "Name : vivek patel <br>";
echo "Enrollment Number : 24082291030 <br>";
echo "------------------------------------------<br><br>";

$str = " vivek patel  ";

echo "Length: " . strlen($str) . "<br>";
echo "Trimmed: " . trim($str) . "<br>";
echo "Substring: " . substr($str, 2, 5) . "<br>";
echo "Position of 'World': " . strpos($str, "Parmar");
?>