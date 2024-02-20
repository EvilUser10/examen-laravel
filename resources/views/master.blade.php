<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de Albumes</title>
</head>
<body>
    <header>
        <h1>Gestion de Albumes</h1>
    </header>

    <nav>
        <ul>
            <li><a href={{route('index')}}>Inicio</a></li>
            <li><a href={{route('artists')}}>Artistas</a></li>
            <li><a href={{route('albums')}}>Albums</a></li>
        </ul>
    </nav>

    @section('content')

    @show

    <footer>
        <h4>Por Víctor José Arzola Murillo</h4>
    </footer>
</body>
</html>


