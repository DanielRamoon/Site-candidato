@extends('site-bar')

@section('content')

        <!-- inicio do institucional -->
        <div class="row">
	<div class="container">
        <div>
            <h1 style="color:#EC363B">{{$projeto->name}}</h1>
        </div>
        <div>
            <img src="{{url('/uploads')}}/{{$projeto->image}}" style="width:400px;height:400px;float:left; margin:0 15px 10px 0;"/>
            <p style="text-align: justify;">
                {!!$projeto->description!!}
            </p>
            <p>
                <a href="{{url('/uploads')}}/{{$projeto->doc}}" download="{{$projeto->name}}">
                    Baixar documento clicando aqui
                </a>
            </p>
        </div>
	</div>
</div>
<!-- fim do institucional -->

@endsection
