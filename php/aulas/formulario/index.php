<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <main>
        <h1>Cadastro</h1>

        <form action="pages/menu.php" method="get">
            <div class="form-input">
                <label for="name">Nome</label>
                <input placeholder="Insira o seu nome completo" name="nome" id="nome" type="text">
            </div>

            <div class="form-input">
                <label for="name">E-mail</label>
                <input placeholder="Insira o seu email" name="email" id="email" type="text">
            </div>

            <div class="form-input">
                <label for="name">Senha</label>
                <input placeholder="Insira a sua senha" name="senha" id="senha" type="password">
            </div>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>