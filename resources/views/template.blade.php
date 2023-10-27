<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
   @include('module.nav')
    <div class="container" id="container" >
        @yield('content')
    </div>


    
</body>
<footer class="footer">12345</footer>
<script src="{{ asset('js/script.js') }}"></script>
</html>