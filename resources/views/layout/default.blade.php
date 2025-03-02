<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css">
    @vite('resources/css/app.css')
    <title>Library Management System Project</title>
</head>
<body class="min-h-screen bg-fixed bg-cover bg-no-repeat bg-gray-800" style="background-image:url('{{asset('images/library_wallpaper.jpg')}}')">

    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
    
</body>
</html>