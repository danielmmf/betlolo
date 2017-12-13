<!DOCTYPE html>
<!-- saved from url=(0022)http://localhost:3000/ -->
<html lang="pt-BR" ng-app="sampleApp">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br">
    
    <!-- Favicon Images -->
    <link rel="icon" href="http://localhost:3000/dist/img/favicon/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="http://localhost:3000/dist/img/favicon/favicon.ico">
    <script src="//connect.facebook.net/en_US/all.js"></script>
    <meta name="msapplication-TileImage" content="dist/img/favicon/betlolo-icon.ico">

    <!-- OG Metas -->
    <meta property="og:locale" content="pt_BR">

    <meta property="og:url" content="http://landing.betlolo.com">

    <meta property="og:title" content="Betlolo - A plataforma de Apostas dos Gamers">
    <meta property="og:site_name" content="Landing Betlolo">
    <meta property="fb:485170225214347">
    <meta property="og:description" content="Cadastre-se hoje e ganhe Lolopoints. Quando a plataforma for lançada, é só fazer seu login e começar suas apostas! Confira os prêmios no site!">

    <meta property="og:image" content="http://landing.betlolo.com/dist/img/sharing.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
    <meta property="og:type" content="website">
    
    <title>Betlolo -  A plataforma de apostas dos Gamers</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="./index_files/style.min.css">
    <!-- endinject -->
</head>
    
