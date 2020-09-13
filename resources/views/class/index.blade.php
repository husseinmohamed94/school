@extends('dashboard.app')
@section('content')
  <div class="container"> 
        <div class="clearfix ">
        <a href="{{route('class.create')}}" class="btn btn-success float-right">{{__('class.add-class')}}</a>
        </div>

        <div class="card card-default text-center">
            <div class="card-header">{{__('class.all')}}</div>
              <div class="card-body">
                  @if(count($classes) > 0 )
                 
                  <table class="table"> 
                            <thead>
                            <th>   
                                <td>{{__('class.name')}} </td>

                            </th>
                            </thead>
                           <tbody>      
                           @foreach($classes as $class) 
                        
                              <tr>
                              <td>
                              <a href="{{route('class.delete',$class->id)}}" class="btn btn-primary btn-sm ml-2 float-right">{{__('row.Delete')}}</a>
                              <a href="{{route('class.edit',$class->id)}}" class="btn btn-primary btn-sm float-right">{{__('row.edit')}}</a>
                            </td>
                                  <td> {{$class->name}} </td>
                                 
                                  
                             
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