  @extends('layouts.app')
  @section('content')

  <div class="container">
  <form  action="{{route('class.update',$classes->id)}}" method="POSt">
  @csrf
    <div class="form-row">

      <div class="col-md-6 mb-3">
            <label for="validationDefault01">{{__('row.name_ar')}}</label>
            <input type="text" name="name_ar" class="form-control" value="{{$classes->name_ar}}" >
            @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      
     
      <div class="col-md-6 mb-3">
        <label for="validationDefault01"> {{__('row.name_en')}}</label>
        <input type="text" name="name_en" class="form-control"  value="{{$classes->name_en}}">
        @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      </div>
    
      <select class="form-control" id="exampleFormControlSelect1" name="row_id"  >
    @foreach($rows as $row)
  
      <option value="{{$row->id}}">{{$row->name}}</option>
    
       @endforeach
    </select>
  </div>

    <!-- 
 <div class="col-md-6 mb-3">
        <label for="validationDefault03">Address ar</label>
        <input type="text" class="form-control" name="Address_ar"  >
        @error('Address')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      
      <div>
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Address en</label>
        <input type="text" class="form-control" name="Address_en" >
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