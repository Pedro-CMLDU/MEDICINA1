<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/estiloregistro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="icon-voltar">
        <img src="../imagens/seta-esquerda.png" alt="icon-voltar" class="img-icon">
    </div>
    <img src="../imagens/layout_set_logo.png" alt="Logo Unimed" class="logo">
    <div class="container">  
        <form action="../controler/cadastro_medico.php" method="post" onsubmit="return validatePasswords()">
            <div class="grid-container">
                <div class="grid-item">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required placeholder="Insira seu nome completo">
                </div>
                <div class="grid-item">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Insira seu E-mail">
                </div>
                <div class="grid-item">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" required placeholder="Insira seu CPF">
                </div>
                <div class="grid-item">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required placeholder="Insira seu telefone">
                </div>
                <!-- Adicionando o campo CRM -->
                <div class="grid-item">
                    <label for="crm">CRM:</label>
                    <input type="text" id="crm" name="crm" required placeholder="Insira seu CRM">
                </div>
                <!-- Adicionando o campo Especialização -->
                <div class="grid-item">
                    <label for="especializacao">Especialização:</label>
                    <input type="text" id="especializacao" name="especializacao" required placeholder="Insira sua(s) especialização(ões)">
                </div>
                <div class="grid-item">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required placeholder="Insira sua senha">
                </div>
                <div class="grid-item">
                    <label for="confirmar-senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha" required placeholder="Insira sua senha novamente ">
                </div>
            </div>
            <button type="submit">Registrar-se
            </button>
        </form>
    </div>

    <script>
        function validatePasswords() {
            const senha = document.getElementById('senha').value;
            const confirmarSenha = document.getElementById('confirmar-senha').value;
            if (senha !== confirmarSenha) {
                alert('As senhas não coincidem.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
