<h1>Adicionar um novo carro</h1>

<form action="index.php?menu=dbAdicionarCarro" method="post">
    <div class="form-group">
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn">
    </div>

    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">
    </div>

    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor">
    </div>

    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor">
    </div>

<button type="submit">Comprar</button>
</form>
