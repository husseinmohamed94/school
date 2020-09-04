@extends('layouts.app')
@section('content')

<div class="container">
<form  action="{{route('studen.store')}}" method="POSt">
@csrf
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> name studen</label>
      <input type="text" name="name" class="form-control" >
      @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> email</label>
      <input type="text" name="email" class="form-control" >
      @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> mobile</label>
      <input type="text" name="mobile" class="form-control" >
      @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02"> Mother's nam</label>
      <input type="text" class="form-control" name="Mothername" >
      @error('Mothername')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
  </div>
 
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Address</label>
      <input type="text" class="form-control" name="Address" >
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

    <button class="btn btn-primary" type="submit">save</button>
</form>

   </div>

  </div>


  
</div>

@endsection