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

    session_destroy();

    header('Location:../login.php');
?>