<?php
// Boucle pour afficher les nombres de 1 à 100
for ($i = 1; $i <= 100; $i++) {
    // Vérification si le nombre est un multiple de 3 et de 5
    if (isset($i) && $i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz<br>";
    } 
    // Vérification si le nombre est un multiple de 3
    elseif (isset($i) && $i % 3 === 0) {
        echo "Fizz<br>";
    } 
    // Vérification si le nombre est un multiple de 5
    elseif (isset($i) && $i % 5 === 0) {
        echo "Buzz<br>";
    } 
    // Si le nombre n'est pas un multiple de 3 ni de 5
    else {
        echo "$i<br>";
    }
}
?>