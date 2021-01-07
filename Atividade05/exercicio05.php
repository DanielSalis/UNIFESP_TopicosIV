<!-- 5) Programa para calcular a série de Fibonacci: O termo estático e imprima a série. -->

<?php

    $n= $_GET['fibo'];
    $resultado = Fibonacci($n);

    echo "<h3> Sequencia de Fibonacci de $n: ". $resultado ."</h3>";

    function Fibonacci($x){
        if ($x == 1 || $x == 0)
        {
            return 1;
        }
        else {
            return Fibonacci($x - 1) + Fibonacci($x - 2);
        }

     }
  

?>