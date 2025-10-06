<?php

class empleat
{
    public $nom;
    public $sou;
    const IMPOST = 28;

    public function __construct(string $nom, int $sou){
        $this->nom = $nom;
        $this->sou = $sou;
    }
    
    public function getValue(){
        echo "Nom: $this->nom";
        echo "Sou: $this->sou";
    }

    public function setValue(string $nom, int $sou){
        $this->nom = $nom;
        $this->sou = $sou;
    }
    
    public function impostApagar(){
        if($this->sou > 6000){
            echo "Hola ". $this->nom . ". Has de pagar l'impost. Son: " . self::IMPOST . "€" . ".\n";
        }else{
            echo "Hola ". $this->nom . ". NO has de pagar cap impost.";
        }
    }
}

$empleat1 = new empleat("Ruben", 7000);
$empleat1->impostApagar();
echo "----------------\n";
$empleat2 = new empleat("Victor", 1500);
$empleat2->impostApagar();

?>