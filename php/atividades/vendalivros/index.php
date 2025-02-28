<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - Livro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            echo "<img href='link'><img src='https://m.media-amazon.com/images/I/61CpTX3QbFL._AC_UF1000,1000_QL80_.jpg'>";

            $titulo = "A morte de Ivan Ilitch<br>";
            $autor = "Lion Tolstói<br>";
            $descricao = "A Morte de Ivan Ilitch é uma das obras mais profundas e tocantes de Leon Tolstói, explorando a vida e a morte através da história de Ivan Ilitch Golovin, um juiz de meia-idade que, ao ser confrontado com uma doença terminal, passa a refletir sobre a futilidade de sua existência e os verdadeiros valores da vida.<br>";

            echo $titulo;
            echo $autor;
            echo $descricao;
        ?>
    </header>
    
</body>
</html>