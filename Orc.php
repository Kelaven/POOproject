<?php

require_once __DIR__.'/Character.php';

class Orc extends Character{

    // * attributs
    private float $damage;

    // * méthode magique
    public function __construct(int $health, int $rage){
        parent::__construct($health, $rage);
        // $this->damage = $damage;
    }
    public function __toString(): string{
        return 'L\'orc a une santé de '.$this->get_health().', une rage de '.$this->get_rage();
    }


    // * méthodes
    public function get_damage(): float{
        return $this->damage;
    }
    public function set_damage(float $damage){
        $this->damage = $damage;
    }
    public function attack(): float{
        $this->set_damage(rand(600, 800));
        return $this->get_damage();
    }

}


