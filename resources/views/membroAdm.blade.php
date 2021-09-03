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

    <div class="top-container">

        <header id="header">
            <div class="container-fluid" style="display: flex;align-items: center">
                <div id="logo" class="col-3">
                    <a href="/" class="scrollto"><img src="{{asset('images/apae2.png')}}" class:"img-fluid" style="width:60px;height:60px" alt=""></a>
                </div>
                <nav id="nav-menu-container " class="col-9 text-right" >
                    <ul class="nav-menu">
                        <li><a href="/eventosAdm/view">Eventos</a></li>
                        <li><a href="/membroAdm/view">Membros</a></li>
                        
                        <!--<li class="menu-active"><a href="#team">DOE</a></li>-->
                    </ul>
                    <div><label><a href="{{ url('/logout') }}">Sair</a></label></div>
                    <!--<div><a href="loginAdm.html"><img src="assets/img/admin.png" class="img-fluid" style="width:40px;height:40px" ></a></div>-->
                </nav>
               
            </div>
        </header>

        <main>

            <div class="col-10 offset-1">
                <section id="paginaAdmin">
                    <h3 class="text-center" style="font-weight: 700; color: black">Membros</h3>
                    <section class="areaAdm ">
                        <a href="/cadastro/membroAdm/view"><button class="btn btn-success text-left" style=" margin-bottom: 10px">Cadastrar Novo Membro</button></a>
                        @foreach($membros as $membro)
                        <div class="container">
                            <div class="row espac-evento">
                                <div class="col-6">
                                    <div class="row">
                                        <label>Setor: </label>
                                        <label>&nbsp
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
                                    </div>
                                    <div class="row">
                                        <label>Nome: </label>
                                        <label>&nbsp {{$membro->nome}}</label>
                                    </div>
                                    <div class="row">
                                        <label>Função: </label>
                                        <label>&nbsp {{$membro->funcao}}</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{url('/altera/membroAdm/view'.$membro->idMembro)}}"><button class="btn" style="background-color: yellow; border-color: yellow;color: white">Alterar</button></a>
                                    <a href="{{url('/membroAdm/deletar'.$membro->idMembro)}}"><button class="btn" style="background-color: red; border-color:red;color: white">Remover</button></a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                 

                       <!-- <div class="container">
                                <div class="row espac-evento">
                                    <div class="col-6">
                                        <div class="row">
                                            <label>Setor: </label>
                                            <label>&nbsp DIRETORIA ADMINISTRATIVA</label>
                                        </div>
                                        <div class="row">
                                            <label>Nome: </label>
                                            <label>&nbsp Mary Diva P. Makhoul</label>
                                        </div>
                                        <div class="row">
                                            <label>Função: </label>
                                            <label>&nbsp Diretor</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button href="" class="btn" style="background-color: yellow; border-color: yellow;color: white">Alterar</button>
                                        <button heref="" class="btn" style="background-color: red; border-color:red;color: white">Remover</button>
    
                                    </div>
                                </div>
                            </div>-->
                    </section>
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