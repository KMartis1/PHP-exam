<?php
/*
 6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

//  php index.php  3 5 -->> Jūsų skaičius: 225

if($argc < 3) {
    echo("nepakanka argumentu\n");
    exit(1);
}
if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
    echo("Prasau irasykite ne raides, o skaicius\n");
    exit(1);
}

$result = pow(((float) $argv[1]) * ((float) $argv[2]), 2);

echo($result);
