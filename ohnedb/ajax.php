<?php
session_start();
include("classes.php");

@$name = trim(htmlspecialchars($_POST["name"]));
@$farbe = trim(htmlspecialchars($_POST["farbe"]));
@$kraftstoff = trim(htmlspecialchars($_POST["kraftstoff"]));
@$bauart = trim(htmlspecialchars($_POST["bauart"]));
@$anrede = trim(htmlspecialchars($_POST["anrede"]));
@$aktion = $_POST["aktion"];
@$anzTankungen = $_POST["anzTankungen"];
@$reftestauto;

//print_r($_POST);
if($aktion == "neu"){
  if(!empty($name) && !empty($farbe) && !empty($bauart) && !empty($kraftstoff) && !empty($anrede)){
    $testauto = new Auto();
    $testauto->setName($name);
    $testauto->setFarbe($farbe);
    $testauto->setKraftstoff($kraftstoff);
    $testauto->setBauart($bauart);
    $testauto->setAnrede($anrede);
  //  $testauto->setTankungen();
    $testauto->getAuto();
    $reftestauto = $testauto;
  //  print_r($testauto);
  } else {
    echo false;
  }
} else if($aktion == "tanken"){
    print_r($reftestauto);
    // $reftestauto->addTankungen();
    // $reftestauto->getTankungen();
  }else{
    echo false;
  }










// function feldercheck(){
//   $fehler = "<br>Fehler: ";
//   $fehlerbool = false;
//
//   if(!empty($this->name){
//     $this->name = trim(htmlspecialchars($this->name);
//     //echo $name;
//   }else{
//     echo $this->fehler . "Name leer!<br>";
//     $this->fehlerbool = true;
//   }
//
//   if(!empty($_POST["farbe"])){
//     $farbe = $_POST["farbe"];
//     //echo "<br>" . $farbe;
//   }else{
//     echo $fehler . "Farbe leer!";
//     $fehlerbool = true;
//   }
//
//   if(!empty($_POST["email"])){
//     $email = $_POST["email"];
//     //echo "<br>" . $email;
//   }else{
//     echo $fehler . "eMail leer!";
//     $fehlerbool = true;
//   }
//
//   if(!empty($_POST["kraftstoff"])){
//     $kraftstoff = trim(htmlspecialchars($_POST["kraftstoff"]));
//     //echo $name;
//   }else{
//     echo $fehler . "Kein Kraftstoff angegeben!<br>";
//     $fehlerbool = true;
//   }
//
//   if(!empty($_POST["bauart"])){
//     $bauart = trim(htmlspecialchars($_POST["bauart"]));
//     //echo $name;
//   }else{
//     echo $fehler . "Keine Bauart angegeben!<br>";
//     $fehlerbool = true;
//   }
//
//   if(!empty($_POST["checkbox1"])){
//     $checkbox1 = $_POST["checkbox1"];
//     echo "<br>" . $checkbox1;
//   }
//
//   if(!empty($_POST["checkbox2"])){
//     $checkbox1 = $_POST["checkbox2"];
//     echo "<br>" . $checkbox2;
//   }
//
//   if(empty($_POST["radio1"]) && empty($_POST["radio2"]) && empty($_POST["radio2"])){
//     echo $fehler . "Bitte eines der Drei Felder anwählen!";
//   } else if (!empty($_POST["radio1"])) {
//     $radio1 = $_POST["radio1"];
//   } else if (!empty($_POST["radio2"])) {
//     $radio2 = $_POST["radio2"];
//   } else if (!empty($_POST["radio3"])) {
//     $radio3 = $_POST["radio3"];
//   }
//
//   if(!$fehlerbool){
//     $testauto = new Auto();
//     $testauto->setName($name);
//     $testauto->setFarbe($farbe);
//     $testauto->setKraftstoff($kraftstoff);
//     $testauto->setBauart($bauart);
//     //$testauto->autoDaten();
//   }
//
// }



 ?>
