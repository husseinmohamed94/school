@extends('dashboard.app')
@section('content')
  <div class="container"> 
        <div class="clearfix ">
        <a href="{{route('class.create')}}" class="btn btn-success float-right">Add studen</a>
        </div>

        <div class="card card-default">
            <div class="card-header">{{__('row.all')}}</div>
              <div class="card-body">
                  @if(isset($classes) && count($classes) > 0)
                 
                  <table class="table"> 
                            <thead>
                            <tr> 
                            
                                <td>{{__('row.name')}}</td>
                                

                            </tr>
                            </thead>
                           <tbody>      
                           @foreach($classes as $class) 
                              <tr>
                                  <td> {{$class->name_ar}} </td>
                                 <td>
                                  <a href="{{route('class.delete',$class->id)}}" class="btn btn-primary btn-sm ml-2 float-right">{{__('row.Delete')}}</a>
                                  <a href="{{route('class.edit',$class->id)}}" class="btn btn-primary btn-sm float-right">{{__('row.edit')}}</a>

                                 </td>
                            </tr>
                        @endforeach
                      
                      </tbody>
                  </table>
                    @else
                    <div class="text-center"> NO class</div>
                    @endif
                      
             </div>    
        </div>
        </div>
@endsection