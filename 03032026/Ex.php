<?php

// 1

echo "<br><br><h1> Atividade 1.</h1><br> <br>";

$frutas = ["banana","maça","uva","morango", "laranja"];

print_r ($frutas);

$frutas [] = "abacaxi";

foreach ($frutas as $frutasf) {

    echo "<br>$frutasf<br>";
}

// 2

echo "<br><br> <h1> Atividade 2.</h1><br> <br>";


$num = [1,2,3,4,5];

unset ($num [2]);

foreach ($num as $num) {

echo $num . "<br>";

}

// 3

echo "<br><br><h1> Atividade 3.</h1><br> <br>";

$vet3 = [

"nome" => "Guitarra",
"preco" => "R$ 5.666,22",
"estoque" => "7 unidades"

];
foreach ($vet3 as $x => $y) {

echo "$x: $y <br><br>";

}


//4

echo "<br><br><h1> Atividade 4.</h1><br> <br>";


$vet4 = [

    
"João" => 7.3,
    
"Maria" => 9.7,
    
"Pedro" => 4.2


];

foreach ($vet4 as $z => $a) {


echo "$z: $a <br><br>";

}


$med = (($vet4["João"] + $vet4["Maria"] + $vet4["Pedro"]) / 3);

echo  " média: " . $med;

$maiorNota = max($vet4);

$alunosm = array_keys($vet4, $maiorNota);

foreach($alunosm as $aluno) {
    echo "<br><br> Aluno com maior nota: $aluno - Nota: $maiorNota<br>";
}



?>



















