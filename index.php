<?php

class Movie {
  public $title;
  public $origin;
  public $year;

  function __construct (string $_title, string $_origin, string $_year) {
    $this -> title = $_title;
    $this -> origin = $_origin;
    $this -> year = $_year;
  }
}


$avatar = new Movie ("Avatar", "English", "2010");

var_dump($avatar)
?>