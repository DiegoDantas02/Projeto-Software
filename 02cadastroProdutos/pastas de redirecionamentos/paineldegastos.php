<!----- conexão-- -->
<?php
include "cabecalho.php";
?>
<!-- --------------- -->
<br>
<main class="container d-flex flex-column align-items-center justify-content-center col-md-8 col-lg-6 m-auto border rounded p-4 bg-light shadow-sm mt-5">
  <form action="salvar-salario.php" method="post" class="text-center">
<br>
<br>
    <div class="form-group">
      <label for="nomeEmpresa">#</label>
      <br>
      <input type="text" class="form-control" id="nomeEmpresa" name="nomeEmpresa" required>
    </div>
<br>
<br>
    <div class="form-group">
      <label for="salarioAtual">#</label>
      <input type="number" class="form-control" id="salarioAtual" name="salarioAtual" required>
    </div>
<br>
<br>
    <button type="submit" class="btn btn-success btn-block mt-5 mb-5">SALVAR</button>
<br>  
<br>  
</form>
</main>


<br> <br><br><br><br>

<!-- --------------- -->

<?php
include "rodape.php" ;
?>