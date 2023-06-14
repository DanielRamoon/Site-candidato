@extends('site-bar')

@section('content')
<section class="page-section" id="multimidia">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row section-heading-row">
                    <div class="col-lg-12" style="margin-bottom: 20px;">
                        <img src="{{url('/site2/images/tit-historia.png')}}">

                        <!-- <h2 class="section-heading text-uppercase float-left">MINHA</h2> -->
                    </div>
                    <!-- <div class="col-lg-12" style="margin-top: -25px;">
                        <h2 class="section-heading text-uppercase float-left">HISTÓRIA</h2>
                    </div> -->
                    <div class="col-lg-12">
                        @if($historia && $historia->description)
                        <p style="text-align: justify;">{!!$historia->description!!}</p>
                        @else
                        <p style="text-align: justify;">Nenhuma informação cadastrada.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="">
                <center>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators custom-carousel-indicator">
                            </ol>
                            <div class="carousel-inner" style="height:auto;" role="listbox" >
                                <div class="carousel-item active" style="height: 354px;width:364px;background-image: url('{{url('/site2/images/foto-historia.png')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;background-image: url('{{url('/site2/images/ft01.png')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;background-image: url('{{url('/site2/images/ft02.png')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;background-image: url('{{url('/site2/images/ft03.png')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;background-image: url('{{url('/site2/images/ft04.png')}}">
                                    <div class="carousel-caption custom-carousel-caption">
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 354px;width:364px;background-image: url('{{url('/site2/images/ft05.png')}}">
                                    <div class="carousel-caption custom-carousel-caption">
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

@endsection
