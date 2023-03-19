<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de número </title>
</head>
<body>
    <header>

    <h1> Sorteador de número </h1>

    </header>
    <section>

    <p> Gerando um número aleatório de 1 até 100... </p>

    <?php 
    
        echo("<p> O número gerado foi: " . rand(1, 100). "</p>")
    
    
    ?>

    <button onclick="window.location.reload()"> Gerar outro</button>

    </form>
    </section>
</body>
</html>