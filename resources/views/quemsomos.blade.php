<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apae - Feira de Santana </title>

    <link rel="icon" type="image/jpg" src="{{asset('images/apae5.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap-4.1.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

   <div class="top-container" style="width:100%">

         <header id="header" style="">
            <div class="container-fluid" >
                <div id="logo" class="col-2">
                    <a href="/" class="scrollto"><img src="images/apae2.png" class="img-topBar img-fluid" alt=""></a>
                </div>
                <nav id="nav-menu-container " class="col-9 text-right" style="height:100%;width:100%"  >
                    <ul class="nav-menu">
                        <li class="pt-3"><a href="/">Inicio</a></li>
                        <li class="pt-3"><a href="/quemsomos">Quem Somos</a></li>
                        <li class="pt-3"><a href="/nossotime">Nosso Time</a></li>
                 </ul>
                    
                    <div class="pt-3 text-right" >
                        <label style="border-radius:50px;background-color:rgba(206, 201, 201,0.4);"><a href="{{ url('/login') }}">Login</a></label>
                    </div>
    
                </nav>
        </header>

        <main>
            <div class="col-8 offset-2">
                <section id="quemsomos">
                    <h3 class="text-center" style="color: black">Quem Somos</h3>
                    <div>
                        <p class="parag">A APAE de Feira de Santana ?? uma organiza????o social, de car??ter assistencial, filantr??pica, com uma estrutura organizacional composta de pais e pessoas da comunidade, que em condi????o de associados e volunt??rios, prov??m ?? manuten????o da mesma.</p>

                        <p class="parag">Fundada em 1967 por Pais de Excepcionais, e desativada em 1974, a APAE de Feira de Santana, ressurgiu em 1984, com a miss??o de promover e articular a????es de defesa de direitos, preven????o, orienta????es, presta????o de servi??os e apoio ?? fam??lia, direcionadas ?? melhoria da qualidade de vida da Pessoa com Defici??ncia Intelectual, de ambos os sexos, a partir de zero ano, em regime de semi-internato e ?? constru????o de uma sociedade justa e solid??ria.</p>
                            
                        <p class="parag">Tem como atividade principal a assist??ncia social, a defesa de direitos, preven????o da defici??ncia, educa????o b??sica, educa????o profissional, sa??de, apoio ?? fam??lia, lazer, esporte, cultura, assist??ncia ao idoso com defici??ncia, estudos e pesquisas, capacita????o e aperfei??oamento t??cnico profissional e inser????o no mercado de trabalho da Pessoa com Defici??ncia Intelectual e Autismo, congregando a comunidade em geral, que em parceria com ??rg??os governamentais, procuram garantir a efic??cia dos direitos sociais de seus clientes.</p>
                            
                        <p class="parag">Presta atendimento a cerca de 1.200 Pessoas com Defici??ncia Intelectual e/ou M??ltipla e Autismo, de Feira de Santana e sua Macro-Regi??o; sendo que 90% s??o pertencentes a uma classe s??cio-econ??mica de baixa renda.</p>
                            
                        <p class="parag">Comp??e a Rede de Cuidados ?? Pessoa com Defici??ncia no ??mbito do Sistema ??nico de Sa??de (SUS) na cidade, como Centro Especializado em Reabilita????o ??? CER II, atendendo defici??ncia f??sica e intelectual.</p>
                            
                        <p class="parag">A entidade possui uma equipe, com cerca de 200 profissionais composta de m??dicos (neuropediatra, ortopedista e psiquiatra), psic??logos, fisioterapeutas, terapeutas ocupacionais, psicopedagogos, assistentes sociais, fonoaudi??logos, musicoterapeuta, nutricionista, pedagogos, professores de educa????o f??sica, professores especializados e auxiliares, enfermeiras, t??cnicos de enfermagem, administrador, auxiliares administrativos, pessoal de apoio, al??m de estagi??rios e volunt??rios.</p>
                            
                        <p class="parag">Para reabilita????o destas pessoas s??o utilizados m??todos e t??cnicas terap??uticas espec??ficas, atrav??s de um conjunto de atividades individuais e em grupo de estimula????o cognitiva, sensorial e psicomotora, visando ?? reeduca????o das fun????es cognitivas e sensoriais dos mesmos.</p>
                    </div>
                </section>
            </div>


        </main>


        <footer class="footer">
            <div class="container" id="footer" >
                <div class="row" >
                    <div class="col-12" >
                        <img src="{{asset('images/apae5.png')}}" class:"img-fluid" id="img-footer"  alt="">
                        <h3 class="titulo-footer ">APAE - Feira de Santana</h3>
                        <p class="endereco">Tel: (75) 33217300 ??? E-mail: feiradesantana@apaebrasil.org.br</p>
                        <p class="endereco">Rua da APAE, 76 ??? Centro</p>
                        <p class="endereco">CEP: 44100000 ??? Feira de Santana ??? BA</p>
                    </div>
                </div>
            </div>
        </footer>

        
    </div>

    <script src = "{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script> 
    <script src = "{{asset('vendor/OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js')}}"></script> 
    <script src = "{{asset('vendor/bootstrap-4.1.1/js/bootstrap.min.js')}}"></script> 
    <script src = "{{asset('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>


    
</body>
</html>