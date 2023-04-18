<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS</title>
</head>
<body>
    <section class="dados">
        <?php
            $nome = $_GET["nome"];
            $email = $_GET["email"];
            $senha = $_GET["senha"];
    
            echo $nome;
            echo "<br><br>";
            echo $email;
            echo "<br><br>";
            echo $senha;
        ?>
    </section>
    <form action="editardados.php" method="get">
        <input type="hidden" name="nome" value=<?php echo $nome; ?>>
        <input type="hidden" name="email" value=<?php echo $email; ?>>
        <input type="hidden" name="senha" value=<?php echo $senha; ?>>
        <br>
        <input type="submit" value="EDITAR">
    </form>
</body>
</html>