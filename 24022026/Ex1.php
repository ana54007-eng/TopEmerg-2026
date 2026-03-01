<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

<h1>Exercicio 1</h1><br>
<form action="Ex1.php" method="post"><br>
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br>
    <label for="endereco">Endereço:</label><br>
    <input type="text" id="endereco" name="endereco" required><br>
    <label for="idade">Idade:</label><br>
    <input type="number" id="idade" name="idade" required><br>

    <label for="sexo">Sexo:</label><br>

     <input type="radio" id="masculino" name="sexo" value="masculino">
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="feminino" name="sexo" value="feminino">
        <label for="feminino">Feminino</label><br>
        <input type="radio" id="outro" name="sexo" value="outro">
         <label for="outro">Outro</label><br>

    <input type="submit" value="Enviar">
    
</body>
</html>

<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

if ($idade < 18) {

echo "<br><br>Menor de idade"; }

elseif ($idade >= 18) { 

echo "<br><br> Minha idade é: $idade. $endereco. $sexo.";

}



?>