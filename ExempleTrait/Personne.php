<?php

require "FonctionUser.php"; 

    class User {

    use FonctionUser, Addition;
      

    }



$personne1 = new User;
$personne1->sexe = "Masculin";
$personne1->afficher() ;
$personne1->Marcher();
$personne1->Courir();
$personne1->genre();
echo "\n La somme est : ". $personne1->Somme();



