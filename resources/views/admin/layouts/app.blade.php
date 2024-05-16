<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - Especializa Ti</title>

    <!-- Scripts 
    @vite(['resources/css/app.css', 'resources/js/app.js'])-->
    
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <header>header default</header>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @yield('content')
        </div>
    <footer class="">footer</footer>
</body>
</html>