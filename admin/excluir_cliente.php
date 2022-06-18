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

    
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_user WHERE id_user = '$id';";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo '
            <script>
            alert("Exclusão Realizada com Sucesso! :D Essa operação não pode ser desfeita! :(");
            window.location = "listar_cliente.php";
            </script>
            ';
    }

?>