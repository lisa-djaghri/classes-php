<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Document</title>
</head>
<body>
<!--EXERCICE 1-->
    <?php
$a = 5;
$b = 10;
 echo $a + $b . "<br>";
 echo $a - $b . "<br>";
 echo $a* $b . "<br>";
 echo $a / $b . "<br>";
 echo $a % $b . "<br>"; ?>

<!--EXERCICE 2-->
<br>
<?php echo "a == b donne " . ($a == $b ? 'true' : 'false') . "<br>";
 echo "a === b donne " . ($a === $b ? 'true' : 'false') . "<br>";
 echo "a != b donne " . ($a != $b ? 'true' : 'false') . "<br>";
 echo "a <> b donne " . ($a <> $b ? 'true' : 'false') . "<br>";
 echo "a !== b donne " . ($a !== $b ? 'true' : 'false') . "<br>";
 echo "a > b donne " . ($a > $b ? 'true' : 'false') . "<br>";
 echo "a < b donne " . ($a < $b ? 'true' : 'false') . "<br>";
 echo "a >= b donne " . ($a >= $b ? 'true' : 'false') . "<br>";
 echo "a <= b donne " . ($a <= $b ? 'true' : 'false') . "<br>";
 echo "a <=> b donne " . ($a <=> $b ? 'true' : 'false') . "<br>"; ?>

<!--EXERCICE 3-->
<br>
<?php 
$x = true;
$y = false;

echo "x AND y donne " . (($x and $y) ? 'true' : 'false') . "<br>";
echo "x OR y donne " . (($x or $y) ? 'true' : 'false') . "<br>";
echo "x XOR y donne " . (($x xor $y) ? 'true' : 'false') . "<br>";
echo "x NOT y donne " . ((!$x) ? 'true' : 'false') . "<br>";
echo "x AND y donne " . (($x && $y) ? 'true' : 'false') . "<br>";
echo "x OR y donne " . (($x || $y) ? 'true' : 'false') . "<br>"; ?>

<!--EXERCICE 4-->
<br>
<?php
$a = 5;
$b = 10;
$c = 3;

$a += $b;
echo $a . "<br>"; //15

$b *= $c;
echo $b . "<br>"; //30

$b /= $a ;
echo $b . "<br>"; // 2

$b -= $c ;
echo $b . "<br>"; // -1

$b %= $c ;
echo  $b . "<br>"; // -1
?>

</body>
</html>