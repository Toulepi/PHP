<?php

    class Sportifs extends Terrestre{

        private $fCard;
        //private $vitesse; = fonction($nbrePattes, $taille)


        public function __construct($nom,$poids,$nbrePattes, $taille,$fCard)
        {
            $this->fCard = $fCard;
            Terrestre::__construct($nom,$poids,$nbrePattes, $taille);
        }

        /**
         * @return mixed
         */
        public function getFCard()
        {
            return $this->fCard;
        }

        public function __toString()
        {
            return  parent::__toString().
            "<h2> ma fréquence cardiaque est de ".$this->getFCard() ." pulsations à la minute.</h2>";
        }
    }

?>
