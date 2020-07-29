<?php

    //namespace Dawm\Abstraits;   namespace ici permet de créer un dossier virtuel

    abstract class Pokemon
    {
        private $nom;
        private $poids;

        /**
         * @return string
         */
        public function getNom(): string
        {
            return $this->nom;
        }

        /**
         * @return int
         */
        public function getPoids(): int
        {
            return $this->poids;
        }

        /**
         * @param float|int $poids
         */
        protected function setPoids(float $poids): void   // accès en écriture
        {
            $this->poids = $poids;
        }

        /** Très bonne pratique
         * Pokemon constructor, permet d'initialiser un Pokemon à partir de son nom et son poids passés en paramètre
         * @param string $nom
         * @param int $poids
         */
        protected function __construct(string $nom, float $poids)   // constructeur uniquement accessible dans la classe en cours et de les classes enfants;car "protected"
        {
            $this->nom = $nom;
            $this->poids = $poids;
        }

        abstract function seDeplacer();

        abstract protected function vitesse(): float;

        public function __toString()
        {
            return "<h2>Je suis ".$this->getNom()." le pokémon ".get_class($this).",
            mon poids est de ". $this->getPoids()." kg,</h2>";
        }
    }

?>