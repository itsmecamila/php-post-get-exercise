<?php

use LDAP\Result;

    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamentoConversor.php">
            <label>Digite um valor:</label>
            <input type="text" name="inputMedida" placeholder="Digite um valor em medida de comprimento">
            <select name="selectOperacoes">
                <option value="CmParaM">Centímetros para Metros</option>
                <option value="MParaCm">Metros para Centímetros</option>
                <option value="MParaKM">Metros para Quilômetros</option>
                <option value="KMParaM">Quilômetros para Metros</option>
            </select>
            <input id="botao" type="submit" value="Converter">
        </form>
        <h1 id="resultado">
        <?php 
            if(isset($_SESSION['resultadoConversor'])){
                echo "Resultado: ". $_SESSION['resultadoConversor'];
        }
        ?>
        </h1>
        <img src="img/google-play.png">
    </div>
    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistema</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>