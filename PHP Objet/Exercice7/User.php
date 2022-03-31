<?php

// Nous créons une classe « Personnage ».
class User
{
    public $joueur_;


  public function __construct($NewJoueur)
  {
    $this->joueur =$NewJoueur;
  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "<p>Le joueur n°".$this->joeur_['id']." ".$this->joueur_['pseudo']." posséde ".$this->joueur_['vie']." PV !";
  }
}