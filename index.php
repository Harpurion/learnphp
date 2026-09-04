<?php
$test = true;
$test = false;
$test = true && false;
$test = true && true;
$test = true || false;
$test = !false;
$test = 100 > 5;
$test = 67 > 67;
$test = 55 == 55;
$test = 55 === 55;
$test = 56 >= 56;
$test = 10 == '10';
$test = 10 === '10';
$test = true && false || (true && !false);
var_dump($test);

// kaks võrdus (==) tähendab, et arvuti käest küsid kas on võrdne arv?
// kolm võrdus (===) tähendab, et arvuti käest küsid kas on võrdne arv ja tüüp?