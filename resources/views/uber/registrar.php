
<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Registrar</title>
    <!-- Favicons-->
    <link rel="icon" href="/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="/css/themes/semi-dark-menu/style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="/css/custom/custom.css" type="text/css" rel="stylesheet">
    <link href="/css/layouts/page-center.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
  </head>
  <body class="grey">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4  card-panel">
        <form class="login-form" id='form_cadastro'>
          <div class="row">
            <div class="input-field col s12 center">
              <h4>Registrar</h4>
              <p class="center">receba a confirmação em seu email !</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person_outline</i>
              <input id="name" type="text">
              <label for="username" class="center-align">Username</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">email</i>
              <input id="email" type="email">
              <label for="email" class="center-align">Email</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password" type="password">
              <label for="password">Password</label>
            </div>
          </div>
         <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input id="password-again" type="password">
              <label for="password-again">Confirme a Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <a href="#" class="btn waves-effect waves-light col s12" id="cadastrar">Registrar</a>
            </div>
            <div class="input-field col s12">
              <p class="margin center medium-small sign-up">ja possui uma conta? <a href="/">Login</a></p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- ================================================
    Scripts
    ================================================ -->
    <<script type="text/javascript" src="/js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="/js/custom-script.js"></script>
    <script src="/js/jquery.mask.js"></script>
    <!-- endinject -->
    <script type="text/javascript">
        
        $( document ).ready(function() {

    

            
            function IsEmail(email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(email)) {
                   return false;
                }else{
                   return true;
                }
              }





            console.log( "ready!" );
            $("#cadastrar").on('click', function(){
                var dados = $("#form_cadastro").serialize();
                console.log(dados);
                console.log("vhamou");

                if($("#name").val() ==""){
                    alert("Preencha seu nome");
                }
                if($("#password").val() ==""){
                    alert("Preencha sua senha");
                }
             

                if(IsEmail($('#email').val())){

                    
                    if($('#password').val() == $('#password-again').val()){

                    	dados = {'name':$("#name").val(), 'email':$("#email").val(), 'password' :$("#password").val()}
                        $.post('/uber/cadastrar', dados ,function( data ) {
                            if(data.status == 0){
                                alert( data.response );
                                return false;
                            }else{
                                 window.location = '/uber';                            }

                        });
                    }else{
                        alert("Senha deve ser igual a confirmação");
                        return false;  
                    }

                        
                }else{
                    alert("Preencha com email correto");
                    return false;
                }

            })
        });

    </script>

    <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '1923980181200743', // Insert your App ID here
                    status     : true, // check login status
                    cookie     : true, // enable cookies to allow the server to access the session
                    oauth      : true, // enable OAuth 2.0
                    xfbml      : true  // parse XFBML
                });
 
                /*** Initialization code here ***/
 
                // Get the users login status
                FB.getLoginStatus(function(response) {
                    if (response.authResponse) {
                        // Logged in and connected user, someone you know
                        console.log("User is logged in");
                        loginToFacebook();  // Pass directly to login so we can get the users name and email (at this point we only have the facebook ID)
                    } else {
                        // No user session available, someone you dont know
                        console.log("User is NOT logged in");               
                        showLogin();
                    }
                });
            };  // End Facebook async login
 
          // Load the SDK Asynchronously
            (function(d){
                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js";
                d.getElementsByTagName('head')[0].appendChild(js);
            }(document));
        </script>       
 
        <script>
            /*** USER TRIGGERED JS ***/
            var username = '';
            var userid = '';
            var userEmail = ''; 
 
            function loginToFacebook() {
                console.log('Login to facebook');
                // Login
                FB.login(function(response) {
                    if (response.authResponse) {
                        console.log('Welcome!  Fetching your information.... ');
                        FB.api('/me', function(response) {
                            console.log('Good to see you, ' + response.name + ', ' + response.email + '.');
                            username = response.name;
                            userid = response.id;
                            userEmail = response.email;
 
                            showLobby(response.id, response.name, response.email);
                        });
                    } else {
                        console.log('User cancelled login or did not fully authorize.');
                        showErrorScreen();
                    }
                }, {scope: 'email'});
            }
 
            function showLogin() {
                // Get DOM elements to show/hide
                var lobby = document.getElementById("lobby");  
                var login = document.getElementById("login");  
 
                lobby.style.display = 'none';  // Show the lobby
                login.style.display = 'block    ';  // Show the lobby
            }
 
          
            function showErrorScreen() {
                console.log('showErrorScreen');
            }
            </script>
  </body>
</html>