<?php
include "User.php";
$perso1 = new User("Charles");
$perso1->Personnage();
?><br><?php
$perso2 = new User("Théo");
$perso2->Personnage();
$perso2->Attaquer($perso1);
$perso2->defense($perso1);

?>