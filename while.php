<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes favoritos</title>
</head>
<body>
    <h1>Filmes favoritos da Bia</h1>
</body>
</html>

<?php

$filmes = ["Garota interrompida", "Garota exemplar", "Jovens Bruxas"];

$i = 0;

while ($i < count($filmes)){
    echo $filmes[$i] . "<br>";
    $i++;
}

?>