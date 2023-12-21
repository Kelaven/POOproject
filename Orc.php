<?php

require_once __DIR__.'/Character.php';

class Orc extends Character{

    // * attributs
    private float $damage;

    // * méthode magique
    public function __construct(int $health, int $rage){
        parent::__construct($health, $rage);
    }

    // public function __toString(){
    //     return 'test';
    // }

    // * méthodes
    public function get_damage(): float{
        return $this->damage;
    }
    public function set_damage(float $damage){
        $this->damage = $damage;
    }

}

$orc = new Orc(200, 120);
var_dump($orc);