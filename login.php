<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="admin/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/img/favicon-32x32.png">
    <title>Painel do Admistrador</title>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <img id="ne-logo-login" src="admin/img/ne-logo-login.svg" alt="">
            <form id="form-login" action="">
                <div class="input-login">
                    <label class="login-label" for="">Login:</label>
                    <input type="text" id="login" placeholder="Digite seu login!">
                </div>
                <div class="input-login">
                    <label for="" class="login-label">Senha:</label>
                    <input type="password" id="pass" value="" placeholder="Digite sua senha">
                </div>
                <div class="input-login">
                    <div class="switch">
                        <label class="login-label">
                            <input onclick="view()" type="checkbox">
                            <span class="lever"></span>
                            Mostrar Senha
                        </label>
                    </div>
                </div>
                <div class="login-label">
                    <button class="btn login-btn">Entrar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="admin/js/script.js" defer></script>
</body>

</html>