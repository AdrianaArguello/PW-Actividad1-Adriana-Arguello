<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo CSS</title>
    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/629bdd4e7c.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php

    $lado1="";
    $lado2="";

    if($_POST){
        $lado1 = $_POST['cateto1'];
        $lado2 = $_POST['cateto2'];
    }
    ?>
    <div class="flex__container">
        <form class="form" action="index.php" method="POST">
            <div class="form__section">
            <h1>Calculadora del teorema de pitagoras</h1>
                <input type="number" class="form__input" name="cateto1" value="3" >
            </div>
            <div class="form__section">
                <input type="number" class="form__input" name="cateto2" value="4">
            </div>
            <div class="form__section">
                <input type="submit" class="form__input">
            </div>
        </form>
        <div class="form-img">
            <div class="img-container">
                <div>
                    <img src="img/triangulo.png">
                </div>
            </div>
        </div>
    </div>
    <?php
        $hipo=0;
        if($_POST && !empty($lado1) && !empty($lado2) ){
            $hipo = sqrt(pow($lado1,2) + pow($lado2,2));
            echo "<h2 style='color:#000'> Valor de Hipotenusa: ".$hipo."</h2>";
        }
    ?>
</body>
</html>
