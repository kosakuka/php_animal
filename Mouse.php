<?php

require_once('./Animal.php');
class Mouse extends Animal{
    public function __construct(){
        parent::__construct();
        $this->strength = 1 + $this->iv;
        $this->name = "γγΊγ";
        $this->voice = "chu";
    }
    
}