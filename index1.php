<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
      body { font-family: Coiny}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Gerade & ungerade Zahlen</h1>
          <?php
          $j = 1;

          echo "<table class=\"table table-striped table-bordered\">";
          echo "<tr><th>Gerade Zahlen</th><th>Ungerade Zahlen</th></tr>";
          for ($i=0; $i < 1000; $i++) {
            echo "<tr><td>" . $i . "</td><td>" . $j . "</td></tr>";
            $j = $j + 2;
            $i++;
          }
          echo "</table>";


           ?>
         </div>
      </div>
    </div>
  </body>
</html>
