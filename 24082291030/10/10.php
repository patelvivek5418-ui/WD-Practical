<?php
echo "Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort().<br>";
echo "Name : vivek patel <br>";
echo "Enrollment Number : 24082291030 <br>";
echo "------------------------------------------<br><br>";

$students = array(
    "vivek" => 85,
    "dhumo" => 90,
    "deti" => 75
);

asort($students);
echo "Sorted by Value:<br>";
foreach($students as $name => $marks) {
    echo "$name => $marks <br>";
}

ksort($students);
echo "<br>Sorted by Key:<br>";
foreach($students as $name => $marks) {
    echo "$name => $marks <br>";
}
?>