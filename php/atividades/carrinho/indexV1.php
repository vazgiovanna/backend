<?php
     session_start();

     // verifica se há valor nulo
     if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
     }
     //$_SESSION['carrinho'] += $_GET['produto'];

     if(isset($_GET['produto'])){
        $_SESSION['carrinho'][] = $_GET['produto'];   
    }

    if(isset($_GET['deletarCarrinho'])){
        $_SESSION['carrinho'] = [] ;
    }
    // var_dump($_SESSION['carrinho']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terabithia</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="cabecalho">
        <h1 class="nomemarca">terabithiashop<h1>
        </div>
    </header>

    <nav>
    <div class="barraNav">
    <a href="?produto=SSD">Adicionar SSD</a>
    <a href="?produto=Disco de memória">Adicionar disco de memória</a>
    <a href="?produto=Memória RAM">Adicionar memória RAM</a>
    <a href="?produto=Placa mãe">Adicionar Placa-mãe</a>
    <a href="?deletarCarrinho=True">Deletar carrinho</a>
    </div>
    </nav>

    <ol>
        <?php
        // foreach(array as alias){}
        // foreach(filmes as filme){filme.nome, filme.desc}
        foreach($_SESSION['carrinho'] as $produto){
            echo "<li> $produto </li>";
        }

        ?>
</body>
</html>