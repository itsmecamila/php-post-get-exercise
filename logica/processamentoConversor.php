<?php

require 'funcoesCalculo.php';
$resultadoConversor = "";
session_start();


if(!empty($_GET['inputMedida'])){

    $value = $_GET['inputMedida'];

    if($_GET['selectOperacoes'] == "CmParaM"){
        $resultadoConversor = $value . " centímetros para metros = " . forM($value);
    }
    else if($_GET['selectOperacoes'] == "MParaCm"){
        $resultadoConversor = $value . " metros para centímetros = " . forCM($value);
    }

    else if($_GET['selectOperacoes'] == "KMParaM"){
        $resultadoConversor = $value . " KM para metros = " . forMetros($value);
    }
    
    else if($_GET['selectOperacoes'] == "MParaKM"){
        $resultadoConversor = $value . " metros para KM = " . forKM($value);
    }
    $_SESSION['resultadoConversor'] =$resultadoConversor;

    header('location:../conversor.php');
    die();
}

?>
