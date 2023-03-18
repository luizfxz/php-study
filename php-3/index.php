<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        $nome = "Luiz";
        $sobrenome = "Roberto";

        /* Regras para nome identificadores:

            1° Variável sempre começa com "$";
            2° O segundo pode ser "letra" ou o "_"; 
            3° Aceita caracteres [a-z] [A-Z] [0-9] e [_];
            4° Aceita caracteres da tabela ASCII a partir de 128;
            5° Aceita caracters com acento;
            6° Case sensitive;
            7° Nome reservados não podem ser usados;
    
        */
        

        const PAIS = "Italia"; // Constante nao possuem "$"

        echo "<h1> Meu nome é: $nome $sobrenome ! Você mora na " . PAIS . "</h1>" ;
    
    
    ?>

</body>
</html>