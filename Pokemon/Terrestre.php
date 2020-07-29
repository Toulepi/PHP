<?php

/*
    En réalité, la classe Terrestre était concrète, mais l'on a choisit de la rendre abstraite afin de rendre impossible
    son instanciation
*/

#namespace   Dawm\Concrets;
#use         Dawm\Concrets\Pokemon;  // use ici permet de faire un import  // prévoir "replace" qualifier with "import"

    abstract class Terrestre extends Pokemon
    {
        private $nbrePattes;
        private $taille;
        private $vitesse;

        /**
         * @return mixed
         */
        public function getNbrePattes()
        {
            return $this->nbrePattes;
        }

        /**
         * @return mixed
         */
        public function getTaille()
        {
            return $this->taille;
        }

        /**
         * Terrestre constructor.
         * @param $nbrePattes
         * @param $taille
         */
        public function __construct(string $nom,float $poids,int $nbrePattes,float $taille)
        {
            $this->nbrePattes = $nbrePattes;
            $this->taille = $taille;
            Pokemon::__construct($nom,$poids);
        }

        function seDeplacer()
        {
            echo "<h2>Je me deplace sur la terre</h2>";
        }

        public function __toString()
        {
            return      parent::__toString().
                        "<h2>ma vitesse est de ". ($this->getNbrePattes()) * ($this->getTaille()) * 3 ." km/h,
                        j'ai ".$this->GetnbrePattes()." pattes,
                        ma taille est de ".$this->GetTaille()."m,</h2>";
        }

        //définition de la fonction pour résoudre la question 3 (CollectionsPokemons)

        public function vitesse(): float
        {
            return 3 * $this->getNbrePattes() * $this->taille;
        }

    }

?>