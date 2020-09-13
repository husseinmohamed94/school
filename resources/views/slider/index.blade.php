@extends('dashboard.app')
@section('content')
  <div class="container"> 
      <div class="row">
            <div class="col-lg-9"> 
                    <div class="clearfix ">
                    <a href="{{route('Rows.create')}}" class="btn btn-success float-right">Add studen</a>
                    </div>
                  <div class="card card-default">
                        <div class="card-header">{{__('row.all')}}</div>
                             <div class="card-body">
                                  @if(count($sliders) > 0 )
                                  <table class="table"> 
                                            <thead>
                                            <tr> 
                                                <td>{{__('row.name')}}</td>
                                            </tr>
                                            </thead>
                                          <tbody>      
                                              @foreach($sliders as $slider) 
                                                  <tr>
                                                      <td><img src="{{asset('/imgase/slider/'.$slider->name)}}" alt=""  style="width: 85px;height: 60px;"> </td>                                
                                                    <td>
                                                  <a href="{{route('Rows.delete',$slider->id)}}" class="btn btn-primary btn-sm ml-2 float-right">{{__('row.Delete')}}</a>
                                                  <a href="{{route('Rows.edit',$slider->id)}}" class="btn btn-primary btn-sm float-right">{{__('row.edit')}}</a>
                                                  <a href="{{route('Rows.show',$slider->id)}}" class="btn btn-success">عرض الفصول</a>
                                                </td>
                                                </tr>
                                            @endforeach          
                                          </tbody>
                                  </table>
                                    @else
                                    <div class="text-center"> NO Student</div>
                                    @endif  
                              </div>    
             </div>
      </div>
  </div>

  @foreach($sliders as $slider) 

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{asset('/imgase/slider/'.$slider->name)}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="/school/public/imgase/slider/1600025292.png" class="d-block w-100" alt="...">
    </div>
   
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
@endforeach    

@endsection


@section('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  @endsection




  <!--


  
  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach($sliders as $slider) 
    <div class="carousel-item active">
      <img src="{{asset('/imgase/slider/'.$slider->name)}}" class="d-block w-100" alt="...">
    </div>
  
    
    
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
@endforeach    


-->