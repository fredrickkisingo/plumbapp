@extends('layouts.app')
@section('content')
<div class="container">
  <a href="/posts" class="btn btn-primary">Go Back</a>

<h1 style="color:blue">Edit your profile</h1>
{!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}

      <div class="form-group col-md-6">
     {{-- Starts with the label (first is the label name associated with the second parameter(displayed on the screen)) Then the
        // text has the text name associated with what will be entered in the second parameter (empty because user must provide),
        // then the third is the attribute of that text or textarea etc using bootstrap --}} 
        {{Form::label('title','Job Name')}} 
        {{Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'Job Name'])}}
      </div>
      <div class="form-group col-md-6">
        {{Form::label('quotation_price','Price (KSH)')}} 
        {{Form::text('quotation_price', $post->quotation_price, ['class'=>'form-control ', 'placeholder'=>'Price (KSH)'])}}
      </div>
       <div class="form-group col-md-6">
        {{Form::label('location','My Location')}} 
        {{Form::text('location', $post->location, ['class'=>'form-control ', 'placeholder'=>'My Location'])}}
      </div>
      <div class="form-group col-md-6">
          {{Form::label('phone_number','My Phone Number')}} 
          {{Form::text('phone_number', $post->phone_number, ['class'=>'form-control ', 'placeholder'=>'Phone Number','maxlength'=>'13'])}}
      </div>
    <div class="form-group">
      {{Form::label('body','Job Description')}} 
      {{Form::textarea('body', $post->body, [ 'id'=> 'article-ckeditor','class'=>'form-control',
      'placeholder'=>'Job Description'])}}
    </div>
    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>

{{Form::hidden('_method','PUT')}}
  {{Form::submit('Submit', ['class'=>'btn btn-success'])}} {!! Form::close() !!}
  {!! Form::close() !!}
@endsection