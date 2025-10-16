<?php
$i = 1;
while ($i <= 20) {
    echo $i . " / ";
    $i++;
}
?>
<br>

<!-- EXERCICE 2 -->
<?php

$i = 20;
do {
    echo $i . " ";
    $i--;
} while ($i >= 0);
?>
<br>

<!-- EXERCICE 3 -->
<?php

for ($i = 1; $i <= 10; $i += 1) {
    $resultat = 7 * $i;
    echo "7 x $i = $resultat<br>";
}
?>
<br>

<!-- EXERCICE 4 -->
 <?php 
 $resultat = 0;
 for ($i = 1; $i <= 100; $i++) {
    $resultat +=  $i;
 }
 echo $resultat . " ";
?>
<br>

<!-- EXERCICE 5 -->
 <?php 
 

    for ($a = 1; $a <= 5 ; $a++) {
        for($b = 1; $b <= $a ; $b +=1) {
            echo "*";
        }
        echo "<br>";
    }
?>