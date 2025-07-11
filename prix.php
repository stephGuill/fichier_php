<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php
    const TAUX_TVA = 0.2;
     $prixHT =  20;
     $TTC = TAUX_TVA *  $prixHT;

     echo $TTC;
     ?>
</body>
</html>