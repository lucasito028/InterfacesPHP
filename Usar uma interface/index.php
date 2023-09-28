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
    require_once 'Sistemalogin.php';

        //$teste = new Usuario("Pao", "Pao");
        //$teste = new Administrador("Pao", "Pao", "14 99999-9999");

        $usuario = new Usuario("usuario@example.com", "senha123");
        $sistemaDeLogin = new SistemaDeLogin($usuario);
        $sistemaDeLogin->efetuarLogin("usuario@example.com", "senha123");


    ?>
</body>
</html>