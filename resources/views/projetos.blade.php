@extends('site-bar')

@section('content')

<section class="page-section" id="projetos">
    <div class="container">
        <div class="row section-heading-row">
            <div class="col-lg-12" style="margin-bottom: 20px;">
                <img src="{{url('/site2/images/tit-projteos.png')}}">
                <!-- <h2 class="section-heading text-uppercase float-left">Projetos</h2> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        @if(!empty($projetos[0]))
            @foreach($projetos as $projeto)
                <div class="col-md-4" style="margin-bottom: 30px;">
                    <a href="{{url('/projetos')}}/{{$projeto->id}}">
                        <div class="item">
                            <div class="card card-hover" style="align-items: center; background-color: #EC363B; height: 350px;">
                                <div>
                                    <center>
                                        <img src="{{url('/uploads')}}/{{$projeto->image}}" class="card-img-top" alt="..." style="width:325px;height:219px; margin-top: 7px;">
                                    </center>
                                </div>
                                <div class="card-body" style="padding-bottom: 10px;">
                                    <center>
                                        <p class="card-text" style="text-align:center; color: white; text-transform: uppercase; font-size: 14px;">
                                            {{$projeto->name}}
                                        </p>
                                    </center>
                                </div>
                                <div>
                                    <center>
                                        <div style="margin-top: 25px;">
                                            <a class="btn btn-dark" href="{{url('/projetos')}}/{{$projeto->id}}" style="color: white;border-radius: 0px;">
                                                SAIBA MAIS
                                            </a>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            <div class="col-md-4" style="margin-bottom: 30px;">
                <a>
                    <div class="item">
                        <div class="card card-hover" style="align-items: center; background-color: #EC363B; height: 350px;">
                            <div>
                                <center>
                                    <img src="https://via.placeholder.com/130" class="card-img-top" alt="..." style="width:325px;height:219px; margin-top: 7px;">
                                </center>
                            </div>
                            <div class="card-body" style="padding-bottom: 10px;">
                                <center>
                                    <p class="card-text" style="text-align:center; color: white; text-transform: uppercase; font-size: 14px;">
                                        Nenhum projeto encontrado.
                                    </p>
                                </center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif
        </div>
    </div>

</section>

@endsection
