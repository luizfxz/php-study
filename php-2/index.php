<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exemplo de PHP</h1>

    <?php 

        date_default_timezone_set("America/Sao_Paulo"); // definir padrao data/hora brasil

        echo " E a hora atual é " . date("G:i:s\t");  // hora:minuto:segundo

        echo "Hoje é dia " . date("d/m/y"); // dia/mes/anos

    
    ?>

</body>
</html>