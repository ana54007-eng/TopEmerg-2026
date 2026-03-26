
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - TI 30</title>
</head>

<body class="body_cadastro"> 
    <div class="titulos_index">
        <h1 class="titulo_1index">Agenda Turma 30 - 2026</h1>
        <h2 class="titulo_2index">Cadastrar Contato</h2> 
    </div>

    <div class="div_form_index">
        <form action="salvar.php" method="POST" class="form_index">
            <label for="nome" class="label_nome">Nome Completo</label> <br> 
            <input type="text" id="nome" name="nome" class="input_nome" placeholder="Nome Completo" required> <br> <br>

            <label for="endereco" class="label_endereco">Endereço</label> <br> 
            <input type="text" id="endereco" name="endereco" placeholder="Endereço" class="input_endereco" required> <br> <br>

            <label for="telefone" class="label_telefone">Telefone</label> <br> 
            <input type="text" id="telefone" name="telefone" placeholder="Telefone" class="input_telefone" required> <br> <br>

            <input type="submit" id="submit" name="Cadastrar" value="Cadastrar Contato" class="submit_cadastro"> <br> <br>
        </form>
    </div>

    <?php 
    include ('conexao.php');
    
    $sqli = "SELECT * FROM contatos ORDER BY id DESC";
    $resultado = mysqli_query($conexao, $sqli);
    ?>

    <div class="tabela_contatos">
        <h3 class="titulo_tabela">Lista de Contatos</h3>
        
        <?php if (mysqli_num_rows($resultado) > 0): ?>
            <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Completo</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td class="col-id"><?php echo $linha['id']; ?></td>
                            <td class="col-nome"><?php echo htmlspecialchars($linha['nome']); ?></td>
                            <td class="col-endereco"><?php echo htmlspecialchars($linha['endereco']); ?></td>
                            <td class="col-telefone"><?php echo htmlspecialchars($linha['telefone']); ?></td>
                            <td class="col-acoes">
                                <a href='atualizar.php?id=<?php echo $linha['id']; ?>' class="btn-editar">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href='excluir.php?id=<?php echo $linha['id']; ?>' 
                                   onclick='return confirm("Tem certeza que deseja excluir este contato?");' 
                                   class="btn-excluir">
                                    <i class="fas fa-trash"></i> Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="no-contatos">
                <i class="fas fa-address-book"></i>
                <p>Nenhum contato cadastrado ainda!</p>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>