<?php
    // defende de comandos para o banco de dados
    $modelo = mysqli_real_escape_string($conexao, $_POST['titulo']);
    $marca = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $valor = mysqli_real_escape_string($conexao, $_POST['autor']);
    $ano = mysqli_real_escape_string($conexao, $_POST['valor']);
    $cor = mysqli_real_escape_string($conexao, $_POST['isbn']);

    $sql = "INSERT INTO livros (
        titulo,
        descricao,
        autor,
        valor,
        isbn
    )VALUES(
        '$titulo',
        '$descricao',
        '$autor',
        '$valor',
        '$isbn'
    )";

    mysqli_query($conexao, $sql) or die ("Erro ao adicionar livro".mysqli_error(($conexao)));

    echo "O livro $titulo foi adicionado com sucesso!";
?>