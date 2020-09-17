@extends('dashboard.app')
@section('title','teacher')

@section('content')
    <div class="container-fluid"> 
            <div class="row">
                <div class="col-lg-12">
                @if(Session::has('success'))
                           <div class="alert alert-warning alert-success fade show text-center"  role="alert">
                              <strong> {{Session::get('success')}}</strong>   
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                @endif



                <table class="table table-striped table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">photo</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">mobile</th>
                            <th scope="col">University</th>
                            <th scope="col">qualification</th>
                            <th scope="col">Customization</th>
                            <th scope="col">GraduationYear</th>
                            <th scope="col">Gender</th>
                            <th scope="">control</th>

                          </tr>
                        </thead>
                        @foreach($teachers as $teacher)
                          <tbody>
                          
                            <tr>
                              <th scope="row">{{$teacher->id}}</th>
                              <td><img src="{{asset('/imgase/teacher/'. $teacher->photo)}}"  class="d-block w-50" alt=""></td>
                              <td>{{$teacher->name}}</td>
                              <td>{{$teacher->email}}</td>
                              <td>{{$teacher->mobile}}</td>
                              <td>{{$teacher->University}}</td>
                              <td>{{$teacher->qualification}}</td>
                              <td>{{$teacher->Customization}}</td>
                              <td>{{$teacher->GraduationYear}}</td>
                              <td>{{$teacher->Gender}}</td>
                              <td>
                              <a href="{{route('studen.delete',$teacher->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                              <a href="{{route('studen.delete',$teacher->id)}}" class="btn btn-danger"><i class="fa fa-edit"></i></a>
                              </td>

                             

                            </tr>
                            @endforeach

                         </tbody>

                </table>















                </div>   
            </div>
     </div>


@endsection










@section('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  @endsection

