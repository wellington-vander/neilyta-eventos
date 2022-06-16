<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
        <p>Administrador</p>
    </div>

    <div id="modal-cad" class="modal">
        <div class="modal-content">
            <form action="" method="POST" id="form-cad">
                <legend>Cadrastar Usuário</legend>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="nome">Nome</label>
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
                <div class="input-cont">
                    <label for="cep">CEP:</label>
                    <input id="cep" type="text" placeholder="Digite o Email Aqui">
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="estado">Estado:</label>
                        <select class="browser-default"id="estado" name="estado">
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
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                    <div class="input-cont">
                        <label for="city">Cidade</label>
                        <input id="city" type="text" placeholder="Digite o Sobrenome Aqui">
                    </div>
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" placeholder="Digite o Email Aqui">
                    </div>
                    <div class="input-cont">
                        <label for="end">Endereço:</label>
                        <input id="end" type="text" placeholder="Digite o Telefone Aqui">
                    </div>
                </div>
                <div class="colunas">
                    <div class="input-cont">
                        <label for="num">Número</label>
                        <input id="num" type="text" placeholder="Digite o Email Aqui">
                    </div>
                    <div class="input-cont">
                        <label for="compl">Complemento:</label>
                        <input id="compl" type="text" placeholder="Digite o Telefone Aqui">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="pri-container">
        <div class="sec-container">
            <ul class="collapsible">
                <li>
                    <a class="modal-trigger" href="#modal-cad">
                        <div class="collapsible-header">
                            <i class="material-icons cont-icons">add_circle</i>
                            <label class="cont-label" for="">Cadrastar Usuario</label>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        //Materialize
        const elemsModal = document.querySelectorAll(".modal");
        const instacesModal = M.Modal.init(elemsModal);

        const elemsSelect = document.querySelectorAll('select');
        const instancesSelect = M.FormSelect.init(elemsSelect);
    </script>
</body>

</html>