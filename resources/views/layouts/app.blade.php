<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>Curio</title>
</head>
<body>
    
    @yield('content')
    @livewireScripts
</body>
</html>