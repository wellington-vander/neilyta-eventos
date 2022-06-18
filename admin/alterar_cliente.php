<?php
    // Conexão com o BD
    require_once '../conexao.php';


    // Verifica se há um login que permita o acesso a função
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
    
    // Recebe os valores do formulario de alteração pelo POST
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


    //Query para atualização do cliente
    $sql = "UPDATE tb_user SET cpf_user = '$cpf', nome_user = '$nome', sobre_user = '$sobrenome', email_user = '$email', telefone_user = '$telefone', cep_user = '$cep', estado_user = '$estado', cidade_user = '$cidade', bairro_user = '$bairro', endereco_user = '$endereco', numero_user = '$numero', complemento_user = '$complemento',  por_onde_soube = '$por' WHERE id_user = '$id'";

    $query = mysqli_query($conn, $sql);

    //Se a atualização for concluida, o usuario será redirecionado para página de listar, se não, será avisado que um erro foi encontrado.
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

