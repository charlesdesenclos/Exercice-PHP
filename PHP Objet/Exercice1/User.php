<?php

    class User
    {
        private $Nom_;
        private $Prenom_;

        public function __construct($Newnom, $Newprenom)
        {
            $this-> Nom_ = $Newnom;
            $this-> Prenom_ = $Newprenom;

        }
        public function Affiche()
        {
            echo "Je suis nommé $this->Nom_ $this->Prenom_";
        }
    }

?>