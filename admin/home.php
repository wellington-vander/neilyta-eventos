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
        <p>PAINEL DO ADMINISTRADOR</p>
        <a href="logout.php" onclick="return confirm('Deseja realmente sair?');" class="btn-small logout-btn" ><i class="material-icons left">directions_walk</i>Sair</a>
    </div>

    <div class="pri-container">
        <div class="sec-container">
            <ul class="collapsible">
                <li>
                    <a class="modal-trigger" href="#modal-cad">
                        <div class="collapsible-header">
                            <i class="material-icons cont-icons">add_circle</i>
                            <label class="cont-label" for="">CADRASTAR CLIENTE</label>
                        </div>
                    </a>
                </li>
                <div id="modal-cad" class="modal">
                    <div class="modal-content">
                        <form action="" method="POST" id="form-cad">
                            <legend>CADRASTAR CLIENTE</legend>
                            <br>
                            <div class="colunas">
                                <div class="input-cont">
                                    <label for="nome" required>Nome</label>
                                    <input id="nome" type="text" placeholder="Digite o Nome Aqui">
                                </div>
                                <div class="input-cont">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input id="sobrenome" type="text" placeholder="Digite o Sobrenome Aqui">
                                </div>
                            </div>
                            <div class="colunas">
                                <div class="input-cont">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" placeholder="Digite o Email Aqui">
                                </div>
                                <div class="input-cont">
                                    <label for="tel">Telefone:</label>
                                    <input id="tel" type="text" placeholder="Digite o Telefone Aqui">
                                </div>
                            </div>
                            <div class="colunas">
                                <div class="input-cont">
                                    <label for="cpf">CPF:</label>
                                    <input id="cpf" type="text" placeholder="Digite o CPF Aqui">
                                </div>
                                <div class="input-cont">
                                    <label for="cep">CEP:</label>
                                    <input id="cep" type="text" placeholder="Digite o CEP Aqui" maxlength="8">
                                </div>
                            </div>
                            <div class="colunas">
                                <div class="input-cont">
                                    <label for="estado">Estado:</label>
                                    <div class="select">
                                        <select class="browser-default" id="estado" name="estado" disabled="disabled" data-input>
                                            <option>Estado</option>
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
                                    </div>
                                </div>
                                <div class="input-cont">
                                    <label for="city">Cidade</label>
                                    <input id="city" type="text" placeholder="Digite a Cidade Aqui" data-input disabled="disabled">
                                </div>
                            </div>
                            <div class="colunas">
                                <div class="input-cont">
                                    <label for="bairro">Bairro</label>
                                    <input id="bairro" type="text" placeholder="Digite o Bairro Aqui" data-input disabled="disabled">
                                </div>
                                <div class="input-cont">
                                    <label for="end">Endereço:</label>
                                    <input id="end" type="text" placeholder="Digite o Endereço Aqui" data-input disabled="disabled">
                                </div>
                            </div>
                            <div class="colunas">
                                <div class="input-cont">
                                    <label for="num">Número</label>
                                    <input id="num" type="text" placeholder="Digite o Numero Aqui" data-input disabled="disabled">
                                </div>
                                <div class="input-cont">
                                    <label for="comp">Complemento:</label>
                                    <input id="comp" type="text" placeholder="Digite o Complemento Aqui" data-input disabled="disabled">
                                </div>
                            </div>
                            <div class="btn-cont">
                                <a class="btn-small waves-effect" onclick="verificar()"><i class="material-icons left">create</i>Cadrastar</a>
                                <a class="btn-small red waves-effect modal-close"><i class="material-icons left">close</i>Fechar</a>
                            </div>
                        </form>
                    </div>
                </div>
                <li>
                    <a class="" href="#">
                        <div class="collapsible-header">
                            <i class="material-icons cont-icons">add_circle</i>
                            <label class="cont-label" for="">LISTAR CLIENTES</label>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="js/script.js" defer></script>
</body>

</html>