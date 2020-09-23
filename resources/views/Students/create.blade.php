@extends('dashboard.app')
@section('title','studen')

@section('content')

<div class="container">
    <form  action="{{route('studen.store')}}" method="POSt">
    @csrf
       <div class="row">
          <div class="col-md-6 ">
                      <label for="validationDefault01"> {{__('student.name_ar')}}</label>
                      <input type="text" name="name_ar" class="form-control"  value="{{old('name_ar')}}" >
                      @error('name_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>

          <div class="col-md-6">
              <label for="validationDefault01"> {{__('student.name_en')}}</label>
              <input type="text" name="name_en" class="form-control" value="{{old('name_en')}}" >
              @error('name_en')
            <div class="alert alert-danger">{{ $message }}</div>
             @enderror
           </div>

          <div class="col-md-6">
              <label for="validationDefault01">  {{__('student.email')}}</label>
              <input type="text" name="email" class="form-control" value="{{old('email')}}"  >
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           </div>
          
          <div class="col-md-6 ">
              <label for="validationDefault01">  {{__('student.mobile')}}</label>
              <input type="text" name="mobile" class="form-control" value="{{old('Customization_ar')}}"  >
              @error('mobile')
            <div class="alert alert-danger">{{ $message }}</div>
              @enderror
           </div>

          <div class="col-md-6">
                  <label for="validationDefault02">  {{__('student.Mothername_ar')}}</label>
                  <input type="text" class="form-control" name="Mothername_ar" value="{{old('Mothername_ar')}}"  >
                  @error('Mothername_ar')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
      
        <div class="col-md-6 ">
             <label for="validationDefault02">  {{__('student.Mothername_en')}}</label>
             <input type="text" class="form-control" name="Mothername_en" value="{{old('Mothername_en')}}" >
              @error('Mothername_en')
             <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div>
          <div class="col-md-6">
              <label for="validationDefault02"> {{__('student.Address_ar')}} </label>
              <input type="text" class="form-control" name="Address_ar" value="{{old('Address_ar')}}"   >
              @error('Address_ar')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
          </div>

         

          <div class="col-md-6 ">
              <label for="validationDefault02"> {{__('student.Address_en')}}</label>
              <input type="text" class="form-control" name="Address_en" value="{{old('Address_en')}}">
              @error('Address_en')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror
          </div>

 
          <div class="col-md-6">
              <label for="validationDefault02"> {{__('student.row')}} </label>
              <select name="row_id" id="row"  class="form-control rowclass">
             @foreach($rows as $row)
             <option value="{{$row->id}}">{{$row-> name}}</option>
             @endforeach
             </select>

              @error('student_id')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
          </div>

 
        


                <div class="form-check col-md-12">
                          <label  for="Gender">Gender: </label> 
                          <input type="radio" name="Gender"  value="Male" >
                          <label  for="">Male  </label> 
                          <input  type="radio" name="Gender" value="female">
                          <label  for="">female  </label>        

                </div>

          <button class="btn btn-primary" type="submit">save</button>








       </div>
</form>

</div>


<script>
/*
$(document).ready(function(){
 
$(#row).on('change',function(){
  //  console.log("html its change");
var class_id=$(this).val();
//console.log(class_id);
$('#class').empty();
$('#class').append('<option value="0"></option>');
  $.ajax({
    type:'get',
    url:'findclass/'+ class_id,
    data:{'id':class_id},
    success:function(response){
     var response =JSON.parse(response);
     console.log(response);
     $('#class').empty();
$('#class').append('<option value="0"></option>');
response.forEach(element=>{
  $('#class').append('<option value="${element['id']}">${element['name']}</option>');

});
   
  });

  });
  
  
  
  
});
*/
</script>


@endsection