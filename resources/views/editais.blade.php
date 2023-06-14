@extends('site-bar')

@section('content')
<br><br><br><br><br><br><br><br>

<!-- inicio do institucional -->
<div class="row">
	<div class="container">
        <div>
            <h1 style="color:#0B5FA7">Edital</h1>
        </div>
        <div id="accordion">
            @foreach($editais as $key => $edital)
                <div class="card">
                    <div class="card-header" id="heading{{$key}}">
                    <h5 class="mb-0">
                        @if($key == 0)
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                {{$edital->name}}
                            </button>
                        @else
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                                {{$edital->name}}
                            </button>
                        @endif
                    </h5>
                    </div>

                    @if($key == 0)
                        <div id="collapse{{$key}}" class="collapse show" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                    @else
                        <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                    @endif
                    <div class="card-body">
                        {!!$edital->description!!}
                        <br>
                        <a href="{{url('/uploads')}}/{{$edital->archive}}" target="_blank">{{$edital->name}}</a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
	</div>
</div>
<!-- fim do institucional -->

@endsection