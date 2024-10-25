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
        <div class="form">
            <div class="form-input">
                <label for="nome">Nome</label>
                <div class="circulo">
                    <i class="fa-solid fa-user icon-user"></i>
                </div>
                <input type="text" class="nome" id="nome" placeholder="Ex.: Rômulo Ferreira Santos">
            </div>
            <div class="form-input">
                <label for="cpf">CPF</label>
                <div class="circulo">
                    <i class="fa-regular fa-address-card icon-cpf"></i>
                </div>
                <input type="text" class="cpf" id="cpf" pattern="\d{3}(\.?\d{3}){2}-?\d{2}|^\d{11}$"
                    placeholder="Ex.: 000.000.000-00">
            </div>
            <div class="form-input">
                <label for="data-nasc">Data de nascimento</label>
                <div class="circulo">
                    <i class="fa-solid fa-calendar-days icon-date"></i>
                </div>
                <input type="text" class="data-nasc" id="data" placeholder="Ex.: 01/01/1999">
            </div>
            <div class="form-input">
                <label for="email">E-mail</label>
                <div class="circulo">
                    <i class="fa-solid fa-envelope icon-email"></i>
                </div>
                <input type="email" class="email" id="email" placeholder="Ex.: senac321@petrolina.pe.senac.br">
            </div>
            <div class="form-input">
                <label for="senha">Senha</label>
                <div class="circulo">
                    <i class="fa-solid fa-lock icon-lock"></i>
                </div>
                <input type="password" class="senha" id="senha" placeholder="Ex.: senac123">
            </div>
            <button class="botao-cadastro">CRIAR CONTA</button>
            <p class="text">Já possui conta? <a href="Login.php">Log-in</a></p>    
        </div>
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