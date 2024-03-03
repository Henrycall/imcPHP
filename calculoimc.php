<?php

function classificarIMC($imc) {
    $faixas = array(
        '18.5'       => 'Magreza',
        '24.9'       => 'Saudável',
        '29.9'       => 'Sobrepeso',
        '34.9'       => 'Obesidade Grau I',
        '39.9'       => 'Obesidade Grau II',
        (string)PHP_FLOAT_MAX => 'Obesidade Grau III'
    );

    foreach ($faixas as $limiteSuperior => $classificacao) {
        if ($imc <= (float)$limiteSuperior) {
            echo "Atenção, seu IMC é $imc, e você está classificado como $classificacao";
            return;
        }
    }
}

classificarIMC(50);

?>
