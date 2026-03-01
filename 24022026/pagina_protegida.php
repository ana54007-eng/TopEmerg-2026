<?php 

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($nome == "Toni" && $senha == "123") {
    echo "<br><br>Bem Vindo, $nome! Você é um professor.";
} elseif ($nome == "ADM" && $senha == "456") {
    echo "<br><br>Bem Vindo, $nome! Você é um administrador.";
} elseif ($nome == "Aluno" && $senha == "789") {
    echo "<br><br>Bem Vindo, $nome! Você é um aluno.";
} else {
    echo "<br><br>Usuário ou senha inválidos.";
}




?>