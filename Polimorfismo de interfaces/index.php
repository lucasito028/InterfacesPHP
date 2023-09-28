<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    require_once 'OperacoesMatematicas.php';
    require_once 'Calculadora.php';
    require_once 'Calculo1.php';
    require_once 'Calculo2.php';

    $teste2 = new Calculo2();
    $teste = new Calculo1();
    $v1 = $teste2->adicao(2, 1);
    $v2 = $teste->multiplicacao(5, 3);
    
    echo "$v1<br>$v2";


    ?>
</body>
</html>