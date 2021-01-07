<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="root">
        <div class="exercicio">
            <h1>Exercício 01</h1>
            <?php include 'exercicio01.php';?>
            <hr>
        </div>
        
        <div class="exercicio">
            <h1>Exercício 02</h1>
            <form action="index.php" method="get">
                <input type="text" name="largura" id="input-largura" placeholder="Largura">
                <input type="text" name="altura" id="input-altura" placeholder="Altura">
                <input type="submit" name="submit" id="input-submit">
            </form>
            <?php include 'exercicio02.php';?>
            <hr>
        </div>

        <div class="exercicio">
            <h1>Exercício 03</h1>
            <?php include 'exercicio03.php';?>
            <hr>
        </div>

        <div class="exercicio">
            <h1>Exercício 04</h1>
            <form action="index.php" method="get">
                <input type="text" name="lado01" id="input-lado01" placeholder="lado01">
                <input type="text" name="lado02" id="input-lado02" placeholder="lado02">
                <input type="text" name="lado03" id="input-lado03" placeholder="lado03">
                <input type="submit" name="submit" id="input-submit-ex04">
            </form>
            <?php include 'exercicio04.php';?>
            <hr>
        </div>

        <div class="exercicio">
            <h1>Exercício 05</h1>
            <form action="index.php" method="get">
                <input type="text" name="fibo" id="input-fibo" placeholder="number">
                <input type="submit" name="submit" id="input-submit-ex05">
            </form>
            <?php include 'exercicio05.php';?>
            <hr>
        </div>
    </div>

</body>
</html>