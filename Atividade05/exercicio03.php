<!-- Faça um programa que calcule a área de um trapézio e o volume de uma pirâmide. Usar dados estáticos.-->

<?php
    $baseMaior = 10;
    $baseMenor = 5;
    $altura = 2;

    $resultado = ($baseMaior + $baseMenor) * $altura / 2;

    echo "<h3> Base Maior : ". $baseMaior ."</h3>";
    echo "<h3> Base Menor : ". $baseMenor ."</h3>";
    echo "<h3> Altura : ". $altura ."</h3>";
    echo "<h5>Fórmula = (BaseMaior+BaseMenor) * altura /2</h5>";
    echo "<h3> Resultado : ". $resultado ."</h3>";

?>