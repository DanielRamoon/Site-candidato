@extends('site-bar')

@section('content')

<section class="page-section" id="projetos">
    <div id="lightbox"></div>
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
        @foreach($galery as $key => $image)
            <div class="col-lg-6">
                <img src="{{url('/uploads')}}/{{$image}}" onclick="openModal();currentSlide({{$key+1}})" class="card-img-top hover-shadow" alt="..." style="height: 350px;">
            </div>
        @endforeach
        </div>
    </div>

    <!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    @foreach($galery as $key => $image)
        <div class="mySlides">
            <div class="numbertext">{{$key}}</div>
            <img src="{{url('/uploads')}}/{{$image}}" style="width:100%">
        </div>
    @endforeach

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->

        <div class="column">
    @foreach($galery as $key => $image)
            <img class="demo" src="{{url('/uploads')}}/{{$image}}" onclick="currentSlide({{$key}})" style="width:10%">
    @endforeach
        </div>
  </div>
</div>

</section>

@endsection
