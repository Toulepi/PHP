<?php

    abstract class Maritime extends Pokemon
    {
        private $nbreNag;

        public function __construct(string $nom, int $poids, int $nbreNag)
        {
            $this->nbreNag = $nbreNag;
            Pokemon::__construct($nom,$poids);
        }

        /**
         * @return int
         */
        public function getNbreNag(): int
        {
            return $this->nbreNag;
        }

        function seDeplacer()
        {
            echo "<h2>Je me deplace en mer</h2>";
        }
        public function __toString()
        {
            return  parent::__toString().
                    "<h2>j'ai ".$this->GetnbreNag()." nageoires</h2>";
        }

    }

?>
