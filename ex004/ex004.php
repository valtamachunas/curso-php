<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <?php

    $nome = "Valeska";
    $sobrenome = "Tamachunas";
    echo "$nome $sobrenome \u{1F497} <br>";

    const ESTADO = "SP";
    echo "Moro no estado " . ESTADO . "<br>";

    echo "Estamos em " . date("Y") . "<br>";

    echo "$nome\"Val\"$sobrenome <br>";
    ?>

</body>

</html>