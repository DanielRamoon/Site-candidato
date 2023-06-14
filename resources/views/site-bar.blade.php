<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="www.tecvalle.com.br">
    <meta name="author" content="Gabriel Avner">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="E5L8mNkHLQvSEz0jTegXgrKHWK2BAfpez2iPrjgN">

    <title>Ronnynho Queiroz</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('/site2/public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- OWL Carousel core CSS -->
    <link rel="stylesheet" href="{{url('/site2/public/vendor/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('/site2/public/vendor/owlcarousel/assets/owl.theme.default.min.css')}}">


    <!-- Custom fonts for this template -->
    <link href="{{url('/site2/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('/site2/public/css/aplb.css')}}" rel="stylesheet">
    <link href="{{url('/site2/public/css/lightbox.css')}}" rel="stylesheet">

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }
        .animation{
            -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
            -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
            -webkit-animation-delay: 2s; /* Safari 4.0 - 8.0 */
            animation-name: example;
            animation-duration: 4s;
            animation-delay: 0s;
        }
        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes example {
            0%   {transform: rotate(0deg);}
            25%  {transform: rotate(10deg);}
            50%  {transform: rotate(-10deg);}
            75%  {transform: rotate(5deg);}
            100% {transform: rotate(0deg);}
        }

        /* Standard syntax */
        @keyframes example {
            0%   {transform: rotate(0deg);}
            25%  {transform: rotate(10deg);}
            50%  {transform: rotate(-10deg);}
            75%  {transform: rotate(5deg);}
            100% {transform: rotate(0deg);}
        }
    </style>

    </head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/" style="margin-top:7px;">
                <img src="{{url('/site2/images/logo.png.png')}}" style="width:170px; margin-top: -27px;" >
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url('/acoes')}}">Ações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url('/noticias')}}">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url('/historia')}}">História</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url('/projetos')}}">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url('/contatos')}}">Contato</a>
                    </li>
                    <li class="nav-item">
                        <div style="margin-top: 10px;">
                            <input type="text" class="search" placeholder="  pesquisar" name="search" style="background-color: #efefef;border-style: solid;border-color: #efefef">
                            <button class="search-btn" type="submit" style="margin-left: -4px;border-style: solid;border-color: #efefef"><i class="fa fa-search"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



