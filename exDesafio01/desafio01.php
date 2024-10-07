<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>

        <?php
        $numero = $_GET["numero"];
        echo "O número escolhido foi <b>$numero</b><br>";

        $antecessor = $numero - 1;
        echo "<p>O antecessor de $numero é <b>$antecessor</b><br></p>";

        $sucessor = $numero + 1;
        echo "O sucessor de $numero é <b>$sucessor</b><br>";
        ?>

    </main>
</body>

</html>