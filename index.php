<?php

class Geners {
  public $generePrincipale;
  public $genereSecondario;

  public function __construct (string $_generePrincipale, string $_genereSecondario = NULL) {
    $this -> generePrincipale = $_generePrincipale;
    $this -> genereSecondario = $_genereSecondario;
  } 
}

class Movie {
  public $title;
  public $origin;
  public $year;
  public $geners;

  public function __construct (string $_title, string $_origin, string $_year, Geners $_geners) {
    $this -> upperTitle($_title);
    $this -> origin = $_origin;
    $this -> year = $_year;
    $this -> geners = $_geners;
  }

  public function upperTitle ($_title) {
    return $this -> title = strtoupper($_title);
  }
};


$avatar = new Movie ("Avatar", "English", "2010", new Geners ("Fantascienza"));
$trecento = new Movie ("300", "English", "2007", new Geners ("Fantascienza", "Storico"));


var_dump($avatar, $trecento);
?>