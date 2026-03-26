<?php

include ('conexao.php');

$id = $_GET['id'];  

$sql3 = "DELETE FROM contatos WHERE id=$id";

if ( mysqli_query($conexao, $sql3)) {

    echo "
    

<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css' integrity='sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Agenda - TI 30</title>
</head>

<body>

<h2 class='titulo_1index'> Contato excluído com sucesso! </h2>


</body>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    "; 
    echo "<a href='index.php'> voltar </a>"; 

exit; }

else {

        Echo "<h2> Erro ao excluir contato! </h2>";
        Echo "<a href='index.php'> voltar </a>";

        exit;
    }

?>