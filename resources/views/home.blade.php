@extends('layouts.app')

@section('content')
  

<!-- start carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner imags">
    @foreach($sliders as $slider)

      <div class="carousel-item @if($loop->first)active @endif">
      <img src="{{asset('/imgase/slider/'.$slider->photo)}}" class="d-block w-100" alt="...">
      
        <div class="carousel-caption">
            <h1 style="  text-shadow: 1px 1px #000; color: #0000;font-family: 'Kalam', cursive;">{{$slider->title}}</h1>
           <p style="background: rgba(200, 200,200, 0.3);border-radius: 7px;"> {{$slider->details}}</p>
        </div>

      </div>
   
    
      @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--end carousel-->

@endsection
