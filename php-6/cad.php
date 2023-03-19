<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1> Resultado </h1>
    </header>
    <main>

    <?php 
    
        /* var_dump($_REQUEST);
         União entre $_GET : $_POST : $_COOKIES */

         $nome = $_GET["nome"] ?? "Nome não válido";
         $sobrenome = $_GET["sobrenome"] ?? "Sobrenome desconhecido";

         if ($nome == "" || $sobrenome == "" ) {
            echo "Erro! Informações incompletas";
         } else {
            echo "<p> É um prazer te conhecer, <strong> $nome $sobrenome </strong>! </p> ";
         }

         
    
    ?>
    <p><a href="javascript:history.go(-1)"> Voltar </a></p>

    </main>
</body>
</html>