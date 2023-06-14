@extends('site-bar')

@section('content')

<section class="page-section" id="noticia-slide" style="background-color: #cccccc;">
    <div class="container"  style="margin-top: -60px;">
        <div class="row section-heading-row">
            <div class="col-lg-12">
            <span style="font-weight: bold; color: #3399ff; font-size: 44px; font-family: 'Segoe Script', 'Segoe UI', sans-serif;">Notícias</span>
                <!-- <h2 class="section-heading text-uppercase float-left">NOTÍCIAS</h2> -->
                <a href="{{url('/noticias')}}">
                    <h6 class="section-heading-right text-uppercase float-right">MAIS NOTÍCIAS <i class="fas fa-th"></i></h6>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        @if(!empty($noticias[0]))
            <div class="col-md-8" style="">
                <a id="link-noticia" href="{{url('/noticia/show')}}/{{$noticias[0]->id}}">
                    <div class="item">
                        <div class="card card-hover" style="align-items: center; background-color: white; height: 460px;">
                            <img id="image-noticia" src="{{url('/uploads')}}/{{$noticias[0]->image}}" class="card-img-top" alt="..." style="width:95%;height:390px; margin-top: 7px;">

                            <div class="card-body" style="padding-bottom: 10px; padding: 0rem 1.25rem">
                                <p id="title-noticia" class="card-text" style="color: black;">{{$noticias[0]->name}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @else
            <div class="col-md-8" style="">
                <div class="item">
                    <div class="card card-hover" style="align-items: center; background-color: white; height: 460px;">
                            <img src="https://via.placeholder.com/130" class="card-img-top" alt="..." style="width:95%;height:390px; margin-top: 7px;">

                            <div class="card-body" style="padding-bottom: 10px; padding: 0rem 1.25rem">
                                <p class="card-text" style="color: black;">Nenhuma notícia encontrada.</p>
                            </div>
                    </div>
                </div>
            </div>
        @endif
            <div class="col-md-4">
                <div class="item">
                    <div class="card card-hover" style="align-items: center; background-color: white; height: 460px;">
                        <div class="row">
                        @if(!empty($noticias[0]))
                            @foreach($noticias as $noticia)
                                <a class="link-noticia" href="{{url('/noticia/show')}}/{{$noticia->id}}" id="link-noticia">
                                    <div class="col-md-12">
                                        <p class="title-noticia" style="padding:15px 15px 0px 15px;">{{$noticia->name}}</p>
                                    </div>
                                    <div>
                                        <img src="{{url('/uploads')}}/{{$noticia->image}}" class="card-img-top image-noticia-hidden" alt="..." style="display:none;">
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <p style="padding:15px 15px 0px 15px;">Nenhuma notícia encontrada.</p>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="hr-section-divider">

<section class="page-section" id="multimidia">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row section-heading-row">
                    <div class="col-lg-12" style="margin-bottom: 20px;">
                    <span style="font-weight: bold; color: #3399ff; font-size: 44px; font-family: 'Segoe Script', 'Segoe UI', sans-serif;"> Minha História</span>





                        <!-- <h2 class="section-heading text-uppercase float-left">MINHA</h2> -->
                    </div>
                    <!-- <div class="col-lg-12" style="margin-top: -25px;">
                        <h2 class="section-heading text-uppercase float-left">HISTÓRIA</h2>
                    </div> -->
                    <div class="col-lg-12">
                        @isset($historia->description)
                        <p style="text-align: justify;">{!!mb_strimwidth($historia->description, 0, 829, "...")!!}</p>
                        <a class="btn btn-dark" href="{{url('/historia')}}" style="color: white;border-radius: 15px;">
                            Conheça mais
                        </a>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="">
                <center>
                    <div style="margin-left:130px;margin-top:70px;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators custom-carousel-indicator">
                            </ol>
                            <div class="carousel-inner" style="height:auto;   border-radius: 15px 15px 15px 15px;" role="listbox" >
                                <div class= "carousel-item active" style="height: 354px;width:364px; border: 2px solid #3399ff;border-radius: 15px 15px 15px 15px;background-image: url('{{url('/site2/images/roninho-dedo.jpg')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px; border: 2px solid #3399ff;border-radius: 15px 15px 15px 15px;background-image: url('{{url('/site2/images/roninho-sem-dedo.jpg')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;border: 2px solid #3399ff;border-radius: 15px 15px 15px 15px;background-image: url('{{url('/site2/images/roninho-dedo.jpg')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;border: 2px solid #3399ff;border-radius: 15px 15px 15px 15px;background-image: url('{{url('/site2/images/roninho-sem-dedo.jpg')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;border: 2px solid #3399ff;border-radius: 15px 15px 15px 15px;background-image: url('{{url('/site2/images/roninho-dedo.jpg')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;border: 2px solid #3399ff;border-radius: 15px 15px 15px 15px;background-image: url('{{url('/site2/images/roninho-sem-dedo.jpg')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <img src="{{url('/site2/images/foto-historia.png')}}" class="card-img-top" alt="..." style="width:350px;height:350px; margin-top: 70px;"> -->
                </center>
            </div>
        </div>
    </div>
</section>

<hr class="hr-section-divider">

<section class="page-section" id="projetos">
    <div class="container">
        <div class="row section-heading-row">
            <div class="col-lg-12">
            <span style="font-weight: bold; color: #3399ff; font-size: 44px; font-family: 'Segoe Script', 'Segoe UI', sans-serif;"> Projetos</span>
                <!-- <h2 class="section-heading text-uppercase float-left">Projetos</h2> -->
                <a href="{{url('/projetos')}}">
                    <h6 class="section-heading-right text-uppercase float-right">Mais Projetos <i class="fas fa-th"></i></h6>
                </a>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme owl-img-responsive container">
        @if(!empty($projetos[0]))
            @foreach($projetos as $projeto)
                <a href="{{url('/projetos')}}/{{$projeto->id}}">
                    <div class="item">
                        <div class="card card-hover" style="align-items: center; background-color: #3399ff; height: 350px;">
                            <img src="{{url('/uploads')}}/{{$projeto->image}}" class="card-img-top" alt="..." style="width:272px;height:219px; margin-top: 7px;">
                            <div class="card-body" style="padding-bottom: 10px;">
                                <p class="card-text" style="text-align:center;width:250px; color: white; text-transform: uppercase">{{$projeto->name}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <div class="item">
                <!-- <div class="card">
                    <img src="https://via.placeholder.com/130" class="card-img-top" alt="...">
                    <div class="card-body" style="padding-bottom: 10px;">
                        <p class="card-text">Nenhum projeto encontrado.</p>
                    </div>
                </div> -->
                <div class="card card-hover" style="align-items: center; background-color: #3399ff; height: 350px;">
                    <img src="https://via.placeholder.com/130" class="card-img-top" alt="..." style="width:272px;height:219px; margin-top: 7px;">
                    <div class="card-body" style="padding-bottom: 10px;">
                        <p class="card-text" style="text-align:center;width:250px; color: white; text-transform: uppercase">Nenhum projeto encontrado.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>

@endsection
