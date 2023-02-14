<?php

var_dump(__DIR__);
if( isset($_POST["nom"])){

    $nom = htmlspecialchars( $_POST["nom"] ) ;
    $email = htmlspecialchars( $_POST["email"] ) ;
    echo $nom . " ".$email;
}


?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

    <input type= "text" name="nom" placeholder="Nom ">
    <input type= "email" name="email" placeholder="Email ">
    <input type= "submit" value="Envoyer">


</form>