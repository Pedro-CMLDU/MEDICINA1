<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="bola"></div>
    <div class="triangulo-azul"></div>
    <main class="container">
        <h1 class="titulo">CADASTRO</h1>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="error-message">
                <?php
                switch ($_GET['error']) {
                    case 'invalid_cpf':
                        echo "CPF inválido. Por favor, insira um CPF válido.";
                        break;
                    case 'empty':
                        echo "Todos os campos devem ser preenchidos.";
                        break;
                    case 'user_exists':
                        echo "Usuário já cadastrado.";
                        break;
                    case 'insert_failed':
                        echo "Falha ao inserir o usuário. Tente novamente.";
                        break;
                    case 'db_error':
                        echo "Erro no banco de dados. Tente novamente mais tarde.";
                        break;
                    default:
                        echo "";
                }
                ?>
            </div>
        <?php endif; ?>

        <!-- Adicionando a tag <form> com método POST -->
        <form action="../src/controller/controller_cadastro.php" method="POST">
            <div class="form">
                <div class="form-input">
                    <label for="nome">Nome</label>
                    <div class="circulo">
                        <i class="fa-solid fa-user icon-user"></i>
                    </div>
                    <input type="text" class="nome" id="nome" name="nome" placeholder="Ex.: Rômulo Ferreira Santos" value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>
                </div>
                <div class="form-input">
                    <label for="cpf">CPF</label>
                    <div class="circulo">
                        <i class="fa-regular fa-address-card icon-cpf"></i>
                    </div>
                    <input type="text" class="cpf" id="cpf" name="cpf" pattern="\d{3}(\.?\d{3}){2}-?\d{2}|^\d{11}$" placeholder="Ex.: 000.000.000-00" value="<?php echo isset($_POST['cpf']) ? htmlspecialchars($_POST['cpf'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>
                </div>
                <div class="form-input">
                    <label for="data-nasc">Data de nascimento</label>
                    <div class="circulo">
                        <i class="fa-solid fa-calendar-days icon-date"></i>
                    </div>
                    <input type="date" class="data-nasc" id="data_nasc" name="data_nasc" placeholder="Ex.: 01/01/1999" value="<?php echo isset($_POST['data_nasc']) ? htmlspecialchars($_POST['data_nasc'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>
                </div>
                <div class="form-input">
                    <label for="email">E-mail</label>
                    <div class="circulo">
                        <i class="fa-solid fa-envelope icon-email"></i>
                    </div>
                    <input type="email" class="email" id="email" name="email" placeholder="Ex.: senac321@petrolina.pe.senac.br" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>
                </div>
                
                <button class="botao-cadastro" type="submit">CRIAR CONTA</button>
            </div>
        </form>
    </main>
    <div class="triangulo-principal"></div>
    <div class="senac">
        <img src="../public/imgs/logo_branco 1.png" alt="Logo do Senac">
    </div>
    <div class="texto-triangulo">
        <h2>Sistema de Gerenciamento</h2>
        <h1>Laboratório Maker</h1>
    </div>
    <div class="triangulo-laranja"></div>
    <div class="triangulo-laranja-claro"></div>
    <div class="rodape"></div>
</body>

</html>
