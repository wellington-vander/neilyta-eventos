
<?php 

    require_once '../conexao.php';
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

?>

<script type="text/javascript">
    const confirmar = () => {
    const cpf = "<?php echo $cpf; ?>";
    const estado = "<?php echo $estado; ?>";
    const conf = confirm("Esse CPF já está vinculado há um cliente. Deseja listá-lo?");
    if (conf == true) {
        window.location = `listar_cliente.php?busca=${cpf}&filtro=${estado}`;    
    } else {
        window.location = "home.php";
    }
}
</script>

<?php
    $sql_cpf = "SELECT * FROM tb_user WHERE cpf_user = '$cpf';";
    $query_cpf = mysqli_query($conn, $sql_cpf);
    if (mysqli_num_rows($query_cpf)) {
        echo '
            <script>
              confirmar();
            </script>
        ';
    }else {

        $sql = "INSERT INTO tb_user VALUES (NULL, '$cpf', '$nome', '$sobrenome', '$email', '$telefone', '$cep', '$estado', '$cidade', '$bairro', '$endereco', '$numero', '$complemento');";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo '
            <script>
            alert("Cadrasto realizado com sucesso!");
            window.location = "home.php";
            </script>
            ';
        }
    }

    ?>
