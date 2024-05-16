<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações sobre pessoas</title>
</head>
<body>
    <h1>Informações sobre pessoas</h1>
</body>
</html>
<?php

$pessoas = [
    [
        "nome" => "Ana",
        "idade" => 19,
        "altura" => 1.66,
        "curso" => "História",
        "escola" => "FFLCH - USP",
    
    ],
    [
        "nome" => "Maria Eduarda",
        "idade" => 19,
        "altura" => 1.75,
        "curso" => "Relações Internacionais",
        "escola" => "Instituto de Relações, Internacionais - USP",
    
    ],
    [
        "nome" => "Carlos",
        "idade" => 20,
        "altura" => 1.80,
        "curso" => "Matemática",
        "escola" => "IME - USP",
    
    ]
    ];
   

foreach ($pessoas as $pessoa) {
   foreach ($pessoa as $chave => $valor) {
    echo ucfirst($chave) . ": " . $valor . "<br>";
}
echo "<br>";
}

?>