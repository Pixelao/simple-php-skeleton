<?php

$anios = (int) $_GET["dato1"];
$sueldo = (float) $_GET["dato2"];
$ahorroMensual = (int) $_GET["dato3"];
$ahorrado = (float) $_GET["dato4"];

$mesesTrabajados = $anios * 12;
$sueldoAnual = $sueldo * 12;
$sueldoGanadoAnios = $mesesTrabajados * $sueldo;
$sueldoGanadoMasAhorrado = $sueldoGanadoAnios + $ahorrado;
$ahorroAnual = $ahorroMensual * 12;
$ahorroTotal = $ahorroAnual * $anios;

$response = array(
    'Dato1' => $mesesTrabajados,
    'Dato2' => $sueldoGanadoAnios,
    'Dato3' => $sueldoAnual,
    'Dato4' => $sueldoGanadoMasAhorrado,
    'Dato5' => $ahorroAnual,
    'Dato6' => $ahorroTotal
);

echo json_encode($response);
