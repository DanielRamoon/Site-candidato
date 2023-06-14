@extends('site-bar')

@section('content')
<br><br><br><br><br><br><br><br>

        <!-- inicio do institucional -->
        <div class="row">
	<div class="container">
        <div>
            <h1 style="color:#EC363B">{{$noticia->name}}</h1>
        </div>
        <div>
            <img src="{{url('/uploads')}}/{{$noticia->image}}" style="width:400px;height:400px;float:left; margin:0 15px 10px 0;"/>
            <p style="text-align: justify;">
                {!!$noticia->description!!}
            </p>
            <p>
                <a href="{{url('/uploads')}}/{{$noticia->doc}}" download="{{$noticia->name}}">
                    Baixar documento clicando aqui
                </a>
            </p>
        </div>
	</div>
</div>
<!-- fim do institucional -->

@endsection
