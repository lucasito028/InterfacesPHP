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
    
    $teste = new Calculo1(1, 2);
    $v1 = $teste->adicao();
    echo "$v1";


    ?>
</body>
</html>