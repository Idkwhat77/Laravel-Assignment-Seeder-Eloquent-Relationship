<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-hsr min-h-screen flex justify-center bg-blue-100">
    <div class="flex flex-col justify-center items-center gap-4 w-full">
        @include('partials.logo')
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
    </div>
</body>
</html>