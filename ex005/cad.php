<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php

        $n = $_GET["nome"] ?? "Desconhecido";
        $s = $_GET["sobrenome"] ?? "Desconhecido"; //isso serve só quando retiramos o atributo nome ou sobrenome da url, mas se não preenche o nome ou sobrenome lá no html, ele vem como vazio
        echo "<p>É um prazer te conhecer, <b>$n $s</b>!<p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>

</body>

</html>