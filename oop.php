<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
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
          <br>
            <form method="GET">
              <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" value="" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="farbe">Farbe</label>
                <input class="form-control" type="color" name="farbe" value="#cc00cc" placeholder="Farbe">
              </div>
              <div class="form-group">
                <label for="bauart">Bauart</label>
                  <select class="form-control">
                    <option>Cabrio</option>
                    <option>Limousine</option>
                    <option>Kombi</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="alter">Alter</label>
                <input disabled class="form-control" type="number" name="Alter" value="" placeholder="Alter">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="Email" value="" placeholder="Email">
              </div>
              <div>
                <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Absenden</button>
              </div>
            </form>
        </div>

        <div class="col-md-12">
          <h1>Objektorientierte Entwicklung <!--<i class="fa fa-ambulance" aria-hidden="true"></i>--></h1>


          <?php
            include("classes.php");

            session_start();
            if(!isset($_SESSION["betankungen"])) $_SESSION["betankungen"] = 0;
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
          ?>
         </div>
      </div>
    </div>
  </body>
</html>
