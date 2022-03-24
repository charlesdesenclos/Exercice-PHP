<?php
    include "User.php";
    $perso1 = new User(1);
    $perso1->Personnage();

    $perso2 = new User(2);
    $perso2->Personnage();

    $perso3 = new User(5);
    $perso3->Personnage();

    $perso2->Attaquer($perso1);
    $perso1->soigne();
?>