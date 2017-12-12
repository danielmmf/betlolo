<!DOCTYPE html>
<html lang="pt-BR" ng-app="sampleApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br">
    
    <!-- Favicon Images -->
    <link rel="icon" href="/dist/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="/dist/img/favicon/favicon.ico" />
    <meta name="msapplication-TileImage" content="dist/img/favicon/betlolo-icon.ico" />

    <title>Betlolo | Admin</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="/dist/css/style.min.css">
    <!-- endinject -->
</head>
    
<body   ng-controller="SampleCtrl">

    <!-- START HEADER -->
    <header>
        <div class="holder">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <strong>Admin Betlolo</strong>
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
                            <h2>Listagem de cadastros</h2>

                            <p><strong>Qtd. de cadastros:</strong> 10.000</p>
                            <p><strong>Idade média usuários:</strong> 25</p>
                            
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Data de Nascimento</th>
                                        <th scope="col">Lolopoints</th>
                                    </tr>
                                </thead>
                                <tbody ng-repeat="(chave , ponto) in pontos">
                                    
                                    <tr ng-repeat="(c , p) in ponto">
                                        <td>{{p.email}}</td>
                                        <td>{{c}}</td>
                                        <td>260</td>
                                    </tr>
                                 </tbody>
                            </table>

                            <div class="wrapper">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Anterior</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">Próximo</a>
                                    </li>
                                </ul>
                            </div>
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
      var ref = firebase.database().ref("betlolo/usuarios");
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

</html>