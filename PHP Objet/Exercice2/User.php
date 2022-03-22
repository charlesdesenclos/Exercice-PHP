<?php
    class User
    {
        private $pseudo_;
        private $Vie_;

        public function __construct($Newpseudo, $Newvie)
        {
            $this-> pseudo_ = $Newpseudo;
            $this-> Vie_ = $Newvie;
        }
        public function Personnage()
        {
            echo "J'ai ".$this->Vie_." de vie et je m'apelles  ".$this->pseudo_."  ";
        }
    }