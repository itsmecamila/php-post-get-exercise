<?php
    function adicao($num1, $num2){
        $result = $num1 + $num2;
        return($result);
    }

    function subtracao($num1, $num2){
        $result = $num1 - $num2;
        return($result);
    }

    function multiplicacao($num1, $num2){
        $result = $num1 * $num2;
        return($result);
    }

    function divisao($num1, $num2){
        $result = $num1 / $num2;
        return($result);
    }

    function forCM($value){
        return ($value * 100);
    }

    function forM($value){
        return ($value / 100);
    }

    function forCelsius($value){
        return ($value - 32) * 5 / 9;
    }

    function forFahrenheit($value){
        return ($value * 9 / 5 + 32);
    }

    function forKM($value){
        return $value / 1000;
    }

    function forMetros($value){
        return $value * 1000;
    }
?>
