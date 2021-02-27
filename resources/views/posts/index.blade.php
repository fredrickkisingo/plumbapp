@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Artisans Galore</h1>
    <div class="row">
        {{-- Carries data from the ProductsController with the variable posts --}}
         @if(count($posts)>0) 
         @foreach ($posts as  $post) {{-- Displays titles on the post table --}}
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img style="width:100%; height: 16vw; object-fit: cover; " src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" />

                <div class="card-body">
                    <h3>{{$post->title}}</a></h3>
                    <div class="quotation-price">
                        <div class="pricetext"><i style='font-size:16px' class='fas'>&#xf0d6;</i><b> Ksh {{$post->quotation_price}}</b></div>
                    </div>
                    <small>Posted On {{$post->created_at}}</small><br>
                    <small>Artisan's Name:<b>{{$post->user->name}}</b></small><br>
                    <small>Status: </span><span class="text-success"><strong>In Stock</strong></small><br>
                        <a href="/posts/{{$post->id}}" class="btn btn-primary">More Information</a>
                    
                </div>
            </div>
            <br>
        </div>
        @endforeach         

        @else
        <p>
            No Artisans Available
        </p>
        @endif
    </div>

</div>
            {{-- Pagination connected to the PostsController --}} {{$posts->links()}} 

    
@endsection