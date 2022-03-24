<?php
    class User
    {
        public $basenom;
        public $MaBase;
        public $Vie;
    
      public function __construct($id)
      {
        $this->MaBase = new PDO('mysql:host=localhost; dbname=Exercice; charset=utf8','root', 'root');
        $this->basenom = $this->MaBase->query("SELECT * FROM `Personnage` WHERE `id` = $id")->fetch();
        $this->Vie = $this->basenom['vie'];
    
      }
    
   
      public function Personnage()
      {
        echo "Le personnage ".$this->basenom['pseudo']." a ".$this->Vie." de vie<p></p>";
      }
    
      public function Attaquer($target)
      {
      
        echo "<p>".$this->basenom['pseudo']." attaque ".$target->basenom['pseudo']."</p>";
    
    
        $target->Vie -= 50;
        
    
    
        $this->Vie = $this->MaBase->query("UPDATE `Personnage` SET `vie`=".$target->Vie." WHERE id = 1");
        echo "<p>".$target->basenom['pseudo']." a pris 50 de dégat </p>";
      }
    
      public function soigne()
      {
        echo "".$this->basenom['pseudo']." se soigne attention !";
        $this->Vie += 49;
        $this->Vie = $this->MaBase->query("UPDATE `Personnage` SET `vie`=".$this->Vie." WHERE id = 1");
      }
    }

?>