@extends('dashboard.app')
@section('title','Rows')

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
                                  @if(count($rows) > 0 )
                                  <table class="table"> 
                                            <thead>
                                            <tr> 
                                                <td>{{__('row.name')}}</td>
                                            </tr>
                                            </thead>
                                          <tbody>      
                                              @foreach($rows as $Row) 
                                                  <tr>
                                                      <td> {{$Row->name}} </td>                                
                                                    <td>
                                                  <a href="{{route('Rows.delete',$Row->id)}}" class="btn btn-primary btn-sm ml-2 float-right">{{__('row.Delete')}}</a>
                                                  <a href="{{route('Rows.edit',$Row->id)}}" class="btn btn-primary btn-sm float-right">{{__('row.edit')}}</a>
                                                  <a href="{{route('Rows.show',$Row->id)}}" class="btn btn-success">عرض الفصول</a>
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
@endsection


@section('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  @endsection
