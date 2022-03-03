<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <!-- asset hace referencia a una función -->
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" > -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" >
    
</head>
<body>
    
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <h1>Vista CREAR</h1>

    <!-- JavaScrip -->

</body>
</html>
