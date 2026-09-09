<?php

class box {
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public $hasBeenOpened = false;

    public function Open() {
        $this->isOpen = true;
        $this->hasBeenOpened = true;
    }

     public function close() {
        $this->isOpen = false;
    }

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}