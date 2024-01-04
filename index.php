<?php

include __DIR__ . '/Character.php';
include __DIR__ . '/Hero.php';
include __DIR__ . '/Orc.php';

$hero = new Hero(1000, 0, 'épée acérée', 150, 'armure en bronze', 450);
$orc = new Orc(250, 0);

?>
<!-- if s_server==post -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descente des ombres</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;900&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1>Descente des Ombres</h1>
            </div>
            <div class="col-12 text-center pt-3">
                <div id="button__container">
                    <button id="playBtn" type="button" class="btn btn-dark">Jouer</button>
                    <button id="replayBtn" type="button" class="btn btn-dark d-none">Rejouer</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid container__board">
        <div class="row text-center pt-3">
            <div class="resize--mobile col-6 col-xl-4 p-0 order-1 order-xl-1 character__container ps-xl-5">
                <video controls class="character__video character__video--hero">
                    <source src="/public/assets/img/heros-resize.mp4" type=video/mp4>
                </video>
                <img class="d-none ps-xl-5 ms-xl-1" id="hero__dead" src="/public/assets/img/heros-dead-resize.jpg" alt="pierre tombale de notre héros, RIP">
            </div>
            <div class="col-12 col-xl-4 d-flex align-items-center order-3 order-xl-2 justify-content-center">
                <p class="d-none">
                    <?php
                    while ($hero->get_health() > 0 && $orc->get_health() > 0) {
                        // ! L'orc attaque le héros :
                        $orc_attack = $orc->attack();
                        $hero->attacked($orc_attack);

                        if ($hero->get_health() > 0) { // condition pour que la rage n'augment pas si le héros n'a plus de points de vie
                            echo 'Le démon frappe le héros avec une puissance de ' . $orc_attack . '. Les points de vie de l\'ange tombent à ' . $hero->get_health() . ' ! Sa rage augmente à ' . $hero->get_rage() . '.<br><br>';
                        } else {
                            echo 'Le démon frappe le héros avec une puissance de ' . $orc_attack . '. Les points de vie de l\'ange tombent à ' . $hero->get_health() . ' ! <br> <br>';
                        }

                        // ! Si le héros n'a plus de points de vie
                        if ($hero->get_health() <= 0) {
                            echo 'Malgré tous ses efforts, l\'ange succombe à ses blessures !';
                            // $win = 2;
                            $win = "orc";
                            break;
                        }



                        // ! Vérification si le héros peut attaquer l'orc :
                        if ($hero->get_rage() >= 60) {
                            // ! Le héros attaque l'orc :
                            $orc->set_health($orc->get_health() - $hero->get_weaponDamage());
                            echo 'L\'ange riposte et frappe à son tour, d\'une puissance de ' . $hero->get_weaponDamage() . ' ! 
                            Les points de vie du démon tombent à ' . $orc->get_health() . '. <br> <br>';
                            // ! La rage du héros est réinitialisée : 
                            $hero->set_rage(0);
                        }

                        // ! Si l'orc n'a plus de points de vie
                        if ($orc->get_health() <= 0) {
                            echo 'Le démon a ardemment combattu mais il perd finalement le combat !';
                            $win = "hero";
                            break;
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col-6 col-xl-4 p-0 order-2 order-xl-3 character__container">
                <video controls class="character__video character__video--orc">
                    <source src="/public/assets/img/orc-resize.mp4" type=video/mp4>
                </video>
                <img class="d-none pe-xl-5 me-xl-3" id="orc__dead" src="/public/assets/img/orc-dead-resize.jpg" alt="pierre tombale de notre orc, RIP">
            </div>
        </div>
    </div>



    



    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- js -->
    <script>
        let winner = "<?php echo $win ?>"
    </script>
    <script src="/public/assets/js/script.js"></script>
</body>

</html>