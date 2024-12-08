<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Font-Families -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/sass/style.scss', 'resources/sass/style-2.scss', 'resources/js/app.js'])
    </head>

    <body>
        <!-- Header -->
        @include('layouts/header')
        
        <!-- Page content -->
        @yield('content')

        <!-- Footer -->
        @include('layouts/footer')
        
    </body>
</html>