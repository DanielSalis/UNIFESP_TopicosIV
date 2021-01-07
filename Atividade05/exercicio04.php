<!-- Programa para classificar um triângulo. Informe os tamanhos dos segmentos (a,b,c) e classifique de acordo com equilátero, isósceles e escaleno. -->

<?php

    $l1 = $_GET['lado01'];
    $l2 = $_GET['lado02'];
    $l3 = $_GET['lado03'];
    echo "<h3> Resultado: ". comparar($l1,$l2,$l3) ."</h3>";

    

    function comparar ($l1,$l2,$l3)
    {
        if($l1 == $l2 && $l1 == $l3 && $l2 == $l3){
            echo "Triangulo Equilátero";
            return;
        }elseif ($l1 == $l2 && $l1 != $l3){
            echo "Triangulo Isóceles";
        }elseif ($l1 != $l2 && $l2 == $l3){
            echo "Triangulo Isóceles";
        }else{
            echo "Triangulo escaleno";
        }
    }

?>