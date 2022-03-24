<?php

// Nous créons une classe « Personnage ».
class User
{
    public $basenom;

  public function __construct($id)
  {
    $MaBase = new PDO('mysql:host=localhost; dbname=Exercice; charset=utf8','root', 'root');
    $this->basenom = $MaBase->query("SELECT * FROM `Personnage` WHERE `id` = $id")->fetch();

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "Le personnage ".$this->basenom['pseudo']." a ".$this->basenom['vie']." de vie<p></p>";
  }

}

    