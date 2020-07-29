<?php

    class CollectionPokemons
    {
        private $colPokemon;

        /** Permet de créer une collection de Pokémons, il s'agit d'un tableau d'instances (d'objets) de la classe "Pokemon"
         * CollectionPokemons constructor.
         * @param array $colPokemon
         */
        public function __construct(array $colPokemon)
        {
            $this->colPokemon = $colPokemon;
        }

        /** Permet d'ajouter une instance de la classe Pokemon à une instance de CollectionsPokemons
         * @param array $colPokemon
         * @param object $pokemon
         * @return array
         */
        public static function insertPokemon(array $colPokemon,object $pokemon){
            // Ajout elt dans un tableau associatif think about it if necessary

            //Ajout d'une instance de "Pokemon" une instance de "CollectionsPokemons"
            //ceci via la méthode array_push()
            $colPokemon[] = $pokemon;  #utilisation autre syntaxe de la méthode array_push()
            return $colPokemon;
        }

        /** Calcule et retourne la vitesse moyenne des pokemons de la collections "$colPokemon"
         * @param array $colPokemon
         * @return float|int
         */
        static function vitesseMoy(array $colPokemon)
        {
            /*
                somme des vitesses de chaque elt de tab / tab.length
            */
            $sommeVitesse = 0;
            for ($i = 0;$i < count($colPokemon); $i++){
                $sommeVitesse += $colPokemon[$i]->vitesse();
            }
            return $sommeVitesse / count($colPokemon);
        }

        /** Retourne la vitesse moyenne des pokémons sportifs d'une collection "$colPokemon"
         * @param array $colPokemon
         * @return float
         */
        static function vitesseMoyenneSprotifs(array $colPokemon):float
        {
            /*
                somme des vitesses de chaque elt de tab / tab.length
            */
            $sommeVit = 0;
            $compteur = 0;
            for ($i = 0;$i < count($colPokemon); $i++){

                if ( get_class($colPokemon[$i]) == 'Sportifs'){  // checked the method isset ()
                    $sommeVit += $colPokemon[$i]->vitesse();
                    $compteur++;
                }
            }
            if ($compteur == 0){
                return 0;
            } else {
                return print ("<h4>La vitesse moyenne des pokémons sportifs de la collection est de "
                .($sommeVit / $compteur)." km/h</h4>");
            }
        }

    }

?>