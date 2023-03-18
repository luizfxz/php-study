<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Tipos de string </h1>

    <?php   
    
        /* 
        
            double quoted (Aspas duplas) == existe interpretação do conteudo

            concatenar == "Curso" . "PHP" utiliza-se ".";

            single quoted (Aspas simples) == não existe interpretação do conteudo

            heredoc

            nowdoc
        
        */

        // Exemplo de double quoted/single

        $nome = "Luiz";

        echo "Seja bem vindo $nome! \u{1F60A} <br>"; // interpretação do conteudo

        echo 'Seja bem vindo $nome! \u{1F60A}'; // não interpretação do conteudo

        const ESTADO = "MG";

        echo "<br> Moro no " . ESTADO; // mostrar constante basta concatenar 

        echo "<br>Ano que vem  será " . date('Y');

        $nom = "Rodrigo";

        $snom = "Nogueira";

        echo "<br>$nom \"Minotauro\" $snom"; // A "\" serve como sequencia de escape para nao interpretar entre elas.

        /* Sequencia de escape
        
            \n Nova linha

            \t Tabulacao horizontal

            \\ barra invertida

            \$ Sinal de cifrao

            \u{} codepoint unicode
        
        */

        /* -------------------------------------------------------------  */

        // Sintaxe heredoc

            $curso = "PHP";

            $ano = date('Y');

            //possui interpretacao do conteudo
            echo <<< BATATA

                <br> Estou estudando $curso em $ano

            BATATA;

        //Sintaxe nowdoc 

            $curso = "PHP";

            $ano = date('Y');

            // nao possui interpretacao do conteudo
            
            echo <<< 'BATATA'

                <br> Estou estudando $curso em $ano

            BATATA;
    ?>
</body>

</html>