<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="crud.php" method="POST">
        <p>Usuario</p>
        <input id="usuario">
        <p>Senha</p>
        <input type="password" id="senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
    <?php 
        //require_once "crud.php";

    ?>
</body>
</html>