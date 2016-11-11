function firstFunc(){
  console.log("Applikation initialisiert...");
  //$("#ergebnis").html(html).fadeOut(800).addClass("hidden");
  var check = false;
  var name = $("#name").val();
  var kraftstoff = $("#kraftstoff").val();
  var farbe = $("#farbe").val();
  var bauart = $("#bauart").val();

  if(name && kraftstoff && farbe && bauart) {
    check = true;
  }

  if(check) {
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: { aktion: "neu", name: name, kraftstoff: kraftstoff, farbe: farbe, bauart: bauart },
      dataType: "JSON",
      beforeSend: function(){
        console.log("bs");
      },
      success: function(daten){
        console.log("ok");
        console.log(daten);
        var html = "";
        if(daten.status){
          html = "<tr><td>" + daten.name + "</td><td>" + daten.kraftstoff + "</td><td style=\"color: " + daten.farbe + "\">" + daten.farbe + "</td><td>" + daten.bauart + "</td><td>" + "</td><td><button onclick=\"SecondFunc()\" type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>&nbsp; Tanken</button></tr>";


          $("#tabletest").removeClass("hidden");
          $("#tabletestbody").append(html);
        }

      },
      error: function(){
        console.log("err");
      },
      complete: function(){
        console.log("nach");
      },
    });
  }
}
function SecondFunc(){
  var check = true;
  var anzTankungen = 0;


  if(check) {
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: { aktion: "tanken", anzTankungen: anzTankungen },
      dataType: "JSON",
      beforeSend: function(){
        console.log("bs");
      },
      success: function(Tankungen){
        console.log(Tankungen);
        
        var html = "";
        if(daten.status){

        }

      },
      error: function(){
        console.log("err");
      },
      complete: function(){
        console.log("nach");
      },
    });
  }



}
