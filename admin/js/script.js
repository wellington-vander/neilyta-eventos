    //Materialize
    const elemsModal = document.querySelectorAll(".modal");
    const instacesModal = M.Modal.init(elemsModal);

    const elemsSelect = document.querySelectorAll('select');
    const instancesSelect = M.FormSelect.init(elemsSelect);

    //Mascaras - JQuery Mask

    $("#tel").mask("(99) 99999-99999");
    $("#cpf").mask("999.999.999-99");


    //Login 

    const loginForm = document.querySelector("#form-login");
    const loginInput = document.querySelector("#login");
    const passInput = document.querySelector("#pass");

        // Função do botão "Mostrar Senha"
    const view = () => {
        if (passInput.type === "text") {
            passInput.type = "password";
        } else {
            passInput.type = "text";
        }
    }

        //Verifica se os campos da tela estão preenchidos e envia os dados.
    const verificarLogin = () => {
        if (loginInput.value === "") {
            alert("Informe seu endereço de login!");
            loginInput.focus();
            return;
        }
        if (passInput.value === "") {
            alert("Informe sua senha!");
            passInput.focus();
            return;
        }
        loginForm.submit();
    }


    //CEP - Autocomplete

    const cadForm = document.querySelector("#form-cad");
    const formInputs = document.querySelectorAll("[data-input]");
    const nomeInput = document.querySelector("#nome");
    const sobrenomeInput = document.querySelector("#sobrenome");
    const emailInput = document.querySelector("#email");
    const telInput = document.querySelector("#tel");
    const cpfInput = document.querySelector("#cpf");
    const cepInput = document.querySelector("#cep");
    const estadoInput = document.querySelector("#estado");
    const endInput = document.querySelector("#end");
    const cityInput = document.querySelector("#city");
    const bairroInput = document.querySelector("#bairro");
    const numInput = document.querySelector("#num");
    const compInput = document.querySelector("#comp");


        // Aceitar apenas números
    cepInput.addEventListener("keypress", (e) => {
        const apenasNum = /[0-9]/;
        const key = String.fromCharCode(e.keyCode)

        if (!apenasNum.test(key)) {
            e.preventDefault();
            return;
        }
    })

        // Verifica se o usuário já digitou os 8 números
    cepInput.addEventListener("keyup", (e) => {
        const valorInput = e.target.value

        if (valorInput.length === 8) {
            valorCep(valorInput);
        }
    })

        // Funcão para habilitar ou desabilitar os inputs do Autocomplete
    const habDesab = () => {
        if (cityInput.hasAttribute("disabled")) {
            formInputs.forEach((input) => {
                input.removeAttribute("disabled");
            })
        } else {
            formInputs.forEach((input) => {
                input.setAttribute("disabled", "disabled");
            })
        }
    }

        // Função que pega o valor do CEP e faz uma consulta, retornando os dados encontrados nos respectivos inputs do form
    const valorCep = async (cep) => {
        const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;
        const response = await fetch(apiUrl);
        const dados = await response.json();

        console.log(dados);

        if (dados.erro === "true") {
            if (!cityInput.hasAttribute("disabled")) {
                habDesab();
            }

            alert("CEP Inválido!");
            cepInput.value = "";
            cityInput.value = "";
            estadoInput.value = "";
            endInput.value = "";
            compInput.value = "";
            return;
        }

        if (cityInput.value === "") {
            habDesab();
        }

        endInput.value = dados.logradouro;
        cityInput.value = dados.localidade;
        bairroInput.value = dados.bairro;
        estadoInput.value = dados.uf;
        compInput.value = dados.complemento;
    }

        // Função que verifica se todos os campos obrigatorios estão preenchidos, se sim, envia o form
    const verificar = () => {
        if (nomeInput.value === "") {
            alert("Informe seu nome!");
            nomeInput.focus();
            return;
        }
        if (sobrenomeInput.value === "") {
            alert("Informe o sobrenome!");
            sobrenomeInput.focus();
            return;
        }
        if (emailInput.value === "") {
            alert("Informe o email!");
            emailInput.focus();
            return;
        }
        if (telInput.value === "") {
            alert("Informe o telefone!");
            telInput.focus();
            return;
        }
        if (cpfInput.value === "") {
            alert("Informe o CPF!");
            cpfInput.focus();
            return;
        }
        if (cepInput.value === "") {
            alert("Informe o CEP!");
            cepInput.focus();
            return;
        }
        if (numInput.value === "") {
            alert("Informe o número!");
            numInput.focus();
            return;
        }
        if (bairroInput.value === "") {
            alert("Informe o bairro!");
            bairroInput.focus();
            return;
        }if (endInput.value === "") {
            alert("Informe o endereço!");
            endInput.focus();
            return;
        }
        cadForm.submit();
    }
