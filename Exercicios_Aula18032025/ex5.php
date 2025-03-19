<?php 
    function fibonacci($termos){
        if ($termos <= 2){
            if ($termos == 1)
                $sequencia = "0";
            else
                $sequencia = "0, 1";
        } else {
            $fibo = [0,1];

            for ($i = 2; $i < $termos; $i ++){
                $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
            }
        
            $sequencia = implode(", ",$fibo);
        }

        return $sequencia;
    }

    echo fibonacci(20);
?>