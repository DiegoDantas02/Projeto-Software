<!----- conexão-- -->
<?php
include "cabecalho.php";
?>



<!-- ----------- inicio menu----------- -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mt-4 mt-3"> Sistema de Finanças </h2>
        </div>
    </div>

    <div class="row text-center">
        <div class="col m-5 border rounded pt-3 pb-3">
            <a href="salario.php" class="btn">
                <img src="../img/salario.png">
                <br>
                <strong>SALARIO</strong>
                <BR></BR>
                <P class="text-success">R$1.200,00</P>
            </a>
        </div>

        <div class="col m-5 border rounded pt-3 pb-3">
            <a href="economizado.php" class="btn">
                <img src="../img/Economia.png">
                <br>
                <strong>ECONOMIZADO</strong>
                <br><br>
                <P class="text-warning">R$200,00</P>
            </a>
        </div>
        <div class="col m-5 border rounded pt-3 pb-3">
            <a href="gastoscomocartao.php" class="btn">
                <img src="../img/cartao.png">
                <br>
                <strong>GASTOS COM O CARTÃO</strong>
                <br><br>
                <P class="text-danger">R$800,00</P>
            </a>
        </div>

    </div>

</div>
<!-- ---------------------- end menu -->

<!-- --------- -------- -->


<div class="row text-center">
    <div class="col m-5 border rounded pt-3 pb-3">
        <a href="gastosemdinheiro.php" class="btn">
            <img src="../img/dinheiro.png">
            <br>
            <strong>GASTOS EM DINHEIRO</strong>
            <br> <br>
            <P class="text-danger">R$100,00</P>

        </a>
    </div>

    <div class="col m-5 border rounded pt-3 pb-3">
        <a href="paineldegastos.php" class="btn">
            <img src="../img/painel.png">
            <br>
            <strong>PAINEL DE GASTOS </strong>
            <br> <br>
            <P class="text-secondary">R$2.000,00</P>
        </a>
    </div>
    <div class="col m-5 border rounded pt-3 pb-3">
        <a href="configuracao.php" class="btn">
            <img src="../img/configuracoes.png">
            <br>
            <strong>CONFIGURAÇÕES</strong>
        </a>
    </div>
</div>
</div>
<?php
    include "rodape.php";
    ?>

