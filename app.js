function firstFunc(){
  console.log("Applikation initialisiert...");
  $("#ergebnis").html(html).fadeOut(800).addClass("hidden");
  var name = $("#name").val();
  var kraftstoff = $("#kraftstoff").val();
  var farbe = $("#farbe").val();
  var bauart = $("#bauart").val();
  var html = "<ul>\
                  <li>Name: " + name + "</li>\
                  <li>Kraftstoff: " + kraftstoff + "</li>\
                  <li>Bauart: " + bauart + "</li>\
              </ul>";

  //$("#name").val("");

  $("#ergebnis").html(html).fadeIn(800).removeClass("hidden");

  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: { name: name, kraftstoff: kraftstoff, farbe: farbe, bauart: bauart },
    dataType: "JSON",
    success: function(response){
      console.log(response);
    }
  });

/*  console.log(name);
  console.log(kraftstoff);
  console.log(farbe);
  console.log(bauart);*/

  /*console.error("ACHTUNG!");
  console.warn("WARNUNG!");*/
}
