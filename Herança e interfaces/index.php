<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'TransportePublico.php';
    require_once 'Veiculo.php';
    require_once 'Onibus.php';

    $testar = new Onibus();
    $testar->ligarMotor();
    $testar->pegarTransportePublico();
    ?>
</body>
</html>