@extends('layouts.app')
@section('content')
@include('inc.slider')
<div class="jumbotron text-center">
       <h1>{{$title}}</h1>
       <p><strong> This a site for you to find potential clients as an artisan and customers to find nearby artisans near them.</strong></p>
       <footer>
              <p>Copyright &copy;2021 Fredrick Kisingo</p>
       </footer>
</div>       
@endsection
