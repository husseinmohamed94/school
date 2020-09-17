@extends('dashboard.app')
@section('title','slider')

@section('content')

<div class="container text-center">
        <form  action="{{route('slider.store')}}" method="POSt" enctype="multipart/form-data">
         @csrf
                        @if(Session::has('success'))
                                <div class="alert alert-warning alert-success fade show text-center"  role="alert">
                                <strong> {{Session::get('success')}}</strong>   
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                        @endif
                <div class="row">
        
                         <div class="col-sm-12 ">
                                <label > حمل صوره </label>

                                <input type="file" class="form-control-file" name="photo">
                                                @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                         <div class="col-sm-12">
                                <label > عنوان </label>
                                <input type="text" name="title" class="form-control" value="{{old('name_ar')}}" >
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="col-sm-12">
                                <label > التفاصيل </label><br>

                         <textarea name="details" id="" cols="100" rows="20"></textarea>
                                @error('details')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                                  <button class="btn btn-primary btn-block" type="submit">{{__('row.save')}}</button>

                 </div>

        </form>

        

        
 </div>

 @endsection