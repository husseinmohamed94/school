  @extends('layouts.app')
  @section('content')

  <div class="container">
  <form  action="{{route('studen.update',$student->id)}}" method="POSt">
  @csrf
    <div class="form-row">

      <div class="col-md-6 mb-3">
            <label for="validationDefault01">{{__('student.name_ar')}}</label>
            <input type="text" name="name_ar" class="form-control" value="{{$student->name_ar}}" >
            @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      
     
      <div class="col-md-6 mb-3">
        <label for="validationDefault01"> {{__('student.name_en')}}</label>
        <input type="text" name="name_en" class="form-control"  value="{{$student->name_en}}">
        @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      </div>
    

      <div class="col-md-6 mb-3">
        <label for="validationDefault01"> {{__('student.email')}}</label>
        <input type="text" name="email" class="form-control" value="{{$student->email}}" >
        @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      </div>
      
      <div class="col-md-6 mb-3">
        <label for="validationDefault01"> {{__('student.mobile')}}</label>
        <input type="text" name="mobile" class="form-control" value="{{$student->mobile}}" >
        @error('mobile')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationDefault02"> {{__('student.Mothername_ar')}}</label>
        <input type="text" class="form-control" name="Mothername_ar" value="{{$student->Mothername_ar}}" >
        @error('Mothername')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      
    </div>
  
    <div class="col-md-6 mb-3">
        <label for="validationDefault02"> {{__('student.Mothername_en')}}</label>
        <input type="text" class="form-control" name="Mothername_en" value="{{$student->Mothername_en}}" >
        @error('Mothername')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      
    </div>

    <div class="col-md-6 mb-3">
        <label for="validationDefault02"> {{__('student.Address_ar')}} </label>
        <input type="text" class="form-control" name="Address_ar" value="{{$student->Address_ar}}" >
        @error('Address_ar')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      
    </div>

    
    <div class="col-md-6 mb-3">
        <label for="validationDefault02"> {{__('student.Address_en')}}</label>
        <input type="text" class="form-control" name="Address_en" value="{{$student->Address_en}}">
        @error('Address_en')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      
    </div>
     
    <!-- 
 <div class="col-md-6 mb-3">
        <label for="validationDefault03">Address ar</label>
        <input type="text" class="form-control" name="Address_ar" value="{{$student->Address_ar}}" >
        @error('Address')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      
      <div>
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Address en</label>
        <input type="text" class="form-control" name="Address_en"  value="{{$student->Address_en}}">
        @error('Address')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      </div>
      
      
       <div class="form-check">
      <label  for="">Gender: </label> 
      <input type="radio" name="gender"  checked >
      <label  for="">Male  </label> 
      <input  type="radio" name="gender" >
      <label  for="">female  </label> 

      <div>-->

      <button class="btn btn-primary" type="submit">save</button>

      </div>
  </form>

   

   


    
  </div>

  @endsection