<?php 

trait FonctionUser{

    public $sexe;

    public $nom = "Yao";
    public $prenom =" Yann";
    public $age = 20;

    public function afficher(){
        echo $this->nom . " " . $this->prenom . " " . $this->age;
    }
    public function Marcher(){

        echo "\n Je suis entrain de marcher \n";
    }
    public function Courir(){

        echo "\n Je suis entrain de courir \n";
    }

    public function genre(){

        echo "\n Je suis de sexe: " . $this->sexe . "\n";
    }
    public function show($d){

        echo "<pre>";
        var_dump($d);
        echo "</pre>";

    }
    
    
}

trait Addition{

    public $a = 10;
    public $b = 20;

    public function Somme(){

        return $this->a + $this->b;
    }
}