@extends('layouts.app')

@section('content')
<div class="container">
<a href="/posts" class="btn btn-primary">Go Back</a>
  <h1>{{$post->title}}</h1>
  <div class="card"> 
    <div class="row">  
      <aside class="col-sm-5">
        <img class="img-fluid" style="max-width:100%; max-height:100%;" src="/storage/cover_images/{{$post->cover_image}}" >
           <!-- gallery-wrap .end// -->
        </aside>
        <aside class="col-sm-7">

       <aside class="col-sm-7">
        <article class="card-body p-5"> 
          <dl class="item-property"> 
              <dt>Phone Number</dt>
              <?php
              $phone=$post->phone_number;
              ?>
                <a href="tel:+{{$post->phone_number}}"><dd><i class="fa fa-phone" style='font-size:16px' aria-hidden="true"></i>+{!!$post->phone_number!!}</dd></a>
          </dl>   
         
                                         
          <!-- artisan's-detail-wrap .// -->
          <dl class="item-property">
            <dt>Job Description</dt>
            <dd>
              {!!$post->body!!}
            </dd>
          </dl>
          <!-- artisan's-name .// -->
          <dl class="item-property">
            <dt>Artisan's Name</dt>
            <dd>
              {{$post->user->name}}
            </dd>
          </dl>

          <!-- item-property-hor .// -->
          <dl class="param param-feature">
            <dt>Artisan's Location</dt>
            <dd>{{$post->location}}</dd>
          </dl>
          
          <!-- item-property-hor .// -->
          <dl class="param param-feature">
            <dt>Posted On</dt>
            <dd>{{$post->created_at}}</dd>
          </dl>
           
          <p class="price-detail-wrap">
            <span class="price h3 text-info"> 
		        <span class="currency">KSH </span><span class="num">{!!$post->quotation_price!!}</span>
            </span>
            <span>/per hr</span>
          </p>  
          <hr> 
          @if(!Auth::guest())
          @if(Auth::user()->id ==$post->user_id)
          <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>    
              {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST','class'=>'float-right'])!!} 
              {{Form::hidden('_method', 'DELETE')}} 
              {{Form::submit('Delete', ['class'=>'btn btn-danger'])}} 
              {!!Form::close()!!}
          @endif   
          @endif  
        </article>
        <!-- card-body.// -->
      </aside>    
   </div>
  </div>
@endsection