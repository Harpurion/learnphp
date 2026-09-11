<?php

class Box {


    public function __construct(private $w, private $h, private $l) {
        
        var_dump('Poop was created');
    }

    public function volume(){
        return $this->w * $this->h * $this->l;
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __toString() {
        return "I'm a poopie W: $this->w H: $this->h L: $this->l";
    }

    public function __destruct() {
        var_dump('Poop was destroyed');
    }
}

function lol() {
    $box4 = new Box(5, 7, 9);
}

lol();

$box1 = new Box(57, 23, 12);
$box4 = $box1;
$box1 = 57;
$box2 = new Box(10, 20, 30);
var_dump($box1, $box2);
$box3 = clone $box2;
var_dump($box3);
echo $box1;