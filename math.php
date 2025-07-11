<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
   $a = 5;
   $b = 10;
   
   $somme = $a + $b;
   $difference = $a <> $b;
   $produit = $a * $b;
   $quotient = $a / $b;
   $reste = $a % $b;
   echo "la somme à $somme";
   echo "la difference à $difference";
   echo "le produit à $produit";
   echo "le quotient à $quotient";
   echo "le reste à $reste";
   ?>
   <br>
   <?php 
   $a = 5;
   $b = 10;
   echo "a==b donne" .($a==$b ?'true':'false');
   ?>
   <?php
   $x = true;
   $y = false;
   echo "xANDy donne" .($x&&$y ?'true':'false');
   ?>
   <br>
   <?php
   $a =5;
   $b =10;
   $c =3;

   $addition = $a + $b;
   $multiplication = $b * $c;
   $division = $b / $a;
   $soustraction = $c - $b;
   $reste = $b % $c;
   echo "addition à $addition";
   echo "multiplication à $multiplication";
   echo "division à $division";
   echo "soustraction à $soustraction";
   echo "reste à $reste";
   ?>
</body>
</html>