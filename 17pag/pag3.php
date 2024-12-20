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
        <h1 class="h1">FTPS</h1>
        <h2>FTP Secure</h2>
        <hr>
    </div>

    <div class="quad justify" >
        <p style="margin-right: 60px;">
            FTPS (FTP Secure) é uma extensão do protocolo FTP que adiciona camadas de segurança para a transferência de
            arquivos. Ele usa o protocolo SSL/TLS (Secure Sockets Layer/Transport Layer Security) para criptografar a
            comunicação entre o cliente e o servidor, garantindo que os dados transmitidos sejam protegidos contra
            espionagem e interceptação.
        <h4>Principais Características do FTPS</h4>
        <h5>1 Criptografia:</h5>

            - Criptografia de Dados: O FTPS criptografa a conexão usando SSL/TLS, o que impede que terceiros interceptem
            e
            leiam os dados transmitidos.
            <p>- Autenticação: Além de proteger os dados, o FTPS autentica o servidor e, opcionalmente, o cliente. Isso
            ajuda
            a garantir que você está se conectando ao servidor certo.

        <h5>2 Modos de Criptografia:</h5>

            - FTPS Explícito: O cliente inicia a conexão de forma não criptografada e solicita a segurança após a
            conexão
            ser estabelecida. O cliente e o servidor negociam a criptografia usando comandos específicos.
            <p>- FTPS Implícito: A conexão é criptografada desde o início, sem a necessidade de uma solicitação adicional
            para a segurança. O servidor FTPS implícito geralmente escuta em uma porta diferente da porta padrão FTP
            (porta 990 é comum para FTPS implícito).

        <h5>3 Portas:</h5>

            - Para FTPS explícito, a conexão inicial é geralmente feita na porta 21, e a criptografia é estabelecida
            após a conexão.
            <p>- Para FTPS implícito, a conexão criptografada é estabelecida na porta 990.

        <h5>4 Compatibilidade:</h5>

            - FTPS é compatível com clientes e servidores FTP padrão, mas adiciona suporte para criptografia. Muitos
            clientes FTP modernos, como FileZilla e WinSCP, suportam FTPS.

        <h5>5 Segurança Adicional:</h5>

            - Certificados Digitais: O servidor FTPS usa certificados digitais para autenticação, ajudando a garantir a
            identidade do servidor.
           <p>- Controle de Integridade: A criptografia também garante a integridade dos dados durante a transferência,
            para
            que não sejam alterados ou corrompidos.</p>

        <h4>Como Usar FTPS</h4>
        <p> Aqui está um exemplo básico de como configurar e usar FTPS com um cliente FTP:

        <p>1 Escolha de um Cliente FTPS:

            - Use um cliente FTP que suporte FTPS, como FileZilla ou WinSCP.
        </p>
        <h5>2 Configuração do Cliente:</h5>

            - Abra o cliente FTP e adicione uma nova conexão.
            <p>- Insira o endereço do servidor, nome de usuário e senha.
            <p>- Selecione o protocolo FTPS (ou FTP com TLS/SSL).
            <p>- Escolha o modo de criptografia (explícito ou implícito) conforme necessário.
            <p>- Salve a configuração e conecte-se ao servidor.
        </p>
        <h5>3 Transferência de Arquivos:</h5>

            - Navegue pelos diretórios do servidor usando a interface do cliente FTP.
            <p>-Arraste e solte arquivos para transferi-los entre seu computador e o servidor, com a conexão criptografada.
        </p>
        <h4> Vantagens do FTPS</h4>
            <h5>- Segurança:</h5> A principal vantagem é a segurança aprimorada na transferência de arquivos, protegendo dados
            sensíveis contra ataques e espionagem.
            <h5>- Compatibilidade:</h5> Como é uma extensão do FTP padrão, muitos sistemas e clientes já oferecem suporte para
            FTPS.
            Autenticação e Integridade: Certificados digitais garantem a identidade do servidor e a integridade dos
            dados.
            
            <p>FTPS é uma boa escolha quando você precisa de uma solução de transferência de arquivos segura e já está
            familiarizado com o FTP. Para uma segurança ainda maior, você pode considerar o SFTP (SSH File Transfer
            Protocol), que também oferece criptografia, mas funciona de maneira diferente e é mais seguro em termos de
            autenticação e criptografia de dados.
        </p>
        <hr>
        <footer>
            <div class="ant" style="align-content: start;"><a href="pag1.html"><img src="setesq.png" alt=""
                        width="48px"></a>
            </div>
            <div class="home" style="margin: 0 auto;"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg"
                        height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000">
                        <path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z" />
                    </svg></a></div>
            <div class="prox"><a href="pag4.html"><svg xmlns="http://www.w3.org/2000/svg" height="48px"
                        viewBox="0 -960 960 960" width="48px" fill="#000000">
                        <path d="m702-301-43-42 106-106H120v-60h646L660-615l42-42 178 178-178 178Z" />
                    </svg></a></div>
        </footer>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</html>