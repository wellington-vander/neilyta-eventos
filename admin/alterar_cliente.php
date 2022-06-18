<?php

    require_once '../conexao.php';

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
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $cidade = $_POST['city'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['end'];
    $numero = $_POST['num'];
    $complemento = $_POST['comp'];
    $por = $_POST['por'];

    $sql = "UPDATE tb_user SET cpf_user = '$cpf', nome_user = '$nome', sobre_user = '$sobrenome', email_user = '$email', telefone_user = '$telefone', cep_user = '$cep', estado_user = '$estado', cidade_user = '$cidade', bairro_user = '$bairro', endereco_user = '$endereco', numero_user = '$numero', complemento_user = '$complemento',  por_onde_soube = '$por' WHERE id_user = '$id'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo '
            <script>
            alert("Alteração realizada com sucesso!");
            window.location = "listar_cliente.php";
            </script>
            ';
    } else {
        echo '
            <script>
            alert("Algo deu errado :( Verifique as informações e tente novamente!");
            window.location = "listar_cliente.php";
            </script>
            ';
    }

