@extends('layouts.app')
@section('content')
<div class="container">
  <a href="/posts" class="btn btn-primary">Go Back</a>

<h1>Create your profile</h1>
{!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
{{-- <div class="form-row"> --}}
  <div class="form-group col-md-6">
   {{-- Starts with the label (first is the label name associated with the second parameter(displayed on the screen)) Then the
    // text has the text name associated with what will be entered in the second parameter (empty because user must provide),
     // then the third is the attribute of that text or textarea etc using bootstrap --}} 
     {{Form::label('title','Job Name')}} 
     {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Job Name'])}}
  </div>
 <div class="form-group col-md-6">
  {{Form::label('quotation_price',' Job quotation price(KSH) per HR')}} 
  {{Form::text('quotation_price', '', ['class'=>'form-control ', 'placeholder'=>'Job quotation price e.g 200-300ksh'])}}
</div>


<div class="form-group col-md-6">
  {{Form::label('location','My Location')}} 
  {{Form::text('location', '', ['class'=>'form-control ', 'placeholder'=>'My Location'])}}
</div>
<div class="form-group col-md-6">
  {{Form::label('phone_number','My Phone Number ')}} {{Form::text('phone_number', '', ['class'=>'form-control ', 'placeholder'=>' e.g 254...','maxlength'=>'12'])}}
</div>
<div class="form-group">
  {{Form::label('photo_image','photo:')}} 
  {{Form::file('cover_image')}}
</div>
 <div class="form-group">
    {{Form::label('body','Job Description')}} 
    {{Form::textarea('body', '', [ 'id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Job Description'])}}
  </div>

    
  

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}} {!! Form::close() !!}

{!! Form::close() !!}
</div>
@endsection