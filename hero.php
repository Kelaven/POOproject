<?php

// * création de la classe fille
class Hero extends Character {

    // * création des attributs
    private string $weapon;
    private float $weaponDamage;
    private string $shield;
    private float $shieldValue;

    // * méthode magique
    /**
     * méthode magique pour donner des valeurs aux attributs weapon (string), weaponDamage (float), shield (string), shieldValue (float)
     * @param string $weapon
     * @param float $weaponDamage
     * @param string $shield
     * @param float $shieldValue
     */
    public function __construct(string $weapon, float $weaponDamage, string $shield, float $shieldValue){
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

}