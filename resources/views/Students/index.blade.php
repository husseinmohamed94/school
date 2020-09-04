@extends('layouts.app')
@section('content')
  <div class="container"> 
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
                                <td>name</td>
                                <td>email</td>
                                <td>mobile</td>
                                <td>Mothername</td>
                                <td>Address</td>
                            </tr>
                            </thead>
                           <tbody>      
                           @foreach($students as $student) 
                              <tr>
                                  <td> {{$student->name}} </td>
                                  <td> {{$student->email}} </td>
                                  <td> {{$student->mobile}} </td>
                                  <td> {{$student->Mothername}} </td>
                                  <td> {{$student->Address}} </td>
                                <td>
                              <a href="{{route('studen.delete',$student->id)}}" class="btn btn-primary btn-sm ml-2 float-right">Delete</a>
                              <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary btn-sm float-right">edit</a>
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
@endsection