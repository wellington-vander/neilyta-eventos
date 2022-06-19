
<?php 
    // Conexão com o BD
    require_once '../conexao.php';


    // Verifica se há um login que permita o acesso a função
    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (!isset($_SESSION['user'])) {
        die('
            <script type="text/javascript">
                alert("Essa página não pode ser acessada sem login!");
                window.location = "../login.php";
            </script>
            ');
    }

    // Recebe os valores do formulario pelo POST
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

    // Verificação do CPF
    $sql_cpf = "SELECT * FROM tb_user WHERE cpf_user = '$cpf';";
    $query_cpf = mysqli_query($conn, $sql_cpf);
    if ($query_cpf) {
        $dados = mysqli_fetch_assoc($query_cpf);
        $estado_dados = $dados['estado_user'];
    }
?>


<script type="text/javascript">
    // Função do JS para redirecionar o usuário para tela de listar, caso já exista um cliente com o CPF enviado.
    const confirmar = () => {
    const cpf = "<?php echo $cpf; ?>";
    const estado = "<?php echo $estado_dados; ?>";
    const conf = confirm("Esse CPF já está vinculado há um cliente. Deseja listá-lo?");
    if (conf == true) {
        window.location = `listar_cliente.php?busca=${cpf}&filtro=${estado}`;    
    } else {
        window.location = "home.php";
    }
}
</script>

<?php
    if (mysqli_num_rows($query_cpf)) {
        echo '
            <script type="text/javascript">
              confirmar();
            </script>
        ';
    } else {
        //Cadrasto no BD
        $sql = "INSERT INTO tb_user VALUES (NULL, '$cpf', '$nome', '$sobrenome', '$email', '$telefone', '$cep', '$estado', '$cidade', '$bairro', '$endereco', '$numero', '$complemento', '$por');";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo '
            <script type="text/javascript">
            alert("Cadrasto realizado com sucesso!");
            window.location = "home.php";
            </script>
            ';
        }
    }

?>
    
