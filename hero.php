<?php

require_once __DIR__.'/Character.php';

// * création de la classe fille
class Hero extends Character {

    // * création des attributs
    private ?string $weapon; // le ? sert à indiquer que la string peut être null
    private float $weaponDamage;
    private ?string $shield;
    private float $shieldValue;
    private float $attacked;

    // * méthode magique
    /**
     * méthode magique pour donner des valeurs aux attributs weapon (string), weaponDamage (float), shield (string), shieldValue (float)
     * @param string $weapon
     * @param float $weaponDamage
     * @param string $shield
     * @param float $shieldValue
     */
    public function __construct(int $health, int $rage, string $weapon, float $weaponDamage, string $shield, float $shieldValue){
        // accéder à la méthode magique de Caracter.php
        parent::__construct($health, $rage);
        $this->weapon = $weapon;
        $this->weaponDamage = $weaponDamage;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }

    // * setters
    /**
     * méthode pour donner une valeur à l'attribut weapon (string)
     * @param string $weapon
     * 
     * @return [type]
     */
    public function set_weapon(string $weapon){
        $this->weapon = $weapon;
    }
    /**
     * méthode pour donner une valeur à l'attribut weaponDamage (float)
     * @param float $weaponDamage
     * 
     * @return [type]
     */
    public function set_weaponDamage(float $weaponDamage){
        $this->weaponDamage = $weaponDamage;
    }
    /**
     * méthode pour donner une valur à l'attribut shield (string)
     * @param string $shield
     * 
     * @return [type]
     */
    public function set_shield(string $shield){
        $this->shield = $shield;
    }
    /**
     * méthode pour donner une valur à l'attribut shieldValue (float)
     * @param float $shieldValue
     * 
     * @return [type]
     */
    public function set_shieldValue(float $shieldValue){
        $this->shieldValue = $shieldValue;
    }


    // * getters
    /**
     * méthode pour lire la valeur de l'attribut weapon (string)
     * @return string
     */
    public function get_weapon(): string{
        return $this->weapon;
    }
    /**
     * méthode pour lire la valeur de l'attribut weaponDamage (float)
     * @return float
     */
    public function get_weaponDamage(): float{
        return $this->weaponDamage;
    }
    /**
     * méthode pour lire la valeur de l'attribut shield (string)
     * @return string
     */
    public function get_shield(): string{
        return $this->shield;
    }
    /**
     * méthode pour lire la valeur de l'attribut shieldValue (float)
     * @return float
     */
    public function get_shieldValue(): float{
        return $this->shieldValue;
    }



    // * méthode pour retourner les infos du héro crée
    public function __toString(): string{
        return 'Le héros a une santé de '.$this->get_health().', une rage de '.$this->get_rage().', une arme de type '.$this->get_weapon().', qui fait des dégats de '.$this->get_weaponDamage().', un bouclier de type '.$this->get_shield().', qui absorbe '.$this->get_shieldValue().' points de dégâts. Le héro se fait attaquer et il ne lui reste plus que '.$this->attacked.' points de vie ! Sa rage est montée à '.$this->upRage.' d\'un coup !';
    }


    // * méthode attacked
    public function attacked(float $attacked){
        $attackedConversion = $this->get_health() - ($attacked - $this->get_shieldValue());
        $this->set_health($attackedConversion);
        $this->set_raged();
    }

    // * méthode raged
    public function set_raged(){
        $rage = $this->get_rage() + 30;
        $this->set_rage($rage);
    }




}
