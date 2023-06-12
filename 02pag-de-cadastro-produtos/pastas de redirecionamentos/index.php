<!----- conexão-- -->
<?php
include "cabecalho.php";
?>



<!-- ----------- inicio menu----------- -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mt-4 mt-3 "><strong> Sistema de Finanças </strong> </h2>
        </div>
    </div>

    <div class="row text-center">
        <div class="col m-5 border rounded pt-3 pb-3 bg-light shadow">
            <a href="salario.php" class="btn">
                <img src="../img/salario.png ">
                <br>
                <strong>SALARIO</strong>
                <BR></BR>
                <P class="text-success"><?php $salario = 5000; echo 'R$' . number_format($salario, 2, ',', '.'); ?></P>
            </a>
        </div>

        <div class="col m-5 border rounded pt-3 pb-3 bg-light shadow">
            <a href="economizado.php" class="btn">
                <img src="../img/Economia.png">
                <br>
                <strong>ECONOMIZADO</strong>
                <br><br>
                <?php $economia = 2000; ?>
                <P class="text-warning"><?php echo 'R$' . number_format($economia, 2, ',', '.'); ?></P>
            </a>
        </div>
        <div class="col m-5 border rounded pt-3 pb-3 bg-light shadow">
            <a href="gastoscomocartao.php" class="btn">
                <img src="../img/cartao.png">
                <br>
                <strong>GASTOS COM O CARTÃO</strong>
                <br><br>
                <?php $gastosCartao = 8000; ?>
                <P class="text-danger"><?php echo 'R$' . number_format($gastosCartao, 2, ',', '.'); ?></P>
            </a>
        </div>

    </div>

</div>
<!-- ---------------------- end menu -->


<div class="row text-center">
    <div class="col m-5 border rounded pt-3 pb-3 bg-light shadow">
        <a href="gastosemdinheiro.php" class="btn">
            <img src="../img/dinheiro.png">
            <br>
            <strong>GASTOS EM DINHEIRO</strong>
            <br> <br>
            <?php $gastosDinheiro = 100; ?>
            <P class="text-danger"><?php echo 'R$' . number_format($gastosDinheiro, 2, ',', '.'); ?></P>
        </a>
    </div>

    <div class="col m-5 border rounded pt-3 pb-3 bg-light shadow center">
        <a href="paineldegastos.php" class="btn">
            <img src="../img/painel.png">
            <br>
            <strong>PAINEL DE GASTOS </strong>
            <br> <br>
            <?php $totalGastos = $gastosCartao + $gastosDinheiro; ?>
            <P class="text-secondary"><?php echo 'R$' . number_format($totalGastos, 2, ',', '.'); ?></P>
        </a>
    </div>
    <div class="col m-5 border rounded pt-3 pb-3 bg-light shadow">
        <a href="configuracao.php" class="btn">
            <img src="../img/configuracoes.png">
            <br>
            <strong>CONFIGURAÇÕES DA CONTA </strong>
        </a>
    </div>
</div>
</div>
<!-- ------------------- -->
<?php
    include "rodape.php";
    ?>

