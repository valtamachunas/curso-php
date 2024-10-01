<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>

<body>
    <?php
    $nome = "Valeska";
    $sobrenome = "Tamachunas";
    const PAIS = "Brasil";

    echo "Muito prazer $nome $sobrenome! Você mora no " . PAIS . ".<br>";

    $telefone_contato_fornecedor = "Snake Case";
    $camelCase = "Camel Case";

    // 0b - binario
    // 0x - hexadecimal
    // 0 - octal

    $num = 010;
    // o resultado da 8 pq colocar um 0 na frente transforma o numero em octal
    echo "o valor de num é $num <br>";

    $testeVarDump = "Gustavo";
    var_dump($testeVarDump);
    echo "<br>";

    $numero = (int) "10";
    echo "$numero <br>";

    $vetor = [2, 7, "Ano", true];
    var_dump($vetor)



    ?>
</body>

</html>