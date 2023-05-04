<?php

require 'funcoesCalculo.php';
$resultadoTemperatura = "";
session_start();


if(!empty($_POST['inputTemp'])){

    $value = $_POST['inputTemp'];

    if($_POST['selectOperacoes'] == "CParaF"){
        $resultadoTemperatura = $value . " para Fahrenheit = " . forFahrenheit($value);
    }
    else if($_POST['selectOperacoes'] == "FParaC"){
        $resultadoTemperatura = $value . " para grau Celsius = " . forCelsius($value);
    }

    $_SESSION['resultadoTemperatura'] = $resultadoTemperatura;

    header('location:../temperatura.php');
    die();
}

?>
