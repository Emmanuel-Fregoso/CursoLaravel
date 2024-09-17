<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
    <title>Todos</title>
</head>
<body>
    <div class="flex items-center justify-center w-screen h-screen font-medium">
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>
