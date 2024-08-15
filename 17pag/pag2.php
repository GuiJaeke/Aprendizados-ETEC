<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWW</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body class="conteudo">

    <div class="col2">
        <h1 class="h1">FTP</h1>
        <h2>Bem-vindo à nossa seção sobre FTP!</h2>
        <hr>
    </div>

    <div class="quad">
        <p style="margin-right: 60px;">FTP, que significa File Transfer Protocol (Protocolo de Transferência de
            Arquivos, em português), é um protocolo padrão de rede usado para transferir arquivos entre um cliente e um
            servidor através de uma rede, como a internet. Ele permite que você envie e receba arquivos de um servidor
            remoto para o seu computador, ou vice-versa.

        <p>Alguns detalhes sobre o FTP:

            1 Modos de Conexão: O FTP pode operar em dois modos principais:

            - Modo Ativo: O cliente abre uma porta e aguarda uma conexão do servidor.
            - Modo Passivo: O servidor abre uma porta e aguarda uma conexão do cliente. Esse modo é geralmente usado
            quando o cliente está atrás de um firewall.</p>

        <p>2 Autenticação: Normalmente, o FTP requer um nome de usuário e uma senha para acessar o servidor. No entanto,
            também pode ser configurado para permitir acesso anônimo, onde o usuário não precisa fornecer credenciais.

        <p>3 Segurança: O FTP padrão não criptografa a conexão, o que pode expor dados sensíveis durante a
            transferência.
            Para uma comunicação mais segura, é recomendável usar FTPS (FTP Secure) ou SFTP (SSH File Transfer
            Protocol), que oferecem criptografia e autenticação aprimoradas.</p>

        <p>4 Comandos Básicos:

            - LIST: Lista os arquivos e diretórios no servidor.
            - RETR: Baixa um arquivo do servidor para o cliente.
            - STOR: Envia um arquivo do cliente para o servidor.
            - DELE: Exclui um arquivo do servidor.

        <p>Aqui estão alguns exemplos de como você pode usar o FTP na prática:

            1. Usando um Cliente FTP
            Clientes FTP são programas ou aplicativos que facilitam a transferência de arquivos usando o protocolo FTP.
            Exemplos populares incluem:

            FileZilla: Um dos clientes FTP mais conhecidos e amplamente utilizados, disponível para Windows, macOS e
            Linux.

            Como usar:

            Abra o FileZilla.
            Insira o endereço do servidor FTP, nome de usuário e senha.
            Clique em "Conectar".
            Navegue pelos diretórios do servidor e arraste arquivos entre seu computador e o servidor para
            transferi-los.


        <p>2. Usando a Linha de Comando
            Você também pode usar a linha de comando para acessar servidores FTP. Veja como fazer isso em diferentes
            sistemas operacionais:

            No Windows:
            Abra o Prompt de Comando (cmd).
            Digite ftp seguido pelo endereço do servidor FTP e pressione Enter.
            bash
            Copiar código
            ftp ftp.exemplo.com
            Quando solicitado, insira seu nome de usuário e senha.
            Use comandos como ls (listar arquivos), get nome_arquivo (baixar um arquivo), put nome_arquivo (enviar um
            arquivo).</p>

        <hr>
        <footer>
            <div class="ant" style="align-content: start;"><a href="pag1.html"><img src="setesq.png" alt="" width="48px"></a>
            </div>
            <div class="home" style="margin: 0 auto;"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg"
                        height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000">
                        <path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z" />
                    </svg></a></div>
            <div class="prox"><a href="pag3.html"><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960"
                        width="48px" fill="#000000">
                        <path d="m702-301-43-42 106-106H120v-60h646L660-615l42-42 178 178-178 178Z" />
                    </svg></a></div>
        </footer>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</html>