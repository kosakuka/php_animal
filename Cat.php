<?php

require('./Animal.php');
class Cat extends Animal{
    public function __construct(){
        parent::__construct();
        $this->strength = 5 + $this->iv;
        $this->voice = "mew";
        $this->name = "ネコ";
    }

}