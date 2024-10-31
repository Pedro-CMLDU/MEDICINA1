<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Pagina inicial</title>
</head>

<body class="corpo">
    <img class="img" src="../imagem/imagem1.png" />
    <main class="formulario">
        <form class="formulario-campos" action="../src/controllers/auth_login.php" method="POST">
            <h1 class="titulo-form">BEM-VINDO</h1>
            <div class="form-input">
                
                <label for="email">E-mail:</label>
                <input type="E-mail" name="email" id="E-mail" placeholder="Exemple@gmail.com">
            </div>

            <div class="form-input">
        
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                
            </div>
        <div class="links-form">
            <a class="form-label" for="Esqueci a senha">Esqueci a senha</a>
            <a href="views_cadastro.php" class="criarconta">Criar Conta</a>
            

        </div>

            <button type="submit">Entrar</button>
        </form>

    </main>
</body>

</html>