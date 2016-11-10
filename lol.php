<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Primzahlen </h1>
    <?php
    for($i = 2; $i <= 1000; $i++)
   {
       $unteilbar = true;
    for($k = 2; $k < $i; $k++)
           {
               if(!($i % $k))
               {
                   $unteilbar = false;
                   break;
               }
           }

       if($unteilbar){
       echo "<p>" .$i . "</p>";
   }
}
     ?>
  </body>
</html>
