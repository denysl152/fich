<?php
class Personnage {
    public $vie = 50;
    public $atk = 100;
    public $nom;

    public function power_up(){
        $this->vie = 100;
    }

    public function __construct($nom){
        $this->nom=$nom;
    }

    public function attack($perso){
        $perso->vie -= $this->atk;
    }
}
