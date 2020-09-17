@extends('dashboard.app')
@section('title','studen')

@section('content')
  <div class="container-fluid">
  <div class="row">
            <div class="col-lg-9">  
        <div class="clearfix ">
        <a href="{{route('student.create')}}" class="btn btn-success float-right">Add studen</a>
        </div>

        <div class="card card-default">
            <div class="card-header">All student</div>
              <div class="card-body">
                  @if(count($students) > 0 )
                 
                  <table class="table"> 
                            <thead>
                            <tr> 
                            
                                <td>{{__('student.name')}}</td>
                                <td>{{__('student.email')}}</td>
                                <td>{{__('student.mobile')}}</td>
                                <td>{{__('student.Mothername')}}</td>
                                <td>{{__('student.Address')}}</td>

                            </tr>
                            </thead>
                           <tbody>      
                           @foreach($students as $student) 
                              <tr>
                                  <td> {{$student->name}} </td>
                                  <td> {{$student->email}} </td>
                                  <td> {{$student->mobile}} </td>
                                  <td> {{$student->Mothername}} </td>
                                  <td> {{$student->adderss}} </td>
                                <td>
                              <a href="{{route('studen.delete',$student->id)}}" class="btn btn-primary btn-sm ml-2 float-right">{{__('student.Delete')}}</a>
                              <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary btn-sm float-right">{{__('student.edit')}}</a>
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
        </div>
@endsection