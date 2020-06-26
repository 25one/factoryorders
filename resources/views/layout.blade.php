<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{config('app.name')}}</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
        <!-- my own css -->
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

@yield('css')
        
    </head>
<body>

    <div class="container">

       @yield('main')    

    </div>

<!-- axios(ajax) for Vue -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- Vue -->
<script src="{{ asset('public/js/vue.min.js') }}"></script>
<!-- my own script -->
<script src="{{ asset('public/js/mine.js') }}"></script>

@yield('js')

</body>

</html>
