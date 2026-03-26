<?php 
include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone']; 

$sql = "INSERT INTO `contatos`(`nome`, `endereco`, `telefone`) VALUES ('$nome','$endereco','$telefone')";



if (mysqli_query($conexao, $sql)) {

echo "<h2>Contato cadastrado com sucesso!</h2>";
echo "<a href='index.php'>Voltar</a>";

} else {

    echo" <h2>Erro ao adicionar o contato: <h2>" . mysqli_error($conexao);  
    echo "<a href='index.php'>Voltar</a>";


}    



?>