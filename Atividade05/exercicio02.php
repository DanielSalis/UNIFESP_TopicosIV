<!-- COVID-19: Programa que estima quantos alunos podem ficar dentro de uma sala de aula. Para evitar o contato, é preciso respeitar 
distância mínima entre as cadeiras, de 1,0m a 1,5 m. Neste cenário, é necessário garantir pelo menos 2,25m2 por aluno. 
O usuário deve informar a largura e comprimento do local. Considere a área retangular. -->

<?php
    $litros = 10;
    $km = 150;

    $l = $_GET['largura'];
    $a = $_GET['altura'];

    echo "<h3> Resultado: ".$l * $a ."</h3>"

?>