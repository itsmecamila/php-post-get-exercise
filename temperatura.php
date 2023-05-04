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
        <form method="POST" action="logica/processamentoTemperatura.php">
            <label>Digite uma temperatura:</label>
            <input type="text" name="inputTemp" placeholder="Digite uma temperatura">
            <select name="selectOperacoes">
                <option value="CParaF">Celsius para Fahrenheit</option>
                <option value="FParaC">Fahrenheit para Celsius</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <h1 id="resultado">
        <?php 
            if(isset($_SESSION['resultadoTemperatura'])){
                echo "Resultado: ". $_SESSION['resultadoTemperatura'];
        }
        ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>