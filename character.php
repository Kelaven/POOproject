<?php
// * création de la classe
class Character {

    // * création des attributs
    private int $health;
    private int $rage;

    // * création des méthodes pour accéder aux attributs (= getters)
    /**
     * méthode permettant de retourner la valeur de l'attribut health
     * @return int
     */
    public function get_health(): int{ // les attributs étant privés, je crée une méthode public pour y accéder en déhors de la classe
        return $this -> health;
    }
    /**
     * méthode permettant de retourner la valeur de l'attribut rage
     * @return int
     */
    public function get_rage(): int{
        return $this -> rage;
    }
    
    // * création des méthodes pour donner des valeurs aux attributs (= setters)
    /**
     * méthode permettant de définir une valeur à l'attribut health
     * @param int $health
     * 
     * @return void
     */
    public function set_health(int $health){
        $this -> health = $health;
    }
    /**
     * méthode permettant de définir une valeur à l'attribut rage
     * @param int $rage
     * 
     * @return void
     */
    public function set_rage(int $rage){
        $this -> rage = $rage;
    }

};

// * création d'un objet à partir de la classe
$character = new Character;

// * modifier la valeur des attributs
$character -> set_health(100);
$character -> set_rage(100);

// * accéder aux attributs
$character -> get_health();
$character -> get_rage();
var_dump($character);

?>