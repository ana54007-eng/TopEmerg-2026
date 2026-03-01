<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>

<h1>Exercicio 3</h1><br>
<form action="Ex3.php" method="post"><br>
<label for="nota">Média Final:</label><br>
<input type="text" id="nota" name="nota" required><br>
<input type="submit" value="Enviar">
    
</body>
</html>

<?php

$nota = $_POST['nota'];

$x = (50 - (6 * $nota) )/4;


if ("$nota" > 10 or "$nota" < 0)
echo "<br><br>Nota inválida $nota";

elseif ("$nota" <= 10 && "$nota" >= 7)
    echo"<br><br> Aprovado $nota";
elseif ("$nota" < 7 && "$nota" >= 1.7 && "$nota" >= 0)

    echo "<br><br>$nota Você está em exame e precisa tirar $x para ser aprovado";

    else {
        echo "<br><br>Reprovado sem direito a exame $nota";
    }

?>