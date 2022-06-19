# Neylita Eventos

![neilyta](https://user-images.githubusercontent.com/107505080/174460280-1a785efe-d418-4a29-87ba-00495911cc84.png)

## Apresentação

O neilyta eventos é um projeto web desenvolvido por **Vanderlei Furtuna e Wellington de Sousa**, ambos alunos do **3º Ano Informatica na EEEP Francisca Neilyta**.
O objetivo principal do projeto é cumprir um desafio necessario para finalização do processo seletivo de duas vagas de estágio.

---

## Sobre o Projeto

O projeto consiste em um site que é gerenciado por uma empresa de eventos, que necessita **cadrastar, listar, alterar e excluir** clientes.

O sistema foi contruido em **HTML, CSS, JavaScript, PHP e MySQL** como a utilização de algumas ferramentas como o [Materialize](https://materializecss.com/), [Jquery](https://jquery.com/) e [Jquery Mask](https://igorescobar.github.io/jQuery-Mask-Plugin/).

As aplicações utilizadas foram [Visual Studio Code](https://code.visualstudio.com/), [XAMPP](https://www.apachefriends.org/pt_br/index.html), [phpMyAdmin](https://www.phpmyadmin.net/) e o navegador [Blisk](https://blisk.io/).

O Sistema foi testado em 6 navegadores:
* Google Chrome
* Firefox
* Edge
* Opera
* Vivaldi
* Blisk

> Não recomendamos o uso do **Firefox**, por ser incompativel com o efeito de transparência utilizado no design do site.
---

## Como testar a aplicação no seu dispositivo

### Requesitos:
* Ter um navegador de web *(Exceto o Firefox)*
* Ter um servidor local
* Ter o PHP e o MySQL instalados em sua máquina.

### Passo 1 - Instalando as aplicações necessárias

Como o PHP é uma linguagem que funciona "do lado do Servidor" é necessario que tenhamos um servidor local instalado em nosso dispositivo. Para usuários de Windows, recomendamos o programa [XAMPP](https://www.apachefriends.org/pt_br/index.html) que possui um pacote com os principais servidores, como **Apache, PHP e o MySQL**, todos utilizados em nosso site.

Após instalar o XAMPP, execute-o e ative as opções **Apache e MySQL**, certifique-se de que o fundo ficou verde nas respectivas opções, como na imagem:
 
![xampp](https://user-images.githubusercontent.com/107505080/174460270-77d6a350-1bfa-4e93-954c-c6260d0575eb.png)

Logo após isso, abra o gerenciador de arquivos, acesso o disco principal `C:` vá até a pasta `xampp`, entre em `htdocs` e certifique-se de que essa pasta está vazia, se não, exclua os arquivos pre-instalados. Nesse mesmo diretorio, crei uma pasta chamada `neilyta-eventos` e dentro desta pasta extraia os arquivos do site que foram previamente baixados.

### Passo 2 - Instalando o banco de dados.
O nosso sistema está vinculado a um **banco de dados em MySQL** que precisa ser importado no seu servidor MySQL para que o site funcione devidamente.

No seu navegador padrão, **com o Apache e o MySQL ativos**, acesse `http://localhost/phpmyadmin/`, essa url te levará para o phpMyAdmin que foi instalado juntamente com o XAMPP e serve para gerenciamento de banco de dados.

Com o phpMyAdmin aberto, utilize o usuário e a senha definidas na instalação, **o usuário padrão é `root` e a senha padrão é vazia**.

Na tela principal, acesse a opção **Importar** e clique no botão **Escolher arquivo**. Na tela de arquivos, vá até `neilyta-eventos` e selecione o arquivo `bd_neilita_eventos.sql`, desça até o rodapé do site e aperte em **Executar**, uma mensagem de confirmação será exibida em verde e mais uma etapa do processo estará concluida.

### Passo 3 - Alterando o modulo de conexão com o banco de dados
Para que as funções do site se conectem com o banco de dados, um modulo de conexão é estabalecido no inico de cada arquivo. As informações necessarias para a conexão são repassadas em um unico arquivo que é chamado em todos os outros. ele é nomeado de `conexao.php`.

Ao acessar o arquivo com um editor de codigos, ou de texto, você verá os seguintes parametros:

```
    $servername = "localhost"; //Nome do servidor
    $usarname = "root"; //Nome do usuário do servidor
    $password = ""; //Senha do servidor
    $database = "bd_neilyta_eventos"; //Nome da base de dados

    $conn = mysqli_connect($servername, $usarname, $password, $database); //Variavel que executa a conexão

    mysqli_set_charset($conn, "utf8"); //Permite que as requisições sejam compativeis com o padrão UTF-8
```

Se necessário, altere os valores entre aspas no arquivo e depois o salve.

### Passo 4 - Testar

Se tudo ocorreu nos conformes, o sistema estará finalmente funcionando.
Verifique se o Apache e o MySQL estão iniciados, se os arquivos estão no diretorio correto e se o banco de dados foi realmente importado.

Para acessar o site, no seu navegador padrão, acesse `http://localhost/`, entre na pasta `neilyta-eventos` que contém os arquivos extraidos, e entre em `login.php`.

A **Tela de Login** do sistema será aberta, o usuário(login) padrão é `admin` e a senha padrão é `neventos-123`.

### Agora é só usar!

Se tudo ocorreu bem, *(Esperamos que sim),* o site estará funcionando e as telas e funções poderão ser utilizadas. Aproveite :D
