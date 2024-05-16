<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de hobbies</title>
</head>
<body>
    <h1>Hobbies da Bia</h1>
</body>
</html>

<?php

$hobbies = ["Ler", "Ouvir música", "Desenhar", "Maquiagem", "Patinar", "Vôlei"];

for ($i = 0; $i < count($hobbies); $i++){
    echo $hobbies[$i] . "<br>";
}


?>