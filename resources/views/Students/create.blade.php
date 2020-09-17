@extends('dashboard.app')
@section('title','studen')

@section('content')

<div class="container">
<form  action="{{route('studen.store')}}" method="POSt">
@csrf
  <div class="form-row">
  
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> {{__('student.name_ar')}}</label>
      <input type="text" name="name_ar" class="form-control" >
      @error('name_ar')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationDefault01"> {{__('student.name_en')}}</label>
      <input type="text" name="name_en" class="form-control" >
      @error('name_en')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">  {{__('student.email')}}</label>
      <input type="text" name="email" class="form-control" >
      @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">  {{__('student.mobile')}}</label>
      <input type="text" name="mobile" class="form-control" >
      @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">  {{__('student.Mothername_ar')}}</label>
      <input type="text" class="form-control" name="Mothername_ar" >
      @error('Mothername_ar')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
 
  <div class="col-md-6 mb-3">
      <label for="validationDefault02">  {{__('student.Mothername_en')}}</label>
      <input type="text" class="form-control" name="Mothername_en" >
      @error('Mothername_en')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div>
  
   
    <div class="col-md-6 mb-3">
        <label for="validationDefault02"> {{__('student.Address_ar')}} </label>
        <input type="text" class="form-control" name="Address_ar"  >
        @error('Address_ar')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      
    </div>

    
    <div class="col-md-6 mb-3">
        <label for="validationDefault02"> {{__('student.Address_en')}}</label>
        <input type="text" class="form-control" name="Address_en">
        @error('Address_en')
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

    <button class="btn btn-primary" type="submit">save</button>

    </div>

</form>

   

  
</div>

@endsection