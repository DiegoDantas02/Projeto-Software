<!----- conexão-- -->
<?php
include "cabecalho.php";
?>
<!-- --------------- -->
<main class="container d-flex flex-column align-items-center justify-content-center col-md-8 col-lg-6 m-auto border rounded p-4 bg-light shadow-sm">
    <form action="salvar-salario.php" method="post" class="text-center">
        <br><br>
        <div class="form-group mt-5 mb-5">
            <label for="nomeCompanhia"> <h5>Nome da Companhia:</h5></label>
            <br>
            <input type="text" class="form-control" id="nomeCompanhia" name="nomeCompanhia" required>
        </div>
        <br><br>
        <div class="form-group">
            <label for="dataCompra"><h5>Data da Compra:</h5></label>
            <br>
            <input type="date" class="form-control" id="dataCompra" name="dataCompra" required>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-lg btn-success mb-5 mt-5">SALVAR</button>
        <br><br>
    </form>
</main>

<br><br>

<?php
include "rodape.php";
?>