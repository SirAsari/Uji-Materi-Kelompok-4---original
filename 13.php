<?php 
function tampil(){
    $num1 = 1;
    $num2 = 2;
    $num4 = 4;

    $pertambahan = $num1 + $num2;
    $kali = $num1 * $num2;
    $bagi = $num4 / $num2;
    $kurang = $num4 - 2;
    $modulo = $num4 % $num2;

    echo " $num1 + $num2 = " . $pertambahan . "<br>";
    echo "$num1 * $num2 = " .$kali . "<br>";
    echo "$num4 / $num2 = " .$bagi . "<br>";
    echo "$num4 - 2 = " .$kurang . "<br>";
    echo "$num4 % $num2 = " .$modulo;
}

echo tampil();
?>