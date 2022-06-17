<?php  
    $servername = "localhost";
    $usarname = "root";
    $password = "";
    $database = "bd_neilyta_eventos";

    $conn = mysqli_connect($servername, $usarname, $password, $database);

    mysqli_set_charset($conn, "utf8");
?>