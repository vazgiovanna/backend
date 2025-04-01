<h1>bem-vindo ao nosso acervo!<h1>

<a href="index.php?menu=addLivro">
    <button type="button">Adicionar livro</button>
</a>

<table>
    <tr>
        <th>ISBN</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Valor</th>
    </tr>

<?php
    $sql = "SELECT * FROM carros";
    // pedido
    $query = mysqli_query($conexao, $sql) or die ("Erro na requisição!".mysqli_error($conexao));

    // fetch_asso = vai acessar uma query e contar os resultados
    while($dados = mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td><?=$dados['modeloCarro']?></td>
                <td><?=$dados['marcaCarro']?></td>
                <td><?=$dados['valorCarro']?></td>
                <td><?=$dados['anoCarro']?></td>
                <td><?=$dados['corCarro']?></td>
            </tr>
        <?php
    }
?>
</table>