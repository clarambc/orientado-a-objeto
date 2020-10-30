<?php
    require_once 'classe.php';

    $condominioAtrasado = new Condominio();
    $condominioAtrasado->valorCondominio = 700;

    echo $condominioAtrasado->valorCondominio +700;