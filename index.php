<?php
$num = 10;
if($num > 5) {
    var_dump('Bigger');

for($i=0; $i<10; $i++){
    var_dump($i);
}

for($i=9; $i>=0; $i--){
    var_dump($i);
}

if($num > 5) {
    var_dump('Bigger');
} else {
    var_dump('Smaller');
for($i=2; $i<1_000_000; $i*=2){
    var_dump($i);
}

if($num > 5) {
    var_dump('Bigger');
} else if($num < 5) {
    var_dump('Smaller');
} else {
    var_dump('Equal');
$time = time();
$n = 0;
while($time+1 > time()) {
    $n++;
}
var_dump($n);

while(false){
    var_dump('WHILE');
}

do {
    var_dump('DO');
} while(false);

// while(true) {

// }

$fruits = ['Apple', 'Cherry', 'Banana'];

foreach($fruits as $fruit) {
    var_dump($fruit);
}

$i = 1;

switch($i) {
    case 1:
        var_dump('yx');
        break;
    case 2:
        var_dump('kaks');
        break;
    case 3:
    case 4:
        var_dump('kolm neli');
        break;
    case 5:
        var_dump('viis');
    case 6: 
        var_dump('kuus');
        break;
    default:
        var_dump('dunno');
foreach($fruits as $key=>$fruit) {
    var_dump($fruit, $key);
}