<?php
@$name = $_POST["name"];
@$farbe = $_POST["farbe"];
@$bauart = $_POST["bauart"];
@$kraftstoff = $_POST["kraftstoff"];
//print_r($_POST);

if(!empty($name)){
  echo true;
} else {
  echo false;
}



 ?>
