<!DOCTYPE html>
<html>
  <head>
    <title>.:: Uber Like devinhas @ sp ::.</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }


       * {  margin: 0px; padding: 0px }
        form input{
             
        }


         

          body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }

        
      
      footer.page-footer {
          background-color: #333333;
      }


      #modal_endereco{
       float: left;
    position: absolute;
    z-index: 10000;
        
      }


    </style>
 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  </head>

  <!-- Compiled and minified JavaScript -->

<body onload="initialize()">


<div class="card-panel hoverable" id="modal_endereco">
  <form action="javascript: void(0);" onSubmit="calcRoute()">
    <div>
        <input type="text" size="50" value="avenida paulista @-23.5632103,-46.656439" id="endereco" />
        <input type="hidden"  id="latlong" />
    </div>

    <div>
        <input type="text" size="50" value="Avenida corifeu de azevedo marques , 2000 sp brasil" id="destino" />
    </div>
     
    <button type="submit" class="waves-effect waves-light btn">Solicitar</button>
</form></div>
    </div>

 
<div id="mapview" style="display: none;width:100%; height:100%">
    <div id="map_canvas" style="float: left; width: 65%; height: 100%;"></div>
    <div class="direcao" style="float: left; width: 35%; height: 70%;overflow: scroll;">
        <div id="directionsPanel" style="height 100px"></div>
    </div>
</div>

<div style="width:100%;" id="map"></div>
 <div class="fixed-action-btn vertical click-to-toggle" id="menu_locais">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">star</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">access_time</i></a></li>
    </ul>
  </div>

  <div class="card" id="motorista" style="display: none;width:100%; height:80%">
   
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><h2>Motorista Zezinho</h2> <i class="material-icons right">more_vert</i></span>
      <p><a href="#">Marea Turbo - vermelho</a></p>
         <p>Seu motorista está chegando em xxx minutos</p>
         <p>aqui irão aparecer informações da corrida</p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Motorista Zezinho<i class="material-icons right">close</i></span>
      <p><img class="activator" src="https://imganuncios.mitula.net/fiat_marea_2002_fiat_marea_turbo_2_0_20v_4020035502124231869.jpg"></p>
    </div>
  </div>
            
   <footer class="page-footer" id="page-footer" style="display: none;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" id="distancia"></h5>
                <p class="grey-text text-lighten-4"  id="duracao" ></p>
                <h2 class="white-text" id="total"></h2>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Obs</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">desvios</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">&nbsp;</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">&nbsp;</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><button type="button" class="waves-effect waves-light btn" id="solicitar">Pedir</button></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 devinhas@sp
            <a class="grey-text text-lighten-4 right" href="#!" id="cancelar">Cancelar solicitação</a>
            </div>
          </div>
        </footer>
</body>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


 <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCZsJEv3FWv3GEDWsXDulUtD5NjtY0eEtM&language=pt-BR&mode=transit"></script>
    <script type="text/javascript"> 



      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        $("#endereco").val(latitude+","+longitude);
        $("#endereco").val("Meu Local");
        $("#latlong").val(latitude+","+longitude);

        });
        
        var map = L.map('map')
        L.tileLayer('http://{s}.tile.cloudmade.com/1cc75fcc8e2243d1b2f6aab1e5850be1/998/256/{z}/{x}/{y}.png', {
        attribution: 'Devinhas@sp',
        maxZoom: 18
        }).addTo(map);
        
        map.locate({setView: true, maxZoom: 16});
        function onLocationFound(e) {
          var radius = e.accuracy / 2;
          L.marker(e.latlng).addTo(map)
              .bindPopup("Voce esta aqui , ou em ate " + radius.toFixed(2) + " metros desse ponto").openPopup();
          L.circle(e.latlng, radius).addTo(map);
        }
        map.on('locationfound', onLocationFound);
    }else {
        alert("Geolocation API is not supported in your browser. :(");
    }



    // document.getElementById('mapview').style.visibility = 'hidden';
        var directionDisplay;
        var directionsService = new google.maps.DirectionsService();
        var map;
 
        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var myLatlng = new google.maps.LatLng();
             
            var myOptions = {
                zoom:7,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: myLatlng
            }
 
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById("directionsPanel"));
        }
 
        function calcRoute() {
          if($("#endereco").val() == "Meu Local"){
            var start = $("#latlong").val();
          }else{
            var start = document.getElementById("endereco").value;
          }
            var end = document.getElementById("destino").value;
            var request = {
                origin:start, 
                destination:end,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
             
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    console.log(response.routes["0"].legs["0"]);
                    console.log(response.routes["0"].legs["0"].distance.text);
                    $("#distancia").html("Seu destino esta a "+response.routes["0"].legs["0"].distance.text+" de distancia");
                    console.log(response.routes["0"].legs["0"].duration.text);
                    $("#duracao").html("Sua viagem ira demorar aproximadamente "+response.routes["0"].legs["0"].duration.text +" minutos");
                    var calculado = ((response.routes["0"].legs["0"].distance.value*0.0012)+4); 
                    $("#total").html("Total: R$ "+calculado.toFixed(2));

                    directionsDisplay.setDirections(response);
                } else {
                    alert(status);
                }
 

                document.getElementById("mapview").style.display = "block";
                document.getElementById('map').style.display = 'none';
                document.getElementById('modal_endereco').style.display = 'none';
                document.getElementById('menu_locais').style.display = 'none';
                document.getElementById('page-footer').style.display = 'block';
                document.body.scrollTop = document.body.scrollHeight;
            });

            $( "#cancelar" ).on( "click", function() {
                console.log( $( this ).text() );

               cancelar_solicitacao();
            });

             function cancelar_solicitacao() {
                document.getElementById("mapview").style.display = "none";
                document.getElementById('map').style.display = 'block';
                document.getElementById('modal_endereco').style.display = 'block';
                document.getElementById('menu_locais').style.display = 'block';
                document.getElementById('page-footer').style.display = 'none';
                $( "#directionsPanel" ).html("");
               window.scrollTo(0, 0);
             }



             $( "#solicitar" ).on( "click", function() {
                console.log( $( this ).text() );
                document.getElementById('solicitar').style.visibility = 'hidden';
                document.getElementById('cancelar').style.visibility = 'hidden';

               fazer_solicitacao();


            });

             function fazer_solicitacao() {
                document.getElementById('mapview').style.visibility = 'hidden';
                document.getElementById("mapview").style.display = "none";
                document.getElementById('motorista').style.display = 'block';
                $( "#directionsPanel" ).html("");
                window.scrollTo(0, 0);
             }


          
        }
    </script>

</html>