<?php

/*
 Užduotis nuo 1 iki 4 atlikite galite į vieną failą, rekomenduojame 5, 6, 7 užduotis atlikti atskiruose failuose. 
 Funkcijų ir kintamųjų pavadinimus vadinkite suprantamai,
 taip kad kiti galėtu suprasti ką funkicija daro ar kintamasis saugo (vertinime atsižvelgsime į teisingus namingus)
 Pabandykite laikykis code standartų, tiek kiek esame apie juos šnekėje.
 */

/*
 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function exercises1(array $numbers): ?int
{
    $evenNumbers = array_filter(
        $numbers,
        function (?int $number): bool {
            return $number % 2 == 0;
        }
    );

    $sum = 0;
    foreach ($evenNumbers as $number) {
        $sum += $number;
    }
    return $sum;
}
// echo(exercises1($numbers));

/*
 2. Grąžinkite visų skaičių, esančių $numbers2 masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function exercises2(array $numbers2): ?int
{
    $flattenedNumbers = array_merge(...$numbers2);

    $product = 1;
    foreach ($flattenedNumbers as $number) {
        $product *= $number;
    }

    return $product;
}

// echo(exercises2($numbers2));

/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exercises3(array $holidays)
{
    $destinations = [];

    foreach($holidays as $holiday) {
        if ($holiday['price'] == null) continue;
        if (!array_key_exists($holiday['destination'], $destinations)) {
            $destinations[$holiday['destination']] = [
                'titles' => [$holiday['title']],
                'total' => $holiday['price'] * $holiday['tourists'],
            ];
        } else {
            array_push($destinations[$holiday['destination']]['titles'], $holiday['title']);
            $destinations[$holiday['destination']]['total'] += $holiday['price'] * $holiday['tourists'];
        }
    }

    foreach($destinations as $destination => $data) {
        echo("Destination \"" . $destination . "\".\n");
        echo("Titles: ");
        echo(implode(", ", array_map(
            function (string $title): string {
                return "\"" . $title . "\"";
            },
            $data['titles']
        )));
        echo("\n");
        echo("Total: " . $data['total'] . "\n");
        echo("************\n");
    }
}
// exercises3($holidays);

/*
 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
*/

function exercises4(array $holidays)
{
    $file = fopen("output.txt", "w");

    $destinations = [];

    foreach($holidays as $holiday) {
        if ($holiday['price'] == null) continue;
        if (!array_key_exists($holiday['destination'], $destinations)) {
            $destinations[$holiday['destination']] = [
                'titles' => [$holiday['title']],
                'total' => $holiday['price'] * $holiday['tourists'],
            ];
        } else {
            array_push($destinations[$holiday['destination']]['titles'], $holiday['title']);
            $destinations[$holiday['destination']]['total'] += $holiday['price'] * $holiday['tourists'];
        }
    }

    foreach($destinations as $destination => $data) {
        fwrite($file, "Destination \"" . $destination . "\".\n");
        fwrite($file, "Titles: ");
        fwrite($file, implode(", ", array_map(
            function (string $title): string {
                return "\"" . $title . "\"";
            },
            $data['titles']
        )));
        fwrite($file, "\n");
        fwrite($file, "Total: " . $data['total'] . "\n");
        fwrite($file, "************\n");
    }

    fclose($file);
}
exercises4($holidays);

/*
 5. Sukurkite forma, kuri leistų pridėti failą ir vėliau jį išsaugotų serveryje su formoje nurodytu failo pavadinimu (name). (3 balai)
*/

//    File forma: 
//    Name: [laboras.txt]
//    File: [browse]

/*
 6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

//  php index.php  3 5 -->> Jūsų skaičius: 225


/**
PAPILDOMAS

 7. Parašykite programą, kuri sugeneruotų ornamentą: https://iili.io/H3J974e.png . 
Ornamentas turi būti sugeneruotas naudojant HTML ir PHP. (2 balai)

**/