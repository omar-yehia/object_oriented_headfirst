<?php
class MyClass {
    public $value;

    public function __construct($value) {
        $this->value = $value;
    }
}

// Create two objects of MyClass
$obj1 = new MyClass(10);
$obj2 = new MyClass(20);

// Create an array and add $obj1 to it
$myArray = [$obj1];

// Now, add $obj2 to the same array
$myArray[] = $obj2;

// Modify $obj1's value
$obj1->value = 100;

// Check the values in the array
foreach ($myArray as $obj) {
    echo $obj->value . "\n";
}