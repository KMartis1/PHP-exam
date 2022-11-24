<!DOCTYPE html>
<html>
<head>
    <title>ornamentas</title>
    <style>
        body {
            line-height: 0px;
        }
        .bright {
            background-color: white;
        }
        .dark {
            background-color: black;
        }
        .bright, .dark {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 1px solid black;
            margin-right: 1px;
            margin-bottom: 1px;
        }
    </style>
</head>
<body>
<?php
/**
PAPILDOMAS

 7. Parašykite programą, kuri sugeneruotų ornamentą: https://iili.io/H3J974e.png . 
Ornamentas turi būti sugeneruotas naudojant HTML ir PHP. (2 balai)

**/

for ($y = 0; $y < 7; $y++) {
    for ($x = 0; $x < 7; $x++) {
        if ($x == $y || $x == 6-$y) {
            echo("<div class=\"dark\"></div>");
        } else {
            echo("<div class=\"bright\"></div>");
        }
    }
    echo("<br>");
}
?>
</body>
</html>
