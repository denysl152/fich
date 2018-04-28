<?php

class Personnage{
 public $vie = 250;
 public $def = 100;
 public $Attk = 900;
 public $name;

 public function regen(){
     $this1->$vie = 60;
 }
 
 
 public function __contruct($name){
    $this1->name=$name;
 } 

 public function stroke_pioche($character){
$character->vie -= $this1->Attk;
}
public function bang_ns($this1){
    $this1->vie -= $character->Attk;
 }

}


