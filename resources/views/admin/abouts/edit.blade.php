@extends('layouts.admlayout')

@section('title')
        About Us | PLUMBAPP
@endsection

@section('content')
<div class="row">
    <div clas="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">About us -edit data</h4>
            </div>
            <div class="card-body">
                {!! Form::open(['action'=>['Admin\AboutusController@update',$aboutus->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                  {{Form::label('title','Title')}}
                  {{Form::text('title',$aboutus->title,['class'=>'form-control','placeholder'=>'Title'])}}
                </div>
                <div class="form-group ">
                  {{Form::label('subtitle','subtitle')}} 
                  {{Form::text('subtitle', $aboutus->subtitle, ['class'=>'form-control ', 'placeholder'=>'subtitle'])}}
                </div>
                <div class="form-group">
                  {{Form::label('description','Aboutus Description')}} 
                  {{Form::textarea('description', $aboutus->description, ['id'=> 'article-ckeditor',
                  'class'=>'form-control', 'placeholder'=>'Aboutus Description'])}}
                </div>
                  
                  {{Form::hidden('_method','PUT')}}
                  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                  {!! Form::close() !!}
                
            </div>  
        </div>
    </div>   
</div>             
@endsection