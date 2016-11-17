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
    #test123{
      font-weight: 700;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><a href="" class="fa fa-home fa-lg"></a></h1>
          <br>
            <form method="POST" id="form1">
              <div class="radio form-group">
                <p id="test123">Anrede</p>
                <div>
                  <div class="radio">
                    <label><input type="radio" name="anrede" value="Herr">Herr</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="anrede" value="Frau">Frau</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="anrede" value="Apache Kampfhelikopter">Apache Kampfhelikopter</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Autoname</label>
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
            <!--  <div class="form-group">
                <label for="alter">Alter</label>
                <input disabled class="form-control" type="number" name="Alter" value="" placeholder="Alter">
              </div>-->
              <!-- <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" value="lol@lol.lol" placeholder="Email">
              </div> -->
              <!-- <div>
                <label class="checkbox-inline"><input disabled name="checkbox2" type="checkbox" value="">Option 1</label>
                <label class="checkbox-inline"><input name="checkbox2" type="checkbox" value="">Option 2</label>
              </div> -->
              <div>
              </div>
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
          <div id="div123">
            <br>
            <div id="testdiv2" class="alert alert-danger hidden">
            </div>
            <table id="tabletest" class="hidden table table-striped">
              <thead>
                <tr>
                  <th>Anrede</th>
                  <th>Autoname</th>
                  <th>Kraftstoff</th>
                  <th>Farbe</th>
                  <th>Bauart</th>
                </tr>
              </thead>
              <tbody id="tabletestbody">

              </tbody>
            </table>
          </div>

          <?php
            include("classes.php");

          ?>
         </div>
      </div>
    </div>
  </body>
</html>
