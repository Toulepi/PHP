<?php


    class Casaniers extends Terrestre
    {
        private $nbreHeureTV;

        /**
         * Casaniers constructor.
         * @param $nbreHeureTV
         */
        public function __construct($nom,$poids,$nbrePattes, $taille,$nbreHeureTV)
        {
            $this->nbreHeureTV = $nbreHeureTV;
            Terrestre::__construct($nom,$poids,$nbrePattes, $taille);
        }

        /**
         * @return mixed
         */
        public function getNbreHeureTV()
        {
            return $this->nbreHeureTV;
        }
        function regarderTV(){
            echo "Je regarde la télé";
        }

        public function __toString()
        {
            return parent::__toString().
            "<h2> Je regarde la télé ".$this->getNbreHeureTV()." h par jour</h2>";
        }
    }

?>