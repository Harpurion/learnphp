<?php
$test = 10;
$test = 3.1;
$test = "Hello";
$test = "😂";
$test = true;
$test = false;
$test = null;
$lol;
var_dump($test);
var_dump($lol);
$test = [1, 2, "three", true];
var_dump($test);
$test = new stdClass();
$test->name = "John";
var_dump($test);
$num1 = 100000000;
$num2 = "67";
var_dump($num1 === $num2);
?>