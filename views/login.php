<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../public/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="bola"></div>
    <div class="triangulo-azul"></div>
    <main class="tela-login">
        <h1 class="titulo">LOGIN</h1>
        <form action="../src/controller/controller_login.php" class="campos" method="post">
            <div class="form-input">
                <label for="cpf">CPF</label>
                <div class="circulo">
                    <i class="fa-regular fa-address-card" style="color: #ffffff;"></i>
                </div>
                <input type="text" id="cpf" name="cpf" pattern="\d{3}(\.?\d{3}){2}-?\d{2}|^\d{11}$"
                    title="Digite um CPF no formato: xxx.xxx.xxx-xx ou xxxxxxxxxxx" placeholder="Ex.: 000.000.000-00">
            </div>
            <div class="form-input">
                <label for="senha">Senha</label>
                <div class="circulo2">
                    <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                </div>
                <input type="password" id="senha" name="senha" placeholder="Ex.: senac123">
            </div>
            <div>   
                <?php
                if (isset($_GET["erro"])){
                    if ($_GET["erro"] == "NotFound"){
                        echo '<p class="error">CPF ou senha incorretos</p>';
                    }else if ($_GET["erro"] == "DBError"){
                        echo '<p class="error">Erro para encontrar o usuário</p>';
                    }else if ($_GET["erro"] == "ConsultError"){
                        echo '<p class="error">Erro no banco de dados</p>';
                    }
                    else if ($_GET["erro"] == "EmptyError"){
                        echo '<p class="error">Todos os campos são obrigatórios!</p>';
                    }
                }
                ?>
                <label class="labell">
                    <input type="checkbox" id="rememberMe">Lembre-se de mim
                </label>
            </div>
            <button class="entrar" type="submit">ENTRAR</button>
            <a class="esq-senha" href="redefinir_senha.html">Esqueceu a senha?</a>
            <a class="cadastrar" href="cadastro.php">Cadastrar-se</a>
            <div class="menu">
                <hr>
                <p>ou</p>
                <hr>
            </div>
            <a class="horarios" type="submit">VISUALIZAR HORÁRIOS</a>
        </form>
        
        
    </main>
    <div class="triangulo-principal"></div>
    <div class="senac">
        <img src="../public/imgs/logo_branco 1.png" alt="Logo do Senac">
    </div>
    <div class="texto-triangulo">
        <h2>Sistema de Gerenciamento</h2>
        <h1>Laboratório Maker</h3>
    </div>
    <div class="triangulo-laranja"></div>
    <div class="triangulo-laranja-claro"></div>
    <div class="rodape"></div>
</body>

</html>