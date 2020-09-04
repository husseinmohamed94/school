@extends('layouts.app')
@section('content')

<div class="container">
<form  action="{{route('studen.update',$student->id)}}" method="POSt">
@csrf
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> name studen</label>
      <input type="text" name="name" class="form-control"  value  = {{$student->name}} >
      @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> email</label>
      <input type="text" name="email" class="form-control" value  = {{$student->email}} >
      @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> mobile</label>
      <input type="text" name="mobile" class="form-control"  value  = {{$student->mobile}}>
      @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02"> Mother's nam</label>
      <input type="text" class="form-control" name="Mothername" value  = {{$student->Mothername}} >
      @error('Mothername')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
  </div>
 
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Address</label>
      <input type="text" class="form-control" name="Address" value  = {{$student->Address}} >
      @error('Address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    
  
  <!--  <div class="form-check">
    <label  for="">Gender: </label> 
    <input type="radio" name="gender"  checked >
    <label  for="">Male  </label> 
    <input  type="radio" name="gender" >
    <label  for="">female  </label> 

    <div>-->

    <button class="btn btn-primary" type="submit">Update</button>
</form>

   </div>

  </div>


  
</div>

@endsection