<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Lazy loading products</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container-fluid" id="app">
            <product-area :pagination-initial='{!! json_encode($products) !!}'></product-area>
        </div>
        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
