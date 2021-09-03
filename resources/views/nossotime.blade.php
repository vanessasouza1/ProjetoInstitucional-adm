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
                <section id="nossotime">
                    <h3 class="text-center">Equipe</h3>
                    
                    <section class="time">
                    @foreach($membros as $membro)
                        <Label class="titulo-section text-center">
                        @if($membro->idDepartamento == 1)
                        DIRETORIA ADMINISTRATIVA
                        @elseif($membro->idDepartamento == 2)
                        COORDENAÇÃO
                        @elseif($membro->idDepartamento == 3)
                        EQUIPE TÉCNICA
                        @elseif($membro->idDepartamento == 4)
                        ADMINISTRAÇÃO E AUXILIARES
                        @endif
                        </label>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                      <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Função</th>
                                      </tr>
                                </thead>
                                <tbody>
                                      <tr>
                                        <th scope="row">{{$membro->nome}}</th>
                                        <td>{{$membro->funcao}}</td> 
                                      </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </section>
                  
                  <!--  <section class="time">
                        <Label class="titulo-section text-center">COORDENADORES</label>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Função</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Alexandre Malta Santos</th>
                                        <td>Administrativo</td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="time">
                        <Label class="titulo-section text-center">EQUIPE TÉCNICA</label>
                        <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Função</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Alex Bacelar Oliveira</th>
                                            <td>Educador Físico</td> 
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </section>

                    <section class="time">
                            <Label class="titulo-section text-center">ADMINISTRAÇÃO E AUXILIARES</label>
                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Função</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Alan Pereira da Paixão</th>
                                                <td>Auxiliar</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </section>-->
                

                </section>
            </div>

        </main>



        <footer class="footer">
            <div class="container" id="footer" >
                <div class="row" >
                    <div class="col-12" >
                        <img src="{{asset('images/apae5.png')}}" class:"img-fluid" id="img-footer"  alt="">
                        <h3 class="titulo-footer ">APAE - Feira de Santana</h3>
                        <p class="endereco">Tel: (75) 33217300 • E-mail: feiradesantana@apaebrasil.org.br</p>
                        <p class="endereco">Rua da APAE, 76 • Centro</p>
                        <p class="endereco">CEP: 44100000 • Feira de Santana • BA</p>
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