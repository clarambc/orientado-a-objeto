<?php
    require_once 'classe-comanda.php';

    $contaFechada = new Consumo();
    $contaFechada->consumoTotal = 120;
    $contaFechada->consumoPorPessoa = 30;
    $contaFechada->mesa = "02";
    $contaFechada->garcon = "Ana";

    echo $contaFechada->consumoTotal/$contaFechada->consumoPorPessoa;