@extends('site-bar')

@section('content')

<section class="page-section" id="projetos">
    <div class="container">
        <div class="row section-heading-row">
            <div class="col-lg-12" style="margin-bottom: 20px;">
                <img src="{{url('/site2/images/tit-acoes.png')}}">
                <!-- <h2 class="section-heading text-uppercase float-left">NOSSAS AÇÕES</h2> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row section-heading-row">
        @if(!empty($acoes[0]))
            @foreach($acoes as $acao)
                <div class="col-lg-6">
                    <img src="{{url('/uploads')}}/{{$acao->image}}" class="card-img-top" alt="..." style="height: 350px;">
                    <center>
                        <div style="margin-top: -20px;">
                            <a class="btn btn-dark btn-lg" href="{{url('/acoes')}}/{{$acao->id}}" style="color: white;border-radius: 15px;">
                                {{$acao->name}}
                            </a>
                        </div>
                    </center>
                </div>
            @endforeach
        @else
            <div class="col-lg-6" style="margin-bottom:30px;">
                <img src="https://via.placeholder.com/130" class="card-img-top" alt="..." style="height: 350px;">
                <center>
                    <div style="margin-top: -20px;">
                        <a class="btn btn-dark btn-lg" style="color: white;border-radius: 15px;">
                            Nenhuma ação encontrada
                        </a>
                    </div>
                </center>
            </div>
        @endif
        </div>
    </div>

</section>

@endsection
