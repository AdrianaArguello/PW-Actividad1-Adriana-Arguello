<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora octagono regular</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    $longitud="";
    $apotema="";

    if($_POST){
        $longitud = $_POST['longitud'];
        $apotema = $_POST['apotema'];
    }
    ?>
    <div class="container">
        <div class="flex_container">
            <h1>Calculadora de area de un octagono regular</h1>
            <form class="form" action="index.php" method="POST">
                <div class="form__section">
                    <input type="number" class="form__input" name="longitud" placeholder="Ingresa la longitud de los lados " value="<?php echo "".$longitud; ?>">
                </div>
                <div class="form__section">
                    <input type="number" class="form__input" name="apotema" placeholder="Ingresa la apotema" value="<?php echo "".$apotema; ?>">
                </div>
                <div class="form__section">
                    <input type="submit" class="form__input">
                </div>
            </form>
            <?php
                $areaL="";
                $areaA="";

                if($_POST){
                    if(!empty($longitud)){
                        $areaL = (2*pow($longitud,2))/tan(pi()/8);
                        echo "<h2 style='color: #000;'> Area por longitud = ".$areaL."</h2>";
                    }
                    if(!empty($apotema)){
                        $areaA = (8*pow($apotema,2)*tan(pi()/8));
                        echo "<h2 style='color: #000;'> Area por apotema = ".$areaA."</h2>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>

