<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR DADOS</title>
</head>
<body>
    <form action="receberform.php" method="get" class="dados">
    <label for="">
            NOME:
            <input type="text" name="nome" placeholder="Digite seu nome" value=<?php echo $_GET["nome"]; ?>>
        </label>
        <label for="">
            EMAIL:
            <input type="email" name="email" value=<?php echo $_GET["email"]; ?>>
        </label>
        <label for="">
            SENHA:
            <input type="password" name="senha" value=<?php echo $_GET["senha"]; ?>>
        </label>
        <input type="submit" value="CONFIRMAR">
    </form>
</body>
</html>