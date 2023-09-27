<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'Autenticavel.php';
    require_once 'Usuario.php';
    require_once 'Administrador.php';

        //$teste = new Usuario("Pao", "Pao");
        //$teste = new Administrador("Pao", "Pao", "14 99999-9999");
        $teste = new Usuario("Pao", "Pao");

        $teste->autenticar();

    ?>
</body>
</html>