<?php

//Andy Aquino 0909-22-1669

$a = 0; // Variable numeros impares
$b = 0; // Variable numeros pares

for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        // Si el número es par
        $b += $i;
    } else {
        // Si el número es impar
        $a += $i;
    }
}

echo "La suma de los numeros impares de 0 a 50 es: $a \n";
echo "\nLa suma de los numeros pares de 0 a 50 es: $b \n";

echo"\n---------------------------------------------------------------------------------\n";

$num = 0;

while ($num <= 30 || $num % 2 == 0) {
    if ($num > 0) {
        echo "$num, ";
    }
    $num += 3;
}

echo "\nEl primer numero impar despues de 30 de 3 en 3 es: $num";

//https://onlinephp.io/c/b5df3

?>