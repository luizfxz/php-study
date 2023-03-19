<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Funções aritméticas </h1>

    <?php 
    
        $R = abs(-2000); // valor absoluto de um número (sem sinal)

        print("A respota é $R<br>");


       $s =  base_convert(254, 10, 2) ; // conversor de base numerica  

       print($s ."<br>");

       /* 
       
        ceil() = Arredondar pra cima
        floor() = arredondar pra baixo
        round() = arrendondar "normal"
       
        hypot() = calcular hipotenusa
 
        intdiv() = divisão inteira

       */

       $p = 5%2; // divisão inteira

       $o = intdiv(5, 2);

       print($o."<br>");

        print($p);

        /* 
        
            min() = valor minimo
            max() = valor maximo
            
            pi() = valor de pi ou M_PI

            pow() = potencia

            A diferença entre pow() e ** você pode a ordem de precedencia


        */

        $potencia = pow(12, 132);

        print("<br> $potencia");

        /* 

            sin() = seno
            cos() = cosseno
            tan() = tangente

            sqrt() = raiz quadrada ou valor ** (1/2)
        
        
        */

        $raiz = sqrt(25);

        print("<br>".$raiz);

    
    ?>
</body>
</html>