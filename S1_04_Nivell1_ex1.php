<?php

class empleat
{
    public $nom;
    public $sou;

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
    


}
?>