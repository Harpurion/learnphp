<?php

function hello() {
    var_dump("Hello!");
}

hello();

function helloname($name='Nameless') {
    var_dump("Hello, $name!");
}

helloname('Harpur');
helloname('Sotupede');

function hellonameandage($name='Nameless', $age=0) {
    var_dump("Hello, $name! You are $age years old.");
}

hellonameandage('Harpur', 25);
hellonameandage('Sotupede', 30);

helloname();

$test = function (){

};

var_dump($test);

$numbers = [1, 2, 3, 4, 5];
array_map(function ($n) {
    return $n * $n;
}, $numbers);
$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);

function cube($a) {
    if($a < 0) {
        return "Negative numbers are not allowed.";
    }
    return $a * $a * $a;
    var_dump('HEHEHHH');
}

var_dump(cube(3)); // no 1

$answer = cube(3); // no 2
$test = "Cube of 3 is $answer"; 
echo $test; 