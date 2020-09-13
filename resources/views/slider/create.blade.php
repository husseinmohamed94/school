@extends('dashboard.app')
@section('content')

<div class="container">
<form  action="{{route('slider.store')}}" method="POSt" enctype="multipart/form-data">
@csrf
  <div class="form-row">
  
 <div class="input-group is-invalid">
    <div class="custom-file">
      <input type="file" name="name" class="custom-file-input" id="validatedInputGroupCustomFile"  multiple required>
      <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose </label>
    </div>

  <!--  <div class="form-check">
    <label  for="">Gender: </label> 
    <input type="radio" name="gender"  checked >
    <label  for="">Male  </label> 
    <input  type="radio" name="gender" >
    <label  for="">female  </label> 

    <div> -->

    <button class="btn btn-primary" type="submit">{{__('row.save')}}</button>

    </div>

</form>

   

  
</div>

@endsection