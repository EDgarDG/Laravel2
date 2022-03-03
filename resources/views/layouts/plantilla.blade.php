<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" >

</head>
<body>

    <!-- DIRECTIVAS BLADE -->
    @include("layouts.navbar")
    @yield("cabecera")

    <!-- DIRECTIVAS BLADE -->
    @include("layouts.card")
    @yield("infoGeneral")


    @yield("pie")

    <!-- JavaScrip -->

</body>
</html>