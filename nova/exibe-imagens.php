<?php
echo "<center>";
    // conexão local
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "images";
    $conexao = mysqli_connect($host, $user, $pass, $base);
    $sqlSelectQuery = "select * from arquivo";
    $resultQuery = mysqli_query($conexao, $sqlSelectQuery);

    echo "<table border='3px'><tr><td>Codigo da imagem</td><td>Nome da imagem</td><td>Data da imagem</td></tr>";
    while($escrever=mysqli_fetch_array($resultQuery)){
        echo "</td><td>" . $escrever['codigo'] . "</td><td>" . "<img src upload/" . $escrever['arquivo'] . "height='100' width='200'>" . "</td><td>" . $escrever['data'] . "</td><tr>";
    }

    echo "</table>";

    echo "</br></br>";

    mysqli_connect($conexao);
    echo "<h2> <a href='index.php'>Voltar para a pagina inicial</a><br></h2>";
    echo "</center>";
?>