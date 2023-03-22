<?php

class Movie {
  public $title;
  public $origin;
  public $year;

  public function __construct (string $_title, string $_origin, string $_year) {
    $this -> upperTitle($_title);
    $this -> origin = $_origin;
    $this -> year = $_year;
  }

  public function upperTitle ($_title) {
    return $this -> title = strtoupper($_title);
  }
};


$avatar = new Movie ("Avatar", "English", "2010");

var_dump($avatar);
?>