<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
            <h1> Resultado </h1>
    </header>
    <main>

        <?php 

            $numero = $_GET["numero"];

            print("<p>O número escolhido foi: " . $numero . "</p>");
            print("<p>O seu antecessor é:  " . $numero - 1 . "</p>");
            print("<p> O seu sucessor é: " . $numero + 1 . "</p>");

        ?>

        <button onclick="javascript:history.go(-1)"> Voltar </button>

    </main>
</body>
</html>