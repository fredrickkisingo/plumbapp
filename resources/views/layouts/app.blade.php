<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','PLUMBAPP')}}</title>
         
        
         <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'
        crossorigin='anonymous'>
    </head>
    <body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
        </div>
        <div class="container">
             @yield('content')
        </div>  
    </div>    
        <!-- Scripts -->
    <script src="js/app.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>   
    </body>
</html>
