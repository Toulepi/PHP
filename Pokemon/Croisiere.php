<?php


    class Croisiere extends Maritime
    {
        public function __toString()
        {
            return  parent::__toString().
                "<h2>ma vitesse est de ". ( $this->getPoids() / 25 * $this->getNbreNag() )/ 2 ." km/h</h2><br>";
        }

        function vitesse(): float
        {
            return ( ($this->getPoids() / 25) * $this->getNbreNag() ) / 2;
        }


    }