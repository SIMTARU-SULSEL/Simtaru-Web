<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @stack('addonHead')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Main.Include.Style')
    @stack('addonStyle')
    <title>SIMTARU</title>
    <link rel="icon" href="../../../../public_html/assets/Main/images/Logo-Sulsel.ico">
    <title>Document</title>
</head>

<body>
    @yield('Main')
    @include('Main.Include.Footer')
    @include('Main.Include.Script')
    @stack('addonScript')
    @include('sweetalert::alert')
</body>
</html>