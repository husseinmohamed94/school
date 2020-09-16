@extends('dashboard.app')
@section('content')

<div class="container">
     
            <form  action="{{route('Teacher.store')}}" method="POSt" enctype="multipart/form-data">
            <div class="row">
            @csrf
    
          <div class="col-lg-4">
                 <label > اسم المدرس</label>
                <input type="text" name="name_ar" class="form-control" >
                  @error('name_ar')
                 <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
          </div>

          <div class="col-lg-4 ">
                <label >  اسم بانجلزي</label>
               <input type="text" name="name_en" class="form-control" >
                  @error('name_en')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
          </div>

          <div class="col-lg-4 ">
                <label >    جامعه اسم</label>
               <input type="text" name="University_ar" class="form-control" >
                  @error('University_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
           </div>

           <div class="col-lg-4 ">
                <label >    انجلز جامعه اسم</label>
               <input type="text" name="University_en" class="form-control" >
                  @error('University_en')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
           </div>

           <div class="col-lg-4 ">
                <label >  بعربي المؤهل</label>
               <input type="text" name="qualification_ar" class="form-control" >
                  @error('qualification_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>
            <div class="col-lg-4 ">
                <label >  بنحلز المؤهل</label>
               <input type="text" name="qualification_en" class="form-control" >
                  @error('qualification_en')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>

            <div class="col-lg-4 ">
                <label >  بالعربي التخيصص</label>
               <input type="text" name="Customization_ar" class="form-control" >
                  @error('Customization_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
           </div>
           <div class="col-lg-4 ">
                <label >    بالنجلز التخيصص</label>
               <input type="text" name="Customization_en" class="form-control" >
                  @error('Customization_en')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
           </div>
          

           <div class="col-lg-4 ">
                <label >   سنه التخرج</label>
               <input type="date" name="GraduationYear" class="form-control" >
                  @error('GraduationYear')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
           </div>

         

             <div class="form-check">
                    <label  for="Gender">Gender: </label> 
                    <input type="radio" name="Gender"  >
                    <label  for="">Male  </label> 
                    <input  type="radio" name="Gender">
                    <label  for="">female  </label>        

               </div>
          

            <div class="col-lg-12 ">
                <input type="file" class="form-control-file" name="photo">
                                  @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
           </div>
            <button class="btn btn-primary btn-block" type="submit">{{__('row.save')}}</button>
        
          </form>
      </div>
</div>

@endsection