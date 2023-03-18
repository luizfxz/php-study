<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tipos primitivos escalares </h2>

    <?php 
    
        $sobrenome =  "Silva"; // String

        $idade = 34; // Int/integer

        $peso = 85.6; // Float/double/real (não existe a partir da versão 7.2)

        $casado = true; // boolean / bool

        // 0x = hexadecimal 0b = binário 0 = octal

        $valor_1 = 300;

        var_dump($valor_1); // mostra informacoes da variavel


        $num = 5e5; // valor x  10^valor;

        echo "O valor é $num";

        /* Categorias de tipos primitivos 
        
            compostos = array, object

            especiais = null, resource, callabe, mixed
        
        
        */

        $vet = [6, 6.2, "Maria", 3, false];

        var_dump($vet)

    ?>

</body>
</html>