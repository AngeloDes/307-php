<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
      body { font-family: Coiny}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Primzahlen <i class="fa fa-ambulance" aria-hidden="true"></i></h1>
          <?php



          Primzahlberechnung(50);
          Tabellenkacke(30);
          isprimzahl(15);



          function isprimzahl($i)
          {
              echo "<h1>Die Funktion " . __FUNCTION__ . " wird aufgerufen.</h1>";
              $unteilbar = true;
              for ($k = 2;$k < $i;$k++)
              {
                  if (!($i % $k))
                  {
                      $unteilbar = false;
                      echo "<p>" . $i . " ist keine Primzahl.</p>";
                      break;
                  }
              }
              if ($unteilbar)
              {
                  echo "<p>" . $i . " ist eine Primzahl.</p>";
              }
          }


          function Primzahlberechnung($zahl)
          {
              echo "<h1>Die Funktion " . __FUNCTION__ . " wird aufgerufen.</h1>";
              for ($i = 2;$i <= $zahl;$i++)
              {
                  $unteilbar = true;
                  for ($k = 2;$k < $i;$k++)
                  {
                      if (!($i % $k))
                      {
                          $unteilbar = false;
                          break;
                      }
                  }
                  if ($unteilbar)
                  {
                      echo "<p>" . $i . "</p>";
                  }
              }
          }


          function Tabellenkacke($lolrofl)
          {
              echo "<h1>Die Funktion " . __FUNCTION__ . " wird aufgerufen.</h1>";
              $j = 1;
              echo "<h1>Tabelle <i class=\"fa fa-ambulance\" aria-hidden=\"true\"></i></h1>";
              echo "<table class=\"table table-striped table-bordered\">";
              echo "<tr><th>Gerade Zahlen</th><th>Ungerade Zahlen</th></tr>";
              for ($i = 0;$i < $lolrofl;$i++)
              {
                  echo "<tr><td>" . $i . "</td><td>" . $j . "</td></tr>";
                  $j = $j + 2;
                  $i++;
              }
              echo "</table>";
          }


          ?>
         </div>
      </div>
    </div>
  </body>
</html>
