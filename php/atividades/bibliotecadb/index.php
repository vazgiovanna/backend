<?php
    include('database/connect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>café & verso</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php?menu=home">home</a>
            <a href="index.php?menu=lista">acervo</a>
        </nav>
    </header>

    <main>
        <?php
        if(isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        }else{
            $pagina = 'home';
        }
        
        switch($pagina){
            case 'home':
                include("pages/home/home.php");
                break;
            case 'lista';
                include("pages/acervo/acervoLivros.php");
                break;
            case 'adicionarCarro':
                include("pages/acervo/addLivro.php");
                break;
            case 'dbAdicionarCarro':
                include("pages/listaCarros/addLivroDB.php");
                break;
            default:
                include("pages/home/home.php");
                break;
        }
        ?>
    </main>
</body>
</html>