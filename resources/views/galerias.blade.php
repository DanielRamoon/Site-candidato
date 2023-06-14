@extends('site-bar')

@section('content')
<br><br><br><br><br><br><br><br>

<section class="page-section" id="todas-noticias">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading text-uppercase float-left">Galeria Fotos</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(!empty($multimidias[0]))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            @foreach($multimidias as $multimidia)
                                <a href="{{url('/galeria/show')}}/{{$multimidia->id}}">
                                    <div class="item" style="margin-bottom:30px;margin-right:30px;">
                                        <div class="card">
                                            <img src="{{url('/uploads')}}/{{$multimidia->capa}}" class="card-img-top" alt="..." style="width:240px;">
                                            <div class="card-body" style="padding-bottom: 10px;">
                                                <p class="card-text" style="text-align:center;">{{$multimidia->name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="paginacao-links">

                                </div>
                            </div>
                        </div>
                        <br>
                        <br> -->
                    </div>
            @else
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="item">
                            <div class="card">
                                <img src="https://via.placeholder.com/130" class="card-img-top" alt="...">
                                <div class="card-body" style="padding-bottom: 10px;">
                                    <p class="card-text">Nenhuma imagem encontrada.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="paginacao-links">

                            </div>
                        </div>
                    </div>
                    <br>
                    <br> -->
                </div>
            @endif
        </div>
    </div>
</section>

<section class="page-section" id="todas-noticias">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading text-uppercase float-left">Galeria Vídeos</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="item">
                            <div class="card">
                                <img src="https://via.placeholder.com/130" class="card-img-top" alt="...">
                                <div class="card-body" style="padding-bottom: 10px;">
                                    <p class="card-text">Nenhum vídeo encontrado.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="paginacao-links">

                            </div>
                        </div>
                    </div>
                    <br>
                    <br> -->
                </div>
        </div>
    </div>
</section>

@endsection