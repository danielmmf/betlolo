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
                        <a class="logo" title="Betlolo">Betlolo</a>

                        <div class="mob-btn"><i class="ion-android-menu"></i></div>

                        <nav>
                            <ul ng-if="!logado">
                                <li data-scroll="area-01" class="active">Início</li>
                                <li data-scroll="area-03">Prêmios</li>
                                <li data-scroll="area-04">Categorias</li>
                                <li data-scroll="area-05">FAQ</li>
                            </ul>

                            <!-- <ul ng-if="logado">
                                <li data-scroll="area-01" style="display:none;">Início</li>
                                <li data-scroll="area-03" class="active">Prêmios</li>
                                <li data-scroll="area-04">Categorias</li>
                                <li data-scroll="area-05">FAQ</li>
                            </ul> -->

                            <span class="mob-close">&times;</span>
                        </nav>
                        <div class="social">
                            <p>Redes <strong>sociais:</strong></p>
                            <ul>
                                <li><a href="#" target="_blank" title="Siga-nos no Twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#" target="_blank" title="Curta-nos no Facebook" target="_blank"><i class="ion-social-facebook"></i></a></li>
                            </ul>
                        </div>
                        
                        <div class="login" ng-if="!logado">
                            <a href="javascript:;" title="Entrar">Entrar</a>
                        </div>
                        
                        <div class="lolopoints" ng-if="logado">
                            <span>200</span>
                        </div>

                        <div class="nickname" ng-if="logado">
                            <span>Daniel Belentini</span></i>

                            <button id="logout">Sair</button>
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
                                    <div class="input-group-addon"><i class="ion-ios-person-outline"></i></div>
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
                                    <div class="input-group-addon"><i class="ion-ios-home-outline"></i></div>
                                    <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                                    <input type="hidden" id="rua" name="rua">
                                    <input type="hidden" id="bairro" name="bairro" >
                                    <input type="hidden" id="cidade" name="cidade" >
                                    <input type="hidden" id="uf" name="uf">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-addon"><i class="ion-ios-locked-outline"></i></div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-addon"><i class="ion-ios-locked-outline"></i></div>
                                    <input type="password" class="form-control" id="confirmaPassword" name="confirmaPassword" placeholder="Confirmar senha">
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" id="cadastrar">Cadastrar</button>
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
                            <li class="item active first-prize">
                                <span class="pos">1º</span>
                                <img src="dist/img/prizes/prize-01.png" alt="1º lugar">
                                <span class="caption">NB Razer Gaming Blade</span>
                            </li>
                            <li class="item">
                                <span class="pos">2º</span>
                                <img src="dist/img/prizes/prize-02.png" alt="2º lugar">
                                <span class="caption">Kit Razer Mercury Teclado Mouse e Headset</span>
                            </li>
                            <li class="item">
                                <span class="pos">3º</span>
                                <img src="dist/img/prizes/prize-03.png" alt="3º lugar">
                                <span class="caption">Kit Teclado Blackwidow Chroma e mouse Mamba </span>
                            </li>
                            <li class="item">
                                <span class="pos">4º</span>
                                <img src="dist/img/prizes/prize-04.png" alt="4º lugar">
                                <span class="caption">Razer Kraken Forged Silver</span>
                            </li>
                            <li class="item">
                                <span class="pos">5º</span>
                                <img src="dist/img/prizes/prize-05.png" alt="5º lugar">
                                <span class="caption">Teclado Razer Blackwidow Chroma V2</span>
                            </li>
                            <li class="item">
                                <span class="pos">6º e 7º</span>
                                <img src="dist/img/prizes/prize-06-07.png" alt="6º ao 7º lugar">
                                <span class="caption">Kit Razer 4 em 1 Holiday Bundle</span>
                            </li>
                            <li class="item">
                                <span class="pos">8º</span>
                                <img src="dist/img/prizes/prize-08.png" alt="8º lugar">
                                <span class="caption">Teclado e Mouse Game Razer Cynosa Pro Bundle</span>
                            </li>
                            <li class="item">
                                <span class="pos">9º</span>
                                <img src="dist/img/prizes/prize-09.png" alt="9º lugar">
                                <span class="caption">Headset Razer Kraken USB</span>
                            </li>
                            <li class="item">
                                <span class="pos">10º</span>
                                <img src="dist/img/prizes/prize-10.png" alt="10º lugar">
                                <span class="caption">Mouser Razer Abyssus V2</span>
                            </li>
                        </ul>

                        <div class="controls">
                            <a href="#" class="previous"><i class="ion-chevron-left"></i></a> 
                            <a href="#" class="next"><i class="ion-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="buttons">
                        <button class="btn btn-primary prizes-table">Confira a lista de prêmios!</button>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//landing.betlolo.com/" class="btn btn-info" target="_blank">Compartilhe com os amigos!</a>
                        <a href="javascript:;" class="btn btn-info invite">Convide um amigo</a>
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
                        <!-- <div>
                            <h3>Challenges</h3>
                            <p>Ganhe entrando em competições <strong>desafie outros jogadores</strong></p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOURTH SECTION -->

    <!-- START FIFTH SECTION -->
    <section id="area-05">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>Perguntas Frequentes</h2>

                    <div class="content">
                        <dl>
                            <dt>Como ganho os prêmios?</dt>
                            <dd>Você ganha uma quantidade de <em>Lolopoints (LP)</em> conforme usa a plataforma Betlolo. <br>Nós premiaremos os loloplayers que tiverem maior quantidade de LP até o final da temporada Beta.</dd>
                        </dl>
                        <dl>
                            <dt>O que são <em>Lolopoints</em>?</dt>
                            <dd><em>Lolopoints</em> são os pontos que você ganha por apostar na plataforma e realizar algumas tarefas. <br>Ao cadastrar sua conta, você terá uma carteira de <em>Lolopoints</em>, e a quantidade de <em>Lolopoints</em> que você tiver definirá sua posição no rank da temporada.</dd>
                        </dl>
                        <dl>
                            <dt>Sistema de pontos LP</dt>
                            <dd>Ao ganhar uma aposta, você ganhará a quantidade de 25% LP sobre o que ganhou na aposta. <br>(Ex. Ganhou 100 créditos fictícios, ganha 25 LP)</dd>
                        </dl>
                        <dl>
                            <dt>Você também ganha <em>Lolopoints</em> realizando algumas tarefas no nosso beta da Betlolo</dt>
                            <dd>Compartilhando o link do Betlolo diariamente<br>
                                Convidando um amigo para o Betlolo<br>
                                Completando as informações do seu perfil
                            </dd>
                        </dl>
                        <dl>
                            <dt>Aviso:</dt>
                            <dd>Essas são algumas formas de ganhar LP, mas fique atento ao site, pois haverá mais maneiras de ganhar os <em>Lolopoints</em>.</dd>
                        </dl>
                        <dl>
                            <dt>Como apostar</dt>
                            <dd>Ao criar o seu cadastro você terá uma carteira de CRÉDITOS FICTÍCIOS, esses créditos são os que você poderá apostar em nossas categorias de apostas. Então fique atento, logo o Betlolo estará no ar!</dd>
                        </dl>
                        <dl>
                            <dt>Quando o Betlolo vai ao ar?</dt>
                            <dd>Fique ligado! Você receberá um e-mail informando a data de lançamento! Mas não se preocupe, não vai demorar!</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FIFTH SECTION -->
    
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
    
    
    <!-- Modal: tabela de prêmios -->
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
    
    <!-- Modal: Lolopoints -->
    <div id="lolopoints" class="lightbox">
        <span class="closeBanner">&times;</span>

        <div class="info">
            <div class="quant-lolopoints">
                <span>200</span>
            </div>

            <h2>Parabéns</h2>
            <p>
                Enviaremos para seu e-mail o comprovante de <span>200</span> Lolopoints!<br>
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
    
    <!-- Modal: Login -->
    <div id="login" class="lightbox">
        <div class="wrapper">
            <div class="box-forms">
                <i class="ion-android-close close"></i>
                <div class="login-form">
                    <form>
                        <fieldset>
                            <legend>Login</legend>
                            
                            <div class="input-group mb-2">
                                <div class="input-group-addon"><i class="ion-ios-email-outline"></i></div>
                                <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="E-mail">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-addon"><i class="ion-ios-locked-outline"></i></div>
                                <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Senha">
                            </div>
                            <div class="input-group mb-4 forgot-pass">
                                <a href="javascript:;" title="Esqueci minha senha">Esqueceu sua senha?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Logar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- Esqueceu a senha -->
                <div class="forgot-pass-form">
                    <form>
                        <fieldset>
                            <legend>Esqueceu sua senha?</legend>
                            
                            <div class="input-group mb-2">
                                <div class="input-group-addon"><i class="ion-ios-email-outline"></i></div>
                                <input type="email" class="form-control" id="emailForgot" name="emailForgot" placeholder="Digite o e-mail cadastrado">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Convide um amigo -->
    <div id="inviteFriend" class="lightbox">
        <div class="wrapper">
            <div class="box-forms">
                <i class="ion-android-close close"></i>
                <div class="forgot-pass-form">
                    <form>
                        <fieldset>
                            <legend>Convide um amigo</legend>
                            
                            <div class="input-group mb-2">
                                <div class="input-group-addon"><i class="ion-ios-email-outline"></i></div>
                                <input type="email" class="form-control" id="emailForgot" name="emailForgot" placeholder="Digite o e-mail desejado">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
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
            $('#cep').mask('00000-000');

            

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


                var cep = document.getElementById('cep').value;
                 if (cep.length < 9) {
                    alert("Preencha o cep corretamente");
                   return false; // keep form from submitting
                 }

                var dados = $("#form_cadastro").serialize();

                if(!isValidDate($("#birthDate").val())){
                    alert("Use uma data valida");
                    return false;
                }

                if($("#name").val() ==""){
                    alert("Preencha seu nome");
                    return false;
                }

                if($("#cep").val() ==""){
                    alert("Preencha seu cep");
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
                                $('#lolopoints .quant-lolopoints').find('span').text(result);

                            }else{
                                alert( data.response );
                                return false;
                                
                            }

                        });
                    }else{
                        alert("E-mail e Senha devem ser igual a suas confirmações");
                        return false;  
                    }

                        
                }else{
                    alert("Preencha com e-mail correto");
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