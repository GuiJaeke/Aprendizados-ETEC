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
        <h1 class="h1">HTTP</h1>
        <H2>Hypertext Transfer Protocol</H2>
        <hr>
    </div>

    <div class="quad justify">
        <h2>Como o HTTP Funciona</h2>
        <p>Quando você acessa um site, seu navegador faz uma solicitação HTTP ao servidor web onde o site está
            hospedado. O servidor então responde com os dados solicitados, que podem incluir páginas HTML, imagens,
            vídeos e outros tipos de arquivos.</p>

        <h3>Solicitações e Respostas</h3>
        <p>O HTTP opera no modelo de <strong>solicitação-resposta</strong>:</p>
        <ol>
            <li><strong>Solicitação</strong>: Seu navegador (cliente) envia uma solicitação HTTP ao servidor. Essa
                solicitação inclui um método HTTP (como GET ou POST), o URL do recurso
                solicitado e outros detalhes como cabeçalhos e cookies.</li>
            <li><strong>Resposta</strong>: O servidor processa a solicitação e envia uma resposta HTTP de volta ao
                cliente. A resposta inclui um código de status (como 200 OK ou 404 Not Found),
                cabeçalhos e o corpo da mensagem com o conteúdo solicitado.</li>
        </ol>

        <h3>Métodos HTTP Comuns</h3>
        <ul>
            <li><strong>GET</strong>: Solicita dados do servidor. Por exemplo, quando você acessa uma página web, seu
                navegador faz uma solicitação GET para obter o conteúdo dessa página.</li>
            <li><strong>POST</strong>: Envia dados ao servidor. Usado frequentemente em formulários onde você envia
                informações como nome e e-mail.</li>
            <li><strong>PUT</strong>: Atualiza ou substitui um recurso existente no servidor.</li>
            <li><strong>DELETE</strong>: Remove um recurso do servidor.</li>
        </ul>

        <h2>HTTP vs. HTTPS</h2>
        <p>O <strong>HTTP</strong> é a versão não segura do protocolo, o que significa que os dados transmitidos entre o
            cliente e o servidor não são criptografados e podem ser interceptados. Para garantir a segurança, a versão
            segura do HTTP é o <strong>HTTPS</strong> (<strong>H</strong>ypertext <strong>T</strong>ransfer
            <strong>P</strong>rotocol <strong>S</strong>ecure), que utiliza criptografia SSL/TLS para proteger a
            comunicação.</p>

        <h3>Principais Diferenças:</h3>
        <ul>
            <li><strong>Criptografia</strong>: HTTPS criptografa os dados, tornando mais difícil para os terceiros
                interceptarem e lerem as informações.</li>
            <li><strong>Autenticação</strong>: HTTPS verifica a identidade do servidor através de certificados digitais,
                ajudando a prevenir ataques de spoofing.</li>
        </ul>

        <h2>Por Que o HTTP é Importante?</h2>
        <p>O HTTP é a base da comunicação na web, permitindo a interação entre navegadores e servidores. Sem ele, não
            poderíamos acessar sites, enviar formulários ou realizar transações online. Ele facilita a troca de
            informações e a entrega de conteúdo da web de forma padronizada e eficiente.</p>

        <h2>Conclusão</h2>
        <p>Entender o HTTP é fundamental para compreender como a web funciona. Embora o HTTP seja essencial para a
            navegação na web, é importante usar HTTPS para garantir uma navegação segura e proteger seus dados contra
            possíveis ameaças.</p>
        <hr>
        <footer>
            <div class="ant" style="align-content: start;"><a href="pag3.html"><img src="setesq.png" alt=""
                        width="48px"></a>
            </div>
            <div class="home" style="margin: 0 auto;"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg"
                        height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000">
                        <path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z" />
                    </svg></a></div>
            <div class="prox"><a href="pag5.html"><svg xmlns="http://www.w3.org/2000/svg" height="48px"
                        viewBox="0 -960 960 960" width="48px" fill="#000000">
                        <path d="m702-301-43-42 106-106H120v-60h646L660-615l42-42 178 178-178 178Z" />
                    </svg></a></div>
        </footer>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</html>