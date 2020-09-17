@extends('dashboard.app')
@section('title','slider')

@section('content')
  <div class="container-fluid"> 
      <div class="row">
            <div class="col-lg-9"> 
                    <div class="clearfix ">
                    <a href="{{route('slider.create')}}" class="btn btn-success float-right">Add studen</a>
                    </div>
                  <div class="card card-default">
                        <div class="card-header">{{__('row.all')}}</div>
                             <div class="card-body">
                                  @if(count($sliders) > 0 )
                                  <table class="table"> 
                                            <thead>
                                            <tr> 
                                                <td>{{__('slider.photo')}}</td>
                                                <td>{{__('slider.title')}}</td>
                                                <td>{{__('slider.details')}}</td>
                                            </tr>
                                            </thead>
                                          <tbody>      
                                              @foreach($sliders as $slider) 
                                                  <tr>
                                                      <td><img src="{{asset('/imgase/slider/'.$slider->photo)}}" alt=""  style="width: 85px;height: 60px;"> </td>                                
                                                      <td>{{$slider->title}} </td>                                
                                                      <td> {{$slider->details}}</td>                                

                                                      <td>
                                                  <a href="{{route('Rows.delete',$slider->id)}}" class="btn btn-primary btn-sm ml-2 float-right">{{__('row.Delete')}}</a>
                                                  <a href="{{route('Rows.edit',$slider->id)}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-edit">{{__('row.edit')}}</i></a>
                                                </td>
                                                </tr>
                                            @endforeach          
                                          </tbody>
                                  </table>
                                    @else
                                    <div class="text-center"> slider</div>
                                    @endif  
                              </div>    
                    </div>
            </div>
     </div>





<!-- start carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 1px;">
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





