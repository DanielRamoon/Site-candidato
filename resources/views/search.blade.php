@extends('site-bar')

@section('content')
<section class="page-section" id="multimidia" style="padding: 0 0;">
    <div class="container">
        <div class="row">
        @if(!empty($obj[0]))
            @foreach($obj as $key => $value)
                <div class="col-md-12" style="margin-top:20px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$value->category}} - {{$value->name}}</h5>
                            <p class="card-text">{!!mb_strimwidth($value->description, 0, 70, "...")!!}</p>
                            <a href="{{$value->url}}" class="btn btn-primary">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12" style="margin-top:20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Não encontramos nada : (</h5>
                        <p class="card-text">Nenhum item correspondeu a sua pesquisa</p>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>
</section>

@endsection
