<!DOCTYPE html>
<html lang="pt-BR" ng-app="sampleApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta property="og:url"           content="https://betlolo.herokuapp.com/betlolo/indicacao?email=<?php echo $usuario;?>" />
  <meta property="og:type"          content="Betlolo" />
  <meta property="og:title"         content="Betlolo" />
  <meta property="og:description"   content="Plataform de apostas de games" />
  <meta property="og:image"         content="http://betlolo.herokuapp.com/images/betlolo.png" />

    
    <!-- Favicon Images -->
    <link rel="icon" href="/dist/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="/dist/img/favicon/favicon.ico" />
    <meta name="msapplication-TileImage" content="dist/img/favicon/betlolo-icon.ico" />

    <title>Betlolo | Minha Pagina</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="/dist/css/style.min.css">
    <!-- endinject -->
</head>
    
<body  ng-controller="SampleCtrl">

    <!-- START HEADER -->
    <header>
        <div class="holder">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <strong>Minha Pagina Betlolo</strong><a href="/logoff">Logoff</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    
    <!-- START FIRST SECTION -->
    <section id="area-01">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                     
                            <h2>Meus Pontos</h2><div ng-hide="pontos[1]" class="fb-share-button" 
                            data-href="https://betlolo.herokuapp.com/betlolo/indicacao?email=<?php echo $usuario;?>"
                            data-layout="button_count">
                          </div><small ng-hide="pontos[1]">&nbsp;&nbsp;Compartilhe seu link para ganhar pontos de indicação</small>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Ação</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat=" ponto in pontos">
                                        <td>{{ponto.game}}</td>
                                        <td>{{ponto.hora| date:"dd/MM/yyyy ' as ' h:mma"}}</td>
                                    </tr>
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FIRST SECTION -->

    <!-- START FOOTER -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <p>&copy; Betlolo. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- inject:js -->
    <script src="/dist/js/plugins/plugins.min.js"></script>
    <script src="/dist/js/main.min.js"></script>
    <!-- endinject -->

    <!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>

<script>
  // Initialize the Firebase SDK
  var config = {
    apiKey: "AIzaSyBW52g_pZCMNx3z5H_C9a6htwz5tHD9COo",
    authDomain: "controlblack-6de94.firebaseapp.com",
    databaseURL: "https://controlblack-6de94.firebaseio.com",
    projectId: "controlblack-6de94",
    storageBucket: "controlblack-6de94.appspot.com",
    messagingSenderId: "957561562013"
  };
  firebase.initializeApp(config);


  var app = angular.module("sampleApp", ["firebase"]);
    app.controller("SampleCtrl", function($scope, $firebaseArray) {
      var ref = firebase.database().ref("betlolo/usuarios/<?php echo $usuario; ?>/");
      // create a synchronized array
      $scope.pontos = $firebaseArray(ref);
      // add new items to the array
      // the message is automatically added to our Firebase database!
      $scope.addMessage = function() {
        $scope.messages.$add({
          text: $scope.newMessageText
        });
      };
      // click on `index.html` above to see $remove() and $save() in action
    });
</script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/pt_BR/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
 
</body>    
</html>