<?php
// Variables
$name="Jeevitha";
$dept="IT";
echo "Name : $name\n";
echo "Department : $dept\n";

// if-else
$mark=65;
if($mark>=50){
    echo "You are pass";
}else{
    echo "You are fail retake test";
}

echo "\nNow studying loops...\n";
echo "Use for loop to print 1 to 10...\n";
//loops
//for loops
for($i=1;$i<=10;$i++){
    echo $i."\n";
}

//functions
function add($x,$y){
    return $x+$y;
}
echo add(1,2);
echo "\nGit + PHP learning is going well!\n";

// array function
$sum = function($a, $b) {
    return $a + $b;
};

echo $sum(3, 4);

// return value function
function multiply($c,$d){
    return $c*$d;
}
echo multiply(1,2);

// array-> to store multiple values in one variable
$numbers = [10, 20, 30]; //array initialization
// types->indexed, associative, multidimensional
// 1. indexed array
$fruits = ["Apple", "Banana", "Mango"];

echo $fruits[0]; // Apple
echo $fruits[1]; // Banana
// index starting from 0
// traverse 
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// associative array-> Here we use keys instead of index numbers
$student = [
    "name" => "Jeevitha",
    "dept" => "IT",
    "mark" => 65
];

echo $student["name"];
echo $student["dept"];

// traverse
foreach ($student as $key => $value) {
    echo $key . " : " . $value . "\n";
}

// multidimensional array->Array inside another array
$students = [
    ["Jeevitha", "IT", 65],
    ["Anu", "CSE", 80],
    ["Ravi", "ECE", 45]
];

echo $students[0][0]; // Jeevitha
echo $students[1][2]; // 80

// traverse
foreach ($students as $student) {
    echo "Name: " . $student[0] . "\n";
    echo "Dept: " . $student[1] . "\n";
    echo "Mark: " . $student[2] . "\n";
    echo "--------\n";
}

// built-in functions
// count
echo count($numbers);

// sum of array elements
echo array_sum($numbers);

// in_array
$colors = ["red", "blue", "green"];
if (in_array("blue", $colors)) {
    echo "Color found";
}

// push
$numbers = [1, 2];
array_push($numbers, 3, 4);

// small practice program
$marks = [65, 45, 80, 30];
function result($mark) {
    if ($mark >= 50) {
        return "Pass";
    } else {
        return "Fail";
    }
}
foreach ($marks as $m) {
    echo $m . " - " . result($m) . "\n";
}
