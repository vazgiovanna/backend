<?php
require_once 'database/conexao.php';

// Consulta ao banco de dados
$sql = "SELECT nome, valor, imagem FROM catalogo ORDER BY nome ASC";
$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Comidas</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>
        <img src="images/rango.png" alt="Logo Comida">
        <h1>Catálogo de Comidas</h1>
    </header>
    <main>
        <section>
            <h2>Itens do Catálogo</h2>
            <div class="catalogo-lista">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <div class="item-card">
                            <img src="<?php echo htmlspecialchars($row['imagem']); ?>" alt="<?php echo htmlspecialchars($row['nome']); ?>">
                            <h3><?php echo htmlspecialchars($row['nome']); ?></h3>
                            <p class="valor">R$ <?php echo number_format($row['valor'], 2, ',', '.'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Nenhum item encontrado no catálogo.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <footer>
    &copy; <?php echo date('Y'); ?> Catálogo de Comidas
    </footer>
</body>
</html>
<?php
$conexao->close();
?>
