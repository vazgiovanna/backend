<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <link rel="stylesheet" href="../styles/all.css">
</head>
<body>
    <header>
        <div id="logo">Logo</div>
            <nav>
                <ul>
                    <li><a href="menu.php"></a>Home</li>
                    <li><a href=".../index.php"></a>Log out</li>
                </ul>
            </nav>
        </header>

    <main>
        <?php
        //$titulo = "Matrix";
        //var_dump($titulo);
        //$status = True;
        //var_dump($status)

        var_dump($_REQUEST); //get, post, cookies
        //var_dump($_GET)

        $nome =$_REQUEST['nome'];
        $email =$_REQUEST['email'];
        $senha =$_REQUEST['senha'];

        ?>
    </main>
    <?php
        echo "Olá $nome. Seja bem-vindo!<br>";
        echo "$nome, seu e-mail é $email<br>";
        echo "E esta é a senha correspondente: $senha.<br>";

    ?>

    <footer>
        Todos direitos reservados a Giovanna.
        <?php echo date("Y") ?>
    </footer>
</body>
</html>