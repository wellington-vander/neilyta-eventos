<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    die('
            <script>
                alert("Essa página não pode ser acessada sem login!");
                window.location = "../login.php";
            </script>
            ');
}

    if (isset($_POST['busca'])) {
        $busca = $_POST['busca'];
        $estado = $_POST['filtro'];

        if ($estado != "ALL") {
            $sql_busca = " SELECT ";
        }
    }

?>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-32x32.png">
    <title>Painel do Admistrador</title>
</head>

<body>
    <!-- Barra de Navegação -->
    <nav>
        <div class="nav-wrapper bg-color">
            <a href="#!" class="brand-logo center"><img id="nav-logo" src="img/neilyta.svg" alt="" title="Neilyta Eventos"></a>
        </div>
    </nav>

    <div class="sec-bar">
        <p>LISTAR CLIENTES</p>
        <a href="logout.php" onclick="return confirm('Deseja realmente sair?');" class="btn-small logout-btn"><i class="material-icons left">directions_walk</i>Sair</a>
    </div>

    <div class="pri-container">
        <div class="list-cont">
            <div class="pesqbar">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <select id="estado-filter" name="filtro" data-input>
                        <option value="ALL">Estado</option>
                        <option value="ALL">Todos</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                    <input type="text" name="busca">
                    <button class="btn"><i class="material-icons">search</i></button>
                </form>
            </div>
            <div class="list">
                <i class="material-icons">person</i>
                <p>Vanderlei Furtuna</p>
                <a class="btn"href="">detalhes</a>
            </div>
            <div class="list">
                <i class="material-icons">person</i>
                <p>Wellington de Sousa</p>
                <a class="btn"href="">detalhes</a>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="js/script.js" defer></script>
</body>

</html>