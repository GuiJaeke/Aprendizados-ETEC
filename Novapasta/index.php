<?php
    if(null == $_COOKIE['salvaNome'] && null == $_COOKIE['salvaSenha']) {
        header('location: login.php');
    } else {
        echo '';
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock in Rio - O Maior Festival de Música</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            <?php if ($_COOKIE['modoescuro'] == true){ //Verificar modo escuro
                echo 'background-color: black;';
                echo 'color: white;';
            } else {
                echo 'background-color: white;';
                echo 'color: black;';
            }
            /////////////////////////////////////
            if ($_COOKIE['tamanhofonte'] == 'pequeno'){ // verificar o tamanho da fonte
                echo 'font-size: 12px;';
            }elseif ($_COOKIE['tamanhofonte'] == 'medio'){
                echo 'font-size: 20px;';
            }
            else {
                echo 'font-size: 28px;';
            } ?>
        }

        header {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>Rock in Rio 2024</h1>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Lineup</a></li>
                <li><a href="#">Ingressos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <section>
            <h2>Bem-vindo ao Rock in Rio 2024!</h2>
            <p>O Rock in Rio é um dos maiores festivais de música do mundo, e em 2024 será ainda mais épico! Prepare-se para viver uma experiência única com shows incríveis de artistas nacionais e internacionais.</p>
        </section>
        
        <section>
            <h3>Data e Local</h3>
            <p>O evento acontecerá de 5 a 15 de setembro de 2024, no Parque Olímpico, no Rio de Janeiro.</p>
        </section>
        
        <section>
            <h3>Bandas e Artistas</h3>
            <p>Fique atento ao lineup! O Rock in Rio 2024 terá grandes nomes do rock, pop, e outros gêneros musicais. Acompanhe a nossa programação e não perca seus artistas favoritos!</p>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Rock in Rio - Todos os direitos reservados</p>
    </footer>
</body>
</html>
