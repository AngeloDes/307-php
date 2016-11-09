<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <h1>PHP</h1>
    <p>Einführung</p>
    <?php
      $Vorname = "Angelo";
      $Nachnahme = "Desimoni";
      $Name = $Vorname . " " . $Nachnahme;
      $Hobby = "zocken";
      $Wohnort = "Müllheim";
      $Alter = 18;

      echo "Mein Name ist " . $Name . ", ich bin " . $Alter . " Jahre alt, Eines Meiner Hobbies ist: \"" . $Hobby . "\". Ich wohne in " . $Wohnort . ".";
     ?>
  </body>
</html>
