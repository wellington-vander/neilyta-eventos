<?php

require_once '../conexao.php';

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
    <title>Detalhes do Cliente</title>
</head>

<body>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper bg-color">
                <a href="home.php" class="brand-logo center"><img id="nav-logo" src="img/neilyta.svg" alt="" title="Neilyta Eventos"></a>
            </div>
        </nav>
    </div>

    <div class="sec-bar">
        <p>DETALHES DO CLIENTE</p>
        <a href="home.php" class="btn-small logout-btn"><i class="material-icons left">home</i>Home</a>
    </div>

    <div class="pri-container">
        <div class="details-cont">
            <?php 

                $id = $_GET['id'];
                $sql = "SELECT * FROM tb_user WHERE id_user = '$id';";
                $query = mysqli_query($conn, $sql);
                $user = mysqli_fetch_assoc($query);
            
            ?>
            <form action="alterar_cliente.php" method="POST" id="form-cad">
                <div class="colunas">
                    <input type="hidden" name="id" value="<?php echo $user['id_user']; ?>">
                    <div class="input-cont">
                        <label for="nome" required>Nome*</label>
                        <input name="nome" value="<?php echo $user['nome_user']; ?>" type="text" placeholder="Digite o Nome Aqui">
                    </div>
                    <div class="input-cont">
                        <label for="sobrenome">Sobrenome*</label>
                        <input name="sobrenome" value="<?php echo $user['sobre_user']; ?>" type="text" placeholder="Digite o Sobrenome Aqui">
                    </div>
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="email">Email*</label>
                        <input name="email" value="<?php echo $user['email_user']; ?>" type="text" placeholder="Digite o Email Aqui">
                    </div>
                    <div class="input-cont">
                        <label for="tel">Telefone*</label>
                        <input name="tel" value="<?php echo $user['telefone_user']; ?>" type="text" placeholder="Digite o Telefone Aqui">
                    </div>
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="cpf">CPF*</label>
                        <input name="cpf" type="text" value="<?php echo $user['cpf_user']; ?>" placeholder="Digite o CPF Aqui">
                    </div>
                    <div class="input-cont">
                        <label for="cep">CEP*</label>
                        <input name="cep" type="text" value="<?php echo $user['cep_user']; ?>" placeholder="Digite o CEP Aqui" maxlength="8">
                    </div>
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="estado">Estado*</label>
                        <div class="select">
                            <select class="browser-default" name="estado" data-input>
                                <option>Estado</option>
                                <option value="AC" <?php if ($user['estado_user'] == "AC") {
                                                        echo 'selected';
                                                    } ?>>Acre</option>
                                <option value="AL" <?php if ($user['estado_user'] == "Al") {
                                                        echo 'selected';
                                                    } ?>>Alagoas</option>
                                <option value="AP" <?php if ($user['estado_user'] == "AP") {
                                                        echo 'selected';
                                                    } ?>>Amapá</option>
                                <option value="AM" <?php if ($user['estado_user'] == "AM") {
                                                        echo 'selected';
                                                    } ?>>Amazonas</option>
                                <option value="BA" <?php if ($user['estado_user'] == "BA") {
                                                        echo 'selected';
                                                    } ?>>Bahia</option>
                                <option value="CE" <?php if ($user['estado_user'] == "CE") {
                                                        echo 'selected';
                                                    } ?>>Ceará</option>
                                <option value="DF" <?php if ($user['estado_user'] == "DF") {
                                                        echo 'selected';
                                                    } ?>>Distrito Federal</option>
                                <option value="ES" <?php if ($user['estado_user'] == "ES") {
                                                        echo 'selected';
                                                    } ?>>Espírito Santo</option>
                                <option value="GO" <?php if ($user['estado_user'] == "GO") {
                                                        echo 'selected';
                                                    } ?>>Goiás</option>
                                <option value="MA" <?php if ($user['estado_user'] == "MA") {
                                                        echo 'selected';
                                                    } ?>>Maranhão</option>
                                <option value="MT" <?php if ($user['estado_user'] == "MT") {
                                                        echo 'selected';
                                                    } ?>>Mato Grosso</option>
                                <option value="MS" <?php if ($user['estado_user'] == "MS") {
                                                        echo 'selected';
                                                    } ?>>Mato Grosso do Sul</option>
                                <option value="MG" <?php if ($user['estado_user'] == "MG") {
                                                        echo 'selected';
                                                    } ?>>Minas Gerais</option>
                                <option value="PA" <?php if ($user['estado_user'] == "PA") {
                                                        echo 'selected';
                                                    } ?>>Pará</option>
                                <option value="PB" <?php if ($user['estado_user'] == "PB") {
                                                        echo 'selected';
                                                    } ?>>Paraíba</option>
                                <option value="PR" <?php if ($user['estado_user'] == "PR") {
                                                        echo 'selected';
                                                    } ?>>Paraná</option>
                                <option value="PE" <?php if ($user['estado_user'] == "PE") {
                                                        echo 'selected';
                                                    } ?>>Pernambuco</option>
                                <option value="PI" <?php if ($user['estado_user'] == "PI") {
                                                        echo 'selected';
                                                    } ?>>Piauí</option>
                                <option value="RJ" <?php if ($user['estado_user'] == "RJ") {
                                                        echo 'selected';
                                                    } ?>>Rio de Janeiro</option>
                                <option value="RN" <?php if ($user['estado_user'] == "RN") {
                                                        echo 'selected';
                                                    } ?>>Rio Grande do Norte</option>
                                <option value="RS" <?php if ($user['estado_user'] == "RS") {
                                                        echo 'selected';
                                                    } ?>>Rio Grande do Sul</option>
                                <option value="RO" <?php if ($user['estado_user'] == "RO") {
                                                        echo 'selected';
                                                    } ?>>Rondônia</option>
                                <option value="RR" <?php if ($user['estado_user'] == "RR") {
                                                        echo 'selected';
                                                    } ?>>Roraima</option>
                                <option value="SC" <?php if ($user['estado_user'] == "SC") {
                                                        echo 'selected';
                                                    } ?>>Santa Catarina</option>
                                <option value="SP" <?php if ($user['estado_user'] == "SP") {
                                                        echo 'selected';
                                                    } ?>>São Paulo</option>
                                <option value="SE" <?php if ($user['estado_user'] == "SE") {
                                                        echo 'selected';
                                                    } ?>>Sergipe</option>
                                <option value="TO" <?php if ($user['estado_user'] == "TO") {
                                                        echo 'selected';
                                                    } ?>>Tocantins</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-cont">
                        <label for="city">Cidade*</label>
                        <input name="city" value="<?php echo $user['cidade_user']; ?>" type="text" placeholder="Digite a Cidade Aqui" data-input>
                    </div>
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="bairro">Bairro*</label>
                        <input name="bairro" value="<?php echo $user['bairro_user']; ?>" type="text" placeholder="Digite o Bairro Aqui" data-input>
                    </div>
                    <div class="input-cont">
                        <label for="end">Endereço*</label>
                        <input name="end" type="text" value="<?php echo $user['endereco_user']; ?>" placeholder="Digite o Endereço Aqui" data-input>
                    </div>
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="num">Número*</label>
                        <input name="num" type="text" value="<?php echo $user['numero_user']; ?>" placeholder="Digite o Numero Aqui" data-input>
                    </div>
                    <div class="input-cont">
                        <label for="comp">Complemento</label>
                        <input name="comp" type="text" value="<?php echo $user['complemento_user']; ?>" placeholder="Digite o Complemento Aqui" data-input>
                    </div>
                </div>
                <div class="input-cont">
                    <label for="por">Por onde soube?</label>
                    <input name="por" value="<?php echo $user['por_onde_soube']; ?>" type="text" placeholder="Por onde/quem você soube do evento?">
                </div>
                <div class="btn-cont">
                    <a href="listar_cliente.php"class="btn-small waves-effect"><i class="material-icons left">chevron_left</i>Voltar</a>
                    <button class="btn-small waves-effect" href="alterar_cliente.php" onclick="return confirm('Deseja realmente ALTERAR? Certifique-se de que nenhum campo obrigatorio * está vazio!');"><i class="material-icons left">create</i>Alterar</button>
                    <a class="btn-small red waves-effect" href="excluir_cliente.php?id=<?php echo $user['id_user']; ?>" onclick="return confirm('Deseja realmente EXCLUIR? A exclusão NÃO poderá ser desfeita!');"><i class="material-icons left">close</i>Excluir</a>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="js/script.js" defer></script>
</body>

</html>