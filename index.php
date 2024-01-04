<?php

include __DIR__ . '/Character.php';
include __DIR__ . '/Hero.php';
include __DIR__ . '/Orc.php';

$hero = new Hero(1000, 0, 'épée acérée', 150, 'armure en bronze', 450);
$orc = new Orc(250, 0);



while ($hero->get_health() > 0 && $orc->get_health() > 0) {
    // ! L'orc attaque le héros :
    $orc_attack = $orc->attack();
    $hero->attacked($orc_attack);

    if ($hero->get_health() > 0) { // condition pour que la rage n'augment pas si le héros n'a plus de points de vie
        echo 'L\'orc frappe le héros avec une puissance de '. $orc_attack . '. Les points de vie du héros tombent à '. $hero->get_health() . ' ! Sa rage augmente à ' . $hero->get_rage() . '.<br><br>';
    } else {
        echo 'L\'orc frappe le héros avec une puissance de '. $orc_attack . '. Les points de vie du héros tombent à '. $hero->get_health() . ' ! <br> <br>';
    }
    
    // ! Si le héros n'a plus de points de vie
    if ($hero->get_health() <= 0) {
        echo 'Malgré tous ses efforts, le héros succombe à ses blessures !';
        break;
    }



    // ! Vérification si le héros peut attaquer l'orc :
    if ($hero->get_rage() >= 60) {
        // ! Le héros attaque l'orc :
        $orc->set_health($orc->get_health() - $hero->get_weaponDamage());
        echo 'Le héro est tellement énervé qu\'il riposte et frappe à son tour, d\'une puissance de ' . $hero->get_weaponDamage() . ' ! 
        Les points de vie de l\'orc tombent à ' . $orc->get_health() . '. <br> <br>';
        // ! La rage du héros est réinitialisée : 
        $hero->set_rage(0);
    }

    // ! Si l'orc n'a plus de points de vie
    if ($orc->get_health() <= 0) {
        echo 'L\'orc a vaillament combattu mais il perd finalement le combat !';
        break;
    }

}
