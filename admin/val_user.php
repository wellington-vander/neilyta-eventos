<?php

// Conexão com o BD.
require_once '../conexao.php';


//Iniciar uma sessão caso não exista uma.
if (!isset($_SESSION)) {
    session_start();
}

// Validação do Usuário.
if (!isset($_SESSION['user'])) {

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    //Utilizando password_hash para descriptografar a senha do usuário
    $sql_pass = "SELECT * FROM tb_adm WHERE login_adm = '$login' LIMIT 1;";
    $query_pass = mysqli_query($conn, $sql_pass);
    $linha = mysqli_num_rows($query_pass);
    if ($linha) {
        $user = mysqli_fetch_assoc($query_pass);
        $verificar = password_verify($pass, $user['senha_adm']);
        if ($verificar) {
            $_SESSION['user'] = $user['id_adm'];
            header('Location:home.php');
        } else {
            echo '
                 <script type="text/javascript">
                     alert("Senha Incorreta!");
                     window.location = "../login.php";
                 </script>
                 ';
        }
    } else {
        echo '
         <script type="text/javascript">
             alert("Usuário ou Senha Incorretos!");
             window.location = "../login.php";
         </script>
         ';
    }
}else{
    header('Location:home.php');
}
