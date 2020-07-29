<?php

    require_once "Pokemon.php";
        require_once "Terrestre.php";
        require_once "Maritime.php";
            require_once "Sportifs.php";
            require_once "Casaniers.php";
            require_once "Mers.php";
            require_once "Croisiere.php";

    #Pokémon Sportif
    /*
        $Pikachu = new Sportifs("Pikachu",18,2,0.85,120);
        var_dump($Pikachu);
        echo $Pikachu;

        "Je suis le Pokémon Pikachu
        mon poids est de 18 kg,
        ma vitesse est de 5,1 km/h
        j'ai 2 pattes,
        ma taille est de 0,85m
        ma fréquence cardiaque est de 120 pulsations à la minute"
    */

    #Pokémon Casanier
    /*
        $Salameche = new Casaniers("Salameche",12,2,0.65,8);
        var_dump($Salameche);
        echo $Salameche->__toString();

        "Je suis le pokémon Salameche
        mon poids est de 12 kg,
        ma vitesse est de 3,9 km/h
        j'ai 2 pattes,
        ma taille est de 0,65m
        je regarde la télé 8h par jour"
    */

    #Pokémon des Mers
    /*
        $Rondoudou = new Mers("Rondoudou",45,2);
        var_dump($Rondoudou);
        echo $Rondoudou->__toString();


        "Je suis le Pokémon Rondoudou mon poids est de 45 kg, ma vitesse
        est de 3,6 km/h j'ai 2 nageoires"
    */

    #Pokémon de Croisière
    /*
        $Bulbizarre = new Croisiere("Bulbizarre",15,3);
        var_dump($Bulbizarre);
        echo $Bulbizarre->__toString();

        "Je suis le Pokémon Bulbizarre mon poids est de 15 kg, ma vitesse
        est de 0,9 km/h j'ai 3 nageoires"
    */

    require_once "CollectionPokemons.php";

        $Pikachu = new Sportifs("Pikachu",18,2,0.85,120);
        $Salameche = new Casaniers("Salameche",12,2,0.65,8);
        $Rondoudou = new Mers("Rondoudou",45,2);
        $Bulbizarre = new Croisiere("Bulbizarre",15,3);

        //var_dump($Pikachu);
        //var_dump($Salameche);
        //var_dump($Rondoudou);
        //var_dump($Bulbizarre);

        //création d'une collection de Pokémons (instanciation de la classe CollectionPokemons )

        $col1Pokemon = new CollectionPokemons([]);
           // var_dump($col1Pokemon);

            // conversion d'une instance de CollectionsPokemons en tableau vide
            $col1Pokemon = (array)$col1Pokemon;
            //var_dump($col1Pokemon);
            $col1Pokemon = array_shift($col1Pokemon);
            //var_dump($col1Pokemon);
            $col1Pokemon = CollectionPokemons::insertPokemon($col1Pokemon,$Pikachu) ;
            $col1Pokemon = CollectionPokemons::insertPokemon($col1Pokemon,$Salameche) ;
            $col1Pokemon = CollectionPokemons::insertPokemon($col1Pokemon,$Rondoudou) ;
            $col1Pokemon = CollectionPokemons::insertPokemon($col1Pokemon,$Bulbizarre) ;

            //var_dump($col1Pokemon);
/*
            $vit = $Pikachu->vitesse();
                var_dump($vit);
            $vit = $Salameche->vitesse();
                var_dump($vit);
            $vit = $Rondoudou->vitesse();
                var_dump($vit);
            $vit = $Bulbizarre->vitesse();
                var_dump($vit);
*/

           // $vitMoy = CollectionPokemons::vitesseMoy($col1Pokemon);
            //  var_dump($vitMoy);

            #Question 4
            /*
                vitesse moyenne des Pokémons sportifs de la collection.
            */
            $Pikachu1 = new Sportifs("Pikachu1",18,4,1.2,120);
            $Pikachu2 = new Sportifs("Pikachu2",20,2,1.6,100);
            $col1Pokemon = CollectionPokemons::insertPokemon($col1Pokemon,$Pikachu1) ;
            $col1Pokemon = CollectionPokemons::insertPokemon($col1Pokemon,$Pikachu2) ;
            var_dump($col1Pokemon);
           //var_dump($col1Pokemon[0]->vitesse());
           // var_dump($col1Pokemon[0]->getFCard());
           // var_dump(get_class($col1Pokemon[0]));

/* Pokémons sportifs de la collections $col1Pokemon
        var_dump($Pikachu->vitesse());
        var_dump($Pikachu1->vitesse());
        var_dump($Pikachu2->vitesse());
*/

            CollectionPokemons::vitesseMoyenneSprotifs($col1Pokemon);
              //var_dump($vitMoySport);

/*
            $sommeVitesse = 0;
for ($i = 0;$i < count($col1Pokemon); $i++){
    $sommeVitesse += $col1Pokemon[$i]->vitesse();
    echo $i. "<h4>somme des vitesses: ".$sommeVitesse ."</h4> <br>";

}

*/

        //Ajout d'un pokémon Pikachu (instance de 'Pokemon') à la collection de pokémons col1Pokemon (instance de "CollectionsPokemons")
        //ceci est fait via la méthode array_push()
/*
        $col1Pokemon[] = $Salameche;  #utilisation d'une autre syntaxe de la méthode array_push()
        var_dump($col1Pokemon);

        $col1Pokemon = $col1Pokemon ->insertPokemon( $col1Pokemon,$Rondoudou);
*/
/*
       $a = [1,2,3,4] ;
       var_dump($a);
           $a[] = "Z";
        var_dump($a);
        print_r($a);
*/
       // insertPokemon( (array)$col1Pokemon,$Salameche);

        //$col1Pokemon =
        //(array)$col1Pokemon = array_push()

        /*
            The use of function array_push() is define on array type element; now how to do it on Objects elements ??
                $a = [1,2,3];
                var_dump($a);
                array_push($a,"ampha");
                var_dump($a);
        */

?>