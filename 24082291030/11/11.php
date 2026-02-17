<?php
echo "Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : vivek patel <br>";
echo "Enrollment Number : 24082291030 <br>";
echo "------------------------------------------<br><br>";

class Student {
    public $name;
    public $age;

    public function display() {
        echo "Name: $this->name Age: $this->age";
    }
}

$s1 = new Student();
$s1->name = "vivek<br>";
$s1->age = 21;
$s1->display();
?>