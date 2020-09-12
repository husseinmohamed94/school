@extends('dashboard.app')

@section('content')
<div class="container-fluid meun" >
<div class="btn-group-vertical w-25" role="group" aria-label="Button group with nested dropdown">
  <a href="{{route('student.index')}}" type="button" class="btn btn-secondary btn-lg">{{__('student.student')}}</a>
  <a href="{{route('Rows.index')}}"  type="button" class="btn btn-secondary btn-lg">Roews</a>
  <a href="{{route('class.index')}}"  type="button" class="btn btn-secondary btn-lg">class</a>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown
    </button>
    <div class="dropdown-menu btn btn-secondary btn-lg" aria-labelledby="btnGroupDrop1">
    
      <a class="dropdown-item btn btn-secondary btn-lg" href="#">Dropdown link</a>
      <a class="dropdown-item btn btn-secondary btn-lg" href="#">Dropdown link</a>
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
