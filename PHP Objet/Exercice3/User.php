<?php
    class User
    {
        private $pseudo_;
        private $Vie_ = 100 ;

        public function __construct($Newpseudo)
        {
            $this-> pseudo_ = $Newpseudo;
            
        }
        public function Personnage()
        {
            
            echo "J'ai ".$this->Vie_." de vie et je m'apelles  ".$this->pseudo_."  ";
        }
    }
?>