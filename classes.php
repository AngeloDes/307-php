<?php

//Klassen
//echo $_SERVER["PHP_SELF"];


class Auto {
  private $farbe;         //Schwarz, Weiss, Silber
  private $kraftstoff;    //Diesel, Benzin
  private $bauart;        //Cabrio, Limousine, Kombi
  private $name;


  public function tankDeckelOeffnen(){
    //$this->kraftstoff = "Diesel";
    if ($this->kraftstoff == null) {
      //echo "Bitte erst Kraftstoff setzen!";
    } else {
      //echo "<p>Bitte mit " . $this->kraftstoff . " betanken</p>";
      $_SESSION["betankungen"]++;
    }
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setKraftstoff($kraftstoff){
    $this->kraftstoff = $kraftstoff;
  }

  public function setFarbe($farbe){
    $this->farbe = $farbe;
  }

  public function setBauart($bauart){
    $this->bauart = $bauart;
  }

  public function autoDaten(){
    echo "<h3> Daten vom Auto " . $this->name . "</h3>";
    echo "<p>Kraftstoff: " . $this->kraftstoff . "</p>";
    echo "<p>Farbe: " . $this->farbe . "</p>";
    echo "<p>Bauart: " . $this->bauart . "</p>";
  }

/*  function __construct(){
    echo "<p>Konstruktor der Klasse Auto</p>";
  }

/*function __destruct(){
    echo "<p>Destruktor von " . $this->name . "</p>";
  }*/

}


  function getBetankungen(){
    echo "<br><h4> Es wurde insgesamt " . $_SESSION["betankungen"] .  " mal getankt.</h4>";
  }

 ?>