<body cz-shortcut-listen="true"  ng-controller="SampleCtrl">

    <!-- START HEADER -->
    <header>
        <div class="holder">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a href="javascript:;" class="logo" title="Betlolo">Betlolo</a>

                        <div class="mob-btn"><i class="ion-android-menu"></i></div>

                        <nav>
                            <ul>
                                <li data-scroll="area-01" class="active">Início</li>
                                <li data-scroll="area-03" class="">Prêmios</li>
                                <li data-scroll="area-04" class="">Categorias</li>
                            </ul>

                            <span class="mob-close">×</span>
                        </nav>
                        <div class="social">
                            <p>Redes <strong>sociais:</strong></p>
                            <ul>
                                <li><a href="http://localhost:3000/#" target="_blank" title="Siga-nos no Twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="http://localhost:3000/#" target="_blank" title="Curta-nos no Facebook"><i class="ion-social-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START FIRST SECTION -->
    <section id="area-01">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="info">
                        <h1>Betlolo</h1>
                        <h2>
                            <strong><span>Betlolo</span></strong> a plataforma de apostas dos <strong><span>Gamers</span></strong>.
                        </h2>
                        
                        <p>
                            <strong>Faça seu cadastro agora e ganhe Lolopoints.</strong>
                            <span class="highlight">Faça seu cadastro e concorra a divesros PRÊMIOS como um RAZER BLADE e MUITO MAIS!</span>
                        </p>
                    </div>

                    <div class="signup">
                        <form id="form_cadastro">
                            <fieldset>
                                <legend>Cadastrar</legend>
                                <div class="input-group mb-2">
                                    <div class="input-group-addon"><i class="ion-ios-email-outline"></i></div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required="">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-addon"><i class="ion-ios-email-outline"></i></div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-addon"><i class="ion-ios-email-outline"></i></div>
                                    <input type="email" class="form-control" id="confirmEmail" name="confirmEmail" placeholder="Confirmar e-mail" required="">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-addon"><i class="ion-ios-calendar-outline"></i></div>
                                    <input type="tel" class="form-control" id="birthDate" name="nascimento" placeholder="Data de nascimento" required="">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-addon"><i class="ion-ios-locked-outline"></i></div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required="">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-addon"><i class="ion-ios-locked-outline"></i></div>
                                    <input type="password" class="form-control" id="confirmaPassword" name="confirmaPassword" placeholder="Confirmar senha" required="">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-addon"><i class="ion-ios-locked-outline"></i></div>
                                    <input type="text" id="cep" name="cep">
                                    <input type="hidden" id="rua"  name="rua">
                                    <input type="hidden" id="bairro"  name="bairro" >
                                    <input type="hidden" id="cidade" name="cidade" >
                                    <input type="hidden" id="uf"  name="uf">
                                </div>

                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="cadastrar">Cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="signup-buttons">
                        <a href="#"  ng-click="login_facebook()" class="btn btn-facebook"><i class="ion-social-facebook"></i> Facebook cadastrar</a>
                        <a href="#" class="btn btn-twitter" ng-click="login_twitter()" ><i class="ion-social-twitter"></i> Twitter cadastrar</a>
                    </div>

                    <i class="ion-chevron-down"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- END FIRST SECTION -->

    <!-- START SECOND SECTION -->
    <section id="area-02">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p><strong>Compartilhe</strong> nossa página e ganhe Lolopoints para sair na frente!</p>
                </div>
                <div class="col">
                    <div class="sort">
                        <ul>
                            <li>40</li>
                            <li>60</li>
                            <li>80</li>
                            <li>160</li>
                            <li>200</li>
                            <li class="main-sort" style="display: none;">0</li>
                            <li class="upper-sort" style="display: list-item;">200</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <p><strong>Confira</strong> os prêmios que você ganhará se for um dos melhores!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECOND SECTION -->

    <!-- START THIRD SECTION -->
    <section id="area-03">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="info">
                        <h2>Não perca essa oportunidade! <span>Prêmios irados!</span></h2>
                        <h3>Pensados especialmente para você!</h3>
                        <small>Atenção: as imagens abaixo são meramente ilustrativas.</small>
                    </div>

                    <div class="prizes">
                        <ul class="carousel owl-carousel">
                            <li class="item first-prize transition" style="margin-top: 53px; margin-left: 461px; z-index: 1; transition-duration: 0.35s;">
                                <span class="pos">1º</span>
                                <img src="./index_files/prize-01.png" alt="1º lugar">
                                <span class="caption">NB Razer Gaming Blade</span>
                            </li>
                            <li class="item transition" style="margin-top: 53px; margin-left: 188px; z-index: 2; transition-duration: 0.35s;">
                                <span class="pos">2º</span>
                                <img src="./index_files/prize-02.png" alt="2º lugar">
                                <span class="caption">Kit Razer Mercury Teclado Mouse e Headset</span>
                            </li>
                            <li class="item transition" style="margin-top: 74px; margin-left: -22px; z-index: 4; transition-duration: 0.35s;">
                                <span class="pos">3º</span>
                                <img src="./index_files/prize-03.png" alt="3º lugar">
                                <span class="caption">Kit Teclado Blackwidow Chroma e mouse Mamba </span>
                            </li>
                            <li class="item transition" style="margin-top: 108px; margin-left: -69px; z-index: 7; transition-duration: 0.35s;">
                                <span class="pos">4º</span>
                                <img src="./index_files/prize-04.png" alt="4º lugar">
                                <span class="caption">Razer Kraken Forged Silver</span>
                            </li>
                            <li class="item transition" style="margin-top: 138px; margin-left: 67px; z-index: 8; transition-duration: 0.35s;">
                                <span class="pos">5º</span>
                                <img src="./index_files/prize-05.png" alt="5º lugar">
                                <span class="caption">Teclado Razer Blackwidow Chroma V2</span>
                            </li>
                            <li class="item transition active" style="margin-top: 150px; margin-left: 324px; z-index: 10; transition-duration: 0.35s;">
                                <span class="pos">6º e 7º</span>
                                <img src="./index_files/prize-06-07.png" alt="6º ao 7º lugar">
                                <span class="caption">Kit Razer 4 em 1 Holiday Bundle</span>
                            </li>
                            <li class="item transition" style="margin-top: 138px; margin-left: 582px; z-index: 9; transition-duration: 0.35s;">
                                <span class="pos">8º</span>
                                <img src="./index_files/prize-08.png" alt="8º lugar">
                                <span class="caption">Teclado e Mouse Game Razer Cynosa Pro Bundle</span>
                            </li>
                            <li class="item transition" style="margin-top: 108px; margin-left: 718px; z-index: 3; transition-duration: 0.35s;">
                                <span class="pos">9º</span>
                                <img src="./index_files/prize-09.png" alt="9º lugar">
                                <span class="caption">Headset Razer Kraken USB</span>
                            </li>
                            <li class="item transition" style="margin-top: 75px; margin-left: 671px; z-index: 0; transition-duration: 0.35s;">
                                <span class="pos">10º</span>
                                <img src="./index_files/prize-10.png" alt="10º lugar">
                                <span class="caption">Mouser Razer Abyssus V2</span>
                            </li>
                            <!-- <li class="item"><img src="dist/img/prizes/prize-11-12_a.png" alt="11º ao 12º lugar"></li>
                            <li class="item"><img src="dist/img/prizes/prize-11-12_b.png" alt="11º ao 12º lugar"></li>
                            <li class="item"><img src="dist/img/prizes/prize-13-20.png" alt="13º ao 20º lugar"></li> -->
                        </ul>

                        <div class="controls">
                            <a href="http://localhost:3000/#" class="previous"><i class="ion-chevron-left"></i></a> 
                            <a href="http://localhost:3000/#" class="next"><i class="ion-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="buttons">
                        <button class="btn btn-primary prizes-table">Confira a lista de prêmios!</button>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//landing.betlolo.com/" class="btn btn-info" target="_blank">Compartilhe com os amigos!</a>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>
    <!-- END THIRD SECTION -->

    <!-- START FOURTH SECTION -->
    <section id="area-04">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>Nossas principais <strong class="highlight">Categorias</strong></h2>

                    <div class="categories">
                        <div>
                            <h3>Tournaments</h3>
                            <p>Aposte nos principais torneios <strong>do cenário competitivo</strong></p>
                        </div>
                        <div>
                            <h3>Streamings</h3>
                            <p>Aposte no desempenho dos <strong>seus streamers favoritos</strong></p>
                        </div>
                        <div>
                            <h3>Challenges</h3>
                            <p>Ganhe entrando em competições <strong>desafie outros jogadores</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOURTH SECTION -->
    
    <!-- START FOOTER -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <p>© Betlolo. Todos os direitos reservados.</p>

                        <div class="social">
                            <p>Redes <strong>sociais:</strong></p>
                            <ul>
                                <li><a href="http://localhost:3000/#" target="_blank" title="Siga-nos no Twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="http://localhost:3000/#" target="_blank" title="Curta-nos no Facebook"><i class="ion-social-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    
    
    <div id="prizesTable" class="lightbox">
        <i class="ion-android-close close"></i>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2>Confira a lista de prêmios que você poderá ganhar!</h2>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Posição</th>
                                        <th scope="col">Prêmio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1º</th>
                                        <td>NB RAZER GAMING BLADE I7-7700HQ 2.8GHz/16GB/512GB SSD M.2/14"FHD/VGA GTX 1060 6GB/W10/INGLÊS</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2º</th>
                                        <td>RAZER KRAKEN 7.1 V2 MERCURY BRANCO + MOUSE GAME RAZER LANCEHEAD MERCURY BRANCO + TECLADO GAME RAZER BLACKWIDOW X CHROMA MERCURY</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3º</th>
                                        <td>TECLADO GAME RAZER BLACKWIDOW CHROMA V2 + MOUSE GAME RAZER MAMBA TOURNAMENT</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4º</th>
                                        <td>RAZER KRAKEN FORGED SILVER</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5º</th>
                                        <td>TECLADO GAME RAZER BLACKWIDOW CHROMA V2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6º e 7º</th>
                                        <td>TECLADO GAME RAZER KIT 4 EM 1 HOLIDAY BUNDLE</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8º</th>
                                        <td>TECLADO + MOUSE GAME RAZER CYNOSA PRO BUNDLE</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9º</th>
                                        <td>FONE C/ MICROFONE RAZER KRAKEN USB PC/PS4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10º</th>
                                        <td>MOUSE GAME RAZER ABYSSUS V2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11º e 12º</th>
                                        <td>CARTÃO: R$90 BATTLE.NET OU 6.110 RIOT POINTS OU R$100 STEAM</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13º ao 20º</th>
                                        <td>CARTÃO: R$60 BATTLE.NET OU 2.980 RIOT POINTS OU R$50 STEAM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="lolopoints" class="lightbox" style="top: 559px; display: none;">
        <span class="closeBanner">×</span>

        <div class="info">
            <div class="quant-lolopoints">
                <span>200</span>
            </div>

            <h2>Parabéns</h2>
            <p>
                Enviaremos para seu e-mail o comprovante de <span>160</span> Lolopoints!<br>
                Seus pontos ficarão guardados na carteira da Betlolo.
            </p>
            <p>
                Fique ligado! Em breve a Betlolo estará no ar!
            </p>
            
            <div class="buttons">
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//landing.betlolo.com/" class="btn btn-info" target="_blank">Compartilhe e ganhe 60 Lolopoints!</a>
            </div>
        </div>
    </div>
    <div id="overlay" style="display: none;"></div>
    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
    <!-- AngularFire -->
    <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
    <!-- inject:js -->
    <script src="./index_files/plugins.min.js"></script>
    <script src="./index_files/js/main.js"></script>
    <script src="./js/jquery.mask.js"></script>
    <!-- endinject -->
    <script type="text/javascript">
        
        $( document ).ready(function() {
            function getEndereco() {  
                 if($.trim($("#cep").val()) != ""){  
                     $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){  
                         if(resultadoCEP["resultado"]){  
                             $("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));  
                             $("#bairro").val(unescape(resultadoCEP["bairro"]));  
                             $("#cidade").val(unescape(resultadoCEP["cidade"]));
                             $("#uf").val(unescape(resultadoCEP["uf"]));  
                         }else{  
                             alert("Cep invalido !");  
                             //jqDialog.notify("Cep Invalido", 0);
                         }  
                     });  
                 }  
             }  
         
            $('#cep').on('blur', function() {
                    getEndereco();
            });
         
        
            

            $('#birthDate').mask('00/00/0000');

            

            function isValidDate(str) {
                var parts = str.split('/');
                if (parts.length < 3)
                    return false;
                else {
                    var day = parseInt(parts[0]);
                    var month = parseInt(parts[1]);
                    var year = parseInt(parts[2]);
                    if (isNaN(day) || isNaN(month) || isNaN(year)) {
                        return false;
                    }
                    if (day < 1 || year < 1)
                        return false;
                    if(month>12||month<1)
                        return false;
                    if ((month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) && day > 31)
                        return false;
                    if ((month == 4 || month == 6 || month == 9 || month == 11 ) && day > 30)
                        return false;
                    if (month == 2) {
                        if (((year % 4) == 0 && (year % 100) != 0) || ((year % 400) == 0 && (year % 100) == 0)) {
                            if (day > 29)
                                return false;
                        } else {
                            if (day > 28)
                                return false;
                        }      
                    }
                    return true;
                }
            }
            
            function IsEmail(email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(email)) {
                   return false;
                }else{
                   return true;
                }
              }



             var numbers = [160, 200];
             var randomNumbers = numbers[Math.floor(Math.random() * numbers.length)];

             function printNumbers() {
              //  alert(randomNumbers)
                  $(".upper-sort").text(randomNumbers);
                }


            $("#cadastrar").on('click', function(){
                var dados = $("#form_cadastro").serialize();

                if(!isValidDate($("#birthDate").val())){
                    alert("Use uma data valida");
                    return false;
                }

                if($("#name").val() ==""){
                    alert("Preencha seu nome");
                    return false;
                }
                if($("#password").val() ==""){
                    alert("Preencha sua senha");
                    return false;
                }
                if($("#birthDate").val() ==""){
                    alert("Preencha sua data de nascimento");
                    return false;
                }

                if(IsEmail($('#email').val())){

                    
                    if($('#email').val() == $('#confirmEmail').val() && $('#password').val() == $('#confirmaPassword').val()){
                        $.post('betlolo/registrar', dados,function( data ) {
                            if(data.status == 1){
                                 $('html, body').animate({
                                        scrollTop: $('#area-02').offset().top - 100
                                    }, 500);

                                    var output, started, duration, desired;

                                    duration = 5000;
                                    desired = '50';

                                    output = $('.main-sort');
                                    started = new Date().getTime();

                                    animationTimer = setInterval(function() {
                                        if (output.text().trim() === desired || new Date().getTime() - started > duration) {
                                            clearInterval(animationTimer);
                                        } else {
                                            output.text(
                                                20 *(Math.floor(Math.random() * (220-40)/20))
                                           );
                                        }
                                    }, 80);

                                   

                                   

                                    var result = $(".upper-sort").text(randomNumbers).html();
                                    
                                    setTimeout(function() {
                                      printNumbers(); 
                                      $('.main-sort').hide();
                                      $('.upper-sort').show();

                                      $('#lolopoints').css('top', lolopoints);

                                      $('#overlay, #lolopoints').delay(200).fadeIn();


                                      $('#lolopoints .quant-lolopoints').find('span').text(result);

                                    }, 5100);
                            }else{
                                alert( data.response );
                                return false;
                                
                            }

                        });
                    }else{
                        alert("Email e Senha devem ser igual a suas confirmações");
                        return false;  
                    }

                        
                }else{
                    alert("Preencha com email correto");
                    return false;
                }

            })
        });


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

    app.controller("SampleCtrl", function($scope, $firebaseAuth) {
    var auth = $firebaseAuth();

    var provider = new firebase.auth.TwitterAuthProvider();

    $scope.login_twitter = function(){
        firebase.auth().signInWithPopup(provider).then(function(result) {
        // This gives you a the Twitter OAuth 1.0 Access Token and Secret.
        // You can use these server side with your app's credentials to access the Twitter API.
        var token = result.credential.accessToken;
        var secret = result.credential.secret;
        // The signed-in user info.
        var user = result.user;

        console.log(result);
        console.log(user);
        $("#name").val(user.displayName);
        $("#email").val(user.email);
        $("#confirmEmail").val(user.email);
        // ...
    }).catch(function(error) {
        // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
        // ...
        });
    };

      // login with Facebook
      $scope.login_facebook = function(){
        auth.$signInWithPopup("facebook").then(function(firebaseUser) {
          console.log("Signed in as:", firebaseUser.uid);
          console.log(firebaseUser.user);
          $("#name").val(firebaseUser.user.displayName);
              $("#email").val(firebaseUser.user.email);
              $("#confirmEmail").val(firebaseUser.user.email);
        }).catch(function(error) {
          console.log("Authentication failed:", error);
        });
      }
    });
            


    </script>

 
</body></html>