<hr class="hr-section-divider">

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators custom-carousel-indicator">
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> -->
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner" style="height:auto;" role="listbox" >
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="height: 500px;background-image: url('{{url('/site2/images/slide01.jpg')}}">
                <div class="carousel-caption custom-carousel-caption">
                    <div>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="#">
                                    <i style="margin-top: 18px;" class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="https://www.instagram.com/ronnynhoqueirozjua/">
                                    <i style="margin-top: 18px;" class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="https://www.youtube.com/@ronnynhoqueiroz235">
                                    <i style="margin-top: 18px;" class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 500px;background-image: url('{{url('/site2/images/slide02.jpg')}}">
                <div class="carousel-caption custom-carousel-caption">
                    <div>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="#">
                                    <i style="margin-top: 18px;" class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="https://www.instagram.com/ronnynhoqueirozjua/">
                                    <i style="margin-top: 18px;" class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href=https://www.youtube.com/@ronnynhoqueiroz235">
                                    <i style="margin-top: 18px;" class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 500px;background-image: url('{{url('/site2/images/slide01.png')}}">
                <div class="carousel-caption custom-carousel-caption">
                    <div>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="#">
                                    <i style="margin-top: 18px;" class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="https://www.instagram.com/ronnynhoqueirozjua/">
                                    <i style="margin-top: 18px;" class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" style="text-align: center;">
                                <a target="_blank" href="https://www.youtube.com/@ronnynhoqueiroz235">
                                    <i style="margin-top: 18px;" class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                
            </div>

            <!-- Slide Two - Set the background image for this slide in the line below -->
            <!-- <div class="carousel-item" style="background-image:  url('{{url('/site2/images/slide02.JPG')}}">
                <div class="carousel-caption custom-carousel-caption">
                    <p class="lead">PROMOVENDO E CONECTANDO EDUCAÇÃO</p>
                </div>
            </div> -->
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <!-- <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                <div class="carousel-caption custom-carousel-caption">
                    <p class="lead">PROMOVENDO E CONECTANDO EDUCAÇÃO</p>
                </div>
            </div> -->
        </div>
    </div>
</header>

<div class="d-none d-sm-none d-md-block d-lg-block" style="border-top:25px solid #3399ff;border-bottom:25px solid white;">
    <!-- <svg style="position: absolute; margin-top: -5vw; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1410 190"><defs><style>.cls-1{fill:#eb292f;fill-rule:evenodd;}</style></defs><title>Asset 4</title><g id="Layer_2" data-name="Layer 2"><g id="Camada_1" data-name="Camada 1"><g id="Slide"><g id="Caminho"><polygon class="cls-1" points="0 190 1410 190 1410 65.47 705.51 0 0 65.56 0 190"/></g></g></g></g></svg> -->
    <!-- <svg style="position: absolute; margin-top: 25px; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1410 190"><defs><style>.cls-1{fill:#eb292f;fill-rule:evenodd;}</style></defs><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Camada_1" data-name="Camada 1"><g id="Slide"><g id="Caminho"><polygon class="cls-1" points="0 124.81 701.51 190 1410 124.16 1410 0 0 0 0 124.81"/></g></g></g></g></svg> -->
    <!-- <svg style="position: absolute; margin-top: 0px; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1410 190"><defs><style>.cls-1{fill:#0B5FA7;fill-rule:evenodd;}</style></defs><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Camada_1" data-name="Camada 1"><g id="Slide"><g id="Caminho"><polygon class="cls-1" points="0 124.81 701.51 190 1410 124.16 1410 0 0 0 0 124.81"/></g></g></g></g></svg> -->
</div>

@yield('content')

<hr class="hr-section-divider">

<section class="page-section" id="video" style="padding: 0 0;">
<iframe  style="height: 450px; width: 100%;" src="https://www.youtube.com/embed/KmafYZUQjcc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <!-- <img src="{{url('/site2/images/v-placeholder.jpg')}}" class="card-img-top" alt="..." style="height: 450px;"> -->
</section>

<hr class="hr-section-divider">

<section class="page-section" id="acoes">
    <div class="container">
        <div class="row section-heading-row">
            <div class="col-lg-12">
            <span style="font-weight: bold; color: #3399ff; font-size: 44px; font-family: 'Segoe Script', 'Segoe UI', sans-serif;"> Nossas Ações</span>
                <!-- <h2 class="section-heading text-uppercase float-left">NOSSAS AÇÕES</h2> -->
                <a href="{{url('/acoes')}}">
                    <h6 class="section-heading-right text-uppercase float-right">MAIS AÇÕES <i class="fas fa-th"></i></h6>
                </a>
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row section-heading-row">
        @if(!empty($parceiros[0]))
            @foreach($parceiros as $parceiro)
                <div class="col-lg-6">
                    <img src="{{url('/uploads')}}/{{$parceiro->image}}" class="card-img-top" alt="..." style="height: 350px;">
                    <center>
                        <div style="margin-top: -20px;">
                            <a class="btn btn-dark btn-lg" href="{{url('/acoes')}}/{{$parceiro->id}}" style="color: white;border-radius: 15px;">
                                {{$parceiro->name}}
                            </a>
                        </div>
                    </center>
                </div>
            @endforeach
        @else
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/130" class="card-img-top" alt="..." style="height: 350px;">
                <center>
                    <div style="margin-top: -20px;">
                        <a class="btn btn-dark btn-lg" href="" style="color: white;border-radius: 15px;">
                            Nenhuma ação encontrada
                        </a>
                    </div>
                </center>
            </div>
        @endif
        </div>
    </div>
</section>

<hr class="hr-section-divider">

<section class="page-section" id="multimidia" style="padding: 65px 0;height: 500px;width:100%;background-size: 100%;background-repeat: no-repeat;background-image: url('{{url('/site2/images/ponte-footer.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="row section-heading-row">
                    <div class="col-lg-12" style="margin-bottom: 20px;">
                     <span style="font-weight: bold; color: #3399ff; font-size: 34px; font-family: 'Segoe Script', 'Segoe UI', sans-serif;"> Fale com Ronnynho</span>

                        <!-- <h2 class="section-heading text-uppercase float-left" style="color: white">FALE COM TIANO</h2> -->
                    </div>
                    <div class="col-lg-12">
                        <form action="{{url('/contatos/fale')}}" method="POST">
                            {{ csrf_field() }}
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="name" class="form-control" placeholder="Nome:">
                            </div>
                            <div style="margin-bottom: 20px;">
                                <input type="text" name="phone" class="form-control" placeholder="Whatsapp:">
                            </div>
                            <div style="margin-bottom: 20px;">
                                <textarea class="form-control" name="description" placeholder="Mensagem:" rows="6" cols="50"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-3" style="">
                <div>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item" style="text-align: center;">
                            <a target="_blank" href="#">
                                <i style="margin-top: 18px;" class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item" style="text-align: center;">
                            <a target="_blank" href="https://www.instagram.com/ronnynhoqueirozjua/">
                                <i style="margin-top: 18px;" class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item" style="text-align: center;">
                            <a target="_blank" href="https://www.youtube.com/@ronnynhoqueiroz235">
                                <i style="margin-top: 18px;" class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="list-inline-item" style="text-align: center;margin-top: 18px;">
                            <a target="_blank" href="#">
                                <i style="margin-top: 18px;" class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-inline-item" style="text-align: center;margin-top: 18px;">
                            <a target="_blank" href="#">
                                <i style="margin-top: 18px;" class="fab fa-facebook-messenger"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-4 col-md-4" style="">
                <img src="{{url('/site2/images/logo.png.png')}}" class="card-img-top" alt="..." style="height: 425px;width:346px;float: left;margin-top:12px;margin-left:10%;">
            </div>
        </div>
    </div>
</section>

    <footer class="footer" id="footer" style="background-color: #cccccc; padding:0 0;">
        <div class="container" style="margin-bottom: -90px;">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <p style="font-size:14px; margin-top: 15px;">Rua Raul Nunes,10, Cajueiro, Juazeiro-Ba.</p>
                        </li>
                        <li class="list-inline-item">
                            <p style="font-size:14px; margin-top: 15px;">Copyright &copy; 2023 RONNYNHO QUEIROZ - Todos os direitos reservados.</p>
                        </li>
                        <li class="list-inline-item">
                            <p style="font-size:14px; margin-top: 15px;">(74) 9 9999-9999</p>
                        </li>
                        <!-- <a href="https://pt.org.br/" target="_blank">Partido dos Trabalhadores</a> -->
                        <!-- <a href="https://www.juazeiro.ba.leg.br/" target="_blank">Câmara Municipal</a> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/site2/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/site2/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- OWL Carousel core CSS -->
    <script src="{{url('/site2/public/vendor/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('/site2/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- <script src="{{url('/site2/admin/vendor/jquery-easing/jquery.slim.min.js')}}"></script> -->


    <!-- Contact form JavaScript -->
    <!-- <script src="js/jqBootstrapValidation.js')}}"></script> -->
    <!-- <script src="js/contact_me.js')}}"></script> -->
    <script src="{{url('/site2/public/js/search.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{url('/site2/public/js/aplb.js')}}"></script>
    <script src="{{url('/site2/public/js/lightbox.js')}}"></script>
    <script src="{{url('/site2/public/js/slide-noticia.js')}}"></script>

</body>

</html>
