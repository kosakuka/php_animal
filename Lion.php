<?php

require_once('./Animal.php');
class Lion extends Animal{
    public function __construct(){
        parent::__construct();
        $this->strength = 10 + $this->iv;
        $this->name = "らいおん";
        $this->voice = "gaooo";
    }
    
}