<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
      body {
        font-family: Montserrat;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><a href="http://localhost/307-php/oop.php" class="fa fa-home fa-lg"></a></h1>
          <br>
            <form method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" type="text" name="name" value="Winterauto" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="farbe">Farbe</label>
                <input class="form-control" id="farbe" type="color" name="farbe" value="#cc00cc" placeholder="Farbe">
              </div>
              <div class="form-group">
                <label for="bauart">Bauart</label>
                  <select class="form-control" id="bauart" name="bauart">
                    <option>Cabrio</option>
                    <option>Limousine</option>
                    <option>Kombi</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="kraftstoff">Kraftstoff</label>
                  <select class="form-control" id="kraftstoff" name="kraftstoff">
                    <option>Benzin</option>
                    <option>Diesel</option>
                    <option>Kerosin</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="alter">Alter</label>
                <input disabled class="form-control" type="number" name="Alter" value="" placeholder="Alter">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="lol@lol.lol" placeholder="Email">
              </div>
            <!--  <div>
                <label class="checkbox-inline"><input disabled name="checkbox2" type="checkbox" value="">Option 1</label>
                <label class="checkbox-inline"><input name="checkbox2" type="checkbox" value="">Option 2</label>
              </div>
              <div>
                <div class="radio">
                  <label><input type="radio" name="radio1">Option 1</label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="radio2">Option 2</label>
                </div>
                <div class="radio disabled">
                  <label><input type="radio" name="radio3" disabled>Option 3</label>
                </div>
              </div>-->
              <div>
                <button onclick="firstFunc()" type="button" class="btn btn-default"><i class="fa fa-ban" aria-hidden="true"></i>&nbsp; Button</button>
              <!--  <button type="reset" class="btn btn-default"><i class="fa fa-ban" aria-hidden="true"></i>&nbsp; Formular zurücksetzen</button>-->
                <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Absenden</button>
              </div>
            </form>
        </div>

        <div class="col-md-12">
          <div id="ergebnis" class="hidden"></div>
          <!--<h1>Objektorientierte Entwicklung <i class="fa fa-ambulance" aria-hidden="true"></i></h1>-->


          <?php
            include("classes.php");

            if(!empty($_POST)){
              feldercheck();
            }




            //POST variablen zwischenspeichern
            /*print_r($_POST);
            $name = $_POST["name"];
            $farbe = $_POST["farbe"];
            $email = $_POST["email"];
            $checkbox1 = $_POST["checkbox1"];
            $checkbox1 = $_POST["checkbox2"];*/


          //  session_start();
          //  if(!isset($_SESSION["betankungen"])) $_SESSION["betankungen"] = 0;
            $golf = new Auto();
            $golf->setName("Golf");
            $golf->setKraftstoff("DIESELLLL");
            $golf->tankDeckelOeffnen();
            $golf->setFarbe("Schwarz");
            $golf->setBauart("Limousine");
            $golf->autoDaten();





          /*  $BMW = new Auto();
            $BMW->setName("BMW");
            //$golf->tankDeckelOeffnen();
            $BMW->setKraftstoff("Benzin");
            $BMW->tankDeckelOeffnen();
            $BMW->tankDeckelOeffnen();
            $BMW->tankDeckelOeffnen();
            $BMW->tankDeckelOeffnen();
            $BMW->setFarbe("Pink");
            $BMW->setBauart("ROFLKOPTER");
            $BMW->autoDaten();*/

            //getBetankungen();

            function feldercheck(){
              $fehler = "<br>Fehler: ";
              $fehlerbool = false;

              if(!empty($_POST["name"])){
                $name = trim(htmlspecialchars($_POST["name"]));
                //echo $name;
              }else{
                echo $fehler . "Name leer!<br>";
                $fehlerbool = true;
              }

              if(!empty($_POST["farbe"])){
                $farbe = $_POST["farbe"];
                //echo "<br>" . $farbe;
              }else{
                echo $fehler . "Farbe leer!";
                $fehlerbool = true;
              }

              if(!empty($_POST["email"])){
                $email = $_POST["email"];
                //echo "<br>" . $email;
              }else{
                echo $fehler . "eMail leer!";
                $fehlerbool = true;
              }

              if(!empty($_POST["kraftstoff"])){
                $kraftstoff = trim(htmlspecialchars($_POST["kraftstoff"]));
                //echo $name;
              }else{
                echo $fehler . "Kein Kraftstoff angegeben!<br>";
                $fehlerbool = true;
              }

              if(!empty($_POST["bauart"])){
                $bauart = trim(htmlspecialchars($_POST["bauart"]));
                //echo $name;
              }else{
                echo $fehler . "Keine Bauart angegeben!<br>";
                $fehlerbool = true;
              }

            /*  if(!empty($_POST["checkbox1"])){
                $checkbox1 = $_POST["checkbox1"];
                echo "<br>" . $checkbox1;
              }

              if(!empty($_POST["checkbox2"])){
                $checkbox1 = $_POST["checkbox2"];
                echo "<br>" . $checkbox2;
              }

              if(empty($_POST["radio1"]) && empty($_POST["radio2"]) && empty($_POST["radio2"])){
                echo $fehler . "Bitte eines der Drei Felder anwählen!";
              } else if (!empty($_POST["radio1"])) {
                $radio1 = $_POST["radio1"];
              } else if (!empty($_POST["radio2"])) {
                $radio2 = $_POST["radio2"];
              } else if (!empty($_POST["radio3"])) {
                $radio3 = $_POST["radio3"];
              }*/

              if(!$fehlerbool){
                $testauto = new Auto();
                $testauto->setName($name);
                $testauto->setFarbe($farbe);
                $testauto->setKraftstoff($kraftstoff);
                $testauto->setBauart($bauart);
                $testauto->autoDaten();
              }

            }


          ?>
         </div>
      </div>
    </div>
  </body>
</html>
