<?php

 function show($d){

    echo "<pre>";
    var_dump($d);
    echo "</pre>";

}
$nom = htmlspecialchars( $_POST["nom"] ) ;
echo $nom;

show($_SERVER);



