<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Painel do Admistrador</title>
</head>

<body>
    <!-- Barra de Navegação -->
    <nav>
        <div class="nav-wrapper bg-color">
            <a href="#!" class="brand-logo"><img id="nav-logo" src="img/neilyta.svg" alt="" title="Neilyta Eventos"></a>
            <a href="#!" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="">Home</a></li>
                <li><a class="btn bg-color" id="logout-btn" href=""><i class="material-icons left">directions_walk</i> Sair</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-navbar">
        <li><a href="#">Home</a></li>
        <li><a href="#">Sair</a></li>
    </ul>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>