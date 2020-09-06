@extends('layouts.app')
@section('content')

<div class="container">
<form  action="{{route('Rows.store')}}" method="POSt">
@csrf
  <div class="form-row">
  
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> {{__('row.name_ar')}}</label>
      <input type="text" name="name_ar" class="form-control" >
      @error('name_ar')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> {{__('row.name_en')}}</label>
      <input type="text" name="name_en" class="form-control" >
      @error('name_en')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
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