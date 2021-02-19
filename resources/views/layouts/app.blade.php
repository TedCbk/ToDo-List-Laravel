<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>TodoList</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright &copy; 2021 Ted CBK</p>
    </footer>
    
</body>
</html>