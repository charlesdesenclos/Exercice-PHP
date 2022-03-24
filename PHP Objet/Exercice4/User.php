<?php
// Nous créons une classe « Personnage ».
class User
{
  private $Vie_ = 100;
  private $Pseudo_;

  public function __construct($Newpseudo)
  {
     $this-> Pseudo_ = $Newpseudo;

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "J'ai ".$this->Vie_." de vie et je m'apelle  ".$this->Pseudo_."  ";
  }

  public function Attaquer($target)
  {

    echo "<p>".$this-> Pseudo_." attaque ".$target-> Pseudo_."</p>";
    $target-> Vie_ = $target-> Vie_ - 50;
    echo "<p>".$target-> Pseudo_." a pris 50 de dégat </p>";
  }


  public function defense($deff)
  {
    
    echo "<p>".$deff-> Pseudo_." riposte </p>";
    $this-> Vie_ = $this-> Vie_ - 50;
    echo"<p>Théo a maintenant ".$this-> Vie_."</p>";

  }
}
?>
    