<?php 
    include "User.php";
    $bdd = new PDO('mysql:host=localhost; dbname=Exercice; charset=utf8','root', 'root');
    $query = $MaBase->query("SELECT * FROM personnage");

    while($userArray = $query->fetch())
        array_push($Players, new user($userArray));

    foreach($Players as $value) 
        $value->Personnage();

?>