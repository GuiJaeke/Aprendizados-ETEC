<?php

$nome = 'guilherme jaeke';
$senha = '12';

if(isset($_POST['nome']) && isset($_POST['senha'])){
    if(($_POST['nome'] == $nome) && ($_POST['senha'] == $senha)) {
        if(isset($_POST['modoescuro'])) {
            setcookie('modoescuro', true, time()+120);
        } else {
            setcookie('modoescuro', 0, time()+120);
        }
        if($_POST['tamanhofonte'] == 'pequeno') {
            setcookie('tamanhofonte', 'pequeno', time()+120);
        } elseif($_POST['tamanhofonte'] == 'medio') {
            setcookie('tamanhofonte', 'medio', time()+120);
        } else {
            setcookie('tamanhofonte', 'grande', time()+120);
        }
        setcookie('salvaNome', $_POST['nome'], time()+120);
        setcookie('salvaSenha', $_POST['senha'], time()+120);
        header('location:index.php');
    }
    else{
        echo 'o usuário ou senha estão incorretos';
    }
}

else{
    echo 'preencha o usuário ou senha';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="login.php">
        <input type="text" name="nome" placeholder="insira seu usuário">
        <input type="password" name="senha" placeholder="digite sua senha">
        <label for="modoescuro">Modo Escuro?</label>
        <input type="checkbox" name="modoescuro">
        <select name="tamanhofonte">
            <option value="pequeno">pequeno</option>
            <option value="medio">medio</option>
            <option value="grande">grande</option>
        </select>
        <input type="submit" value="enviar">
        
    </form>
    
</body>
</html>