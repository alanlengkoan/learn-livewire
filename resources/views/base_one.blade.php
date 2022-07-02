<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @livewireStyles
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- begin:: css local -->
    @yield('css')
    <!-- end:: css local -->
</head>

<body>
    <div class="container mx-auto">
        <h1 class="py-2 text-xl text-center">Belajar Livewire</h1>
        <div class="py-4">
            <!-- begin:: content -->
            @yield('content')
            <!-- end:: content -->
        </div>
    </div>

    <!-- begin:: js local -->
    @yield('js')
    <!-- end:: js local -->
    @livewireScripts
</body>

</html>