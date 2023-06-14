@extends('site-bar')

@section('content')
<br><br><br><br><br><br><br><br>

<section class="page-section" id="todas-noticias">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading text-uppercase float-left">Galeria {{$multimidia->name}}</h2>
            </div>
            <div class="col-lg-12">
                <p class="section-heading text-uppercase float-left">Galeria {{$multimidia->description}}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    @foreach($multimidia->imagens as $imagem)
                        <div class="item" style="margin-bottom:30px;margin-right:30px;">
                            <div class="card">
                                <img src="{{url('/uploads')}}/{{$imagem}}" class="card-img-top" alt="..." style="width:240px;">
                                
                            </div>
                        </div>
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
        </div>
    </div>
</section>

@endsection