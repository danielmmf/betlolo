
<!DOCTYPE html>
<html lang="en" ng-app="sampleApp">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login | </title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  

  <link href="css/login/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="grey" ng-controller="SampleCtrl">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Faça seu login</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="email" type="text">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Senha</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <a href="#" class="btn waves-effect waves-light col s12" id="cadastrar">Login</a>
          </div>
        </div>
        <div class="row"> 
          <a class="waves-effect waves-light btn col s12 social facebook blue" ng-click="login_facebook()"> 
          <i class="fa fa-facebook"></i>Login com facebook</a>
        </div>

        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="uber/registrar">Registrar!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="#">Esqueci a senha ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
    <!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>


  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

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
</script>
    <script type="text/javascript">
    var app = angular.module("sampleApp", ["firebase"]);

    app.controller("SampleCtrl", function($scope, $firebaseAuth) {
      var auth = $firebaseAuth();

      // login with Facebook
      $scope.login_facebook = function(){
        auth.$signInWithPopup("facebook").then(function(firebaseUser) {
          console.log("Signed in as:", firebaseUser.uid);
        }).catch(function(error) {
          console.log("Authentication failed:", error);
        });
      }
    });
            
        $( document ).ready(function() {
            console.log( "ready!" );
            $("#cadastrar").on('click', function(){
              var dados = { 'email':$("#email").val(), 'password' :$("#password").val()}
                //var dados = $("#form_cadastro").serialize();
                $.post('uber/logar', dados,function( data ) {
                  //window.location = "/uber";
                  console.log(data);
                  if(data.logado){
                    window.location = "/uber";
                  }else{
                    alert("Login incorreto");
                  }
                });

            })
        });

    </script>

</body>

</html>