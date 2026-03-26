<?php 

include ('conexao.php');

$id = $_GET['id'];  

$sql = "SELECT * FROM `contatos` WHERE id=$id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1 ) {

$contato = mysqli_fetch_assoc($resultado);

} else {

echo "<div class='mensagem-erro'>
        <i class='fas fa-exclamation-circle'></i>
        <h2>Contato não encontrado na base.</h2>
        <a href='index.php' class='btn-voltar'>Voltar para agenda</a>
      </div>"; 
exit;

}

if (isset($_POST['atualizar'])){

$novo_nome = $_POST['nome'];
$novo_endereco = $_POST['endereco'];
$novo_telefone = $_POST['telefone'];

$sqli2 = "UPDATE contatos SET nome = '$novo_nome', endereco= '$novo_endereco', telefone='$novo_telefone' WHERE id = $id";

if (mysqli_query($conexao, $sqli2)) {

    echo "<div class='mensagem-sucesso'>
            <i class='fas fa-check-circle'></i>
            <h2>Contato atualizado com sucesso!</h2>
            <a href='index.php' class='btn-voltar'>Voltar para agenda</a>
          </div>";
    exit;

} else { 

    echo "<div class='mensagem-erro'>
            <i class='fas fa-times-circle'></i>
            <h2>Erro ao atualizar!</h2>
            <a href='index.php' class='btn-voltar'>Voltar para agenda</a>
          </div>";
    exit;
}

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>

<body class="body_cadastro"> 
    <div class="titulos_index">
        <h1 class="titulo_1index">Agenda Turma 30 - 2026</h1>
        <h2 class="titulo_2index">Atualize seu Contato!</h2> 
    </div>

    <div class="div_form_index">
        <form method="POST" class="form_index">
            <label for="nome" class="label_nome">Atualize - Nome Completo</label> <br> 
            <input type="text" name="nome" class="input_nome" placeholder="Nome Completo" value="<?php echo $contato['nome']; ?>"> <br> <br>

            <label for="endereco" class="label_endereco">Atualize - Endereço</label> <br> 
            <input type="text" name="endereco" placeholder="Endereço" class="input_endereco" value="<?php echo $contato['endereco']; ?>"> <br> <br>

            <label for="telefone" class="label_telefone">Atualize - Telefone</label> <br> 
            <input type="text" name="telefone" placeholder="Telefone" class="input_telefone" value="<?php echo $contato['telefone']; ?>"> <br> <br>

            <input type="submit" name="atualizar" value="atualizar" class="submit_cadastro"> <br> <br>
        </form>
    </div>
</body>
</html>  