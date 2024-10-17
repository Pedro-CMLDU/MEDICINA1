<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>Tela de Login</title>
</head>

<body class="corpo">
    <main class="Login">
        <div class="logo">
            <img class="unimed" src="../imagens/layout_set_logo.png" alt="">
        </div>
        <section class="sessao">
            <form action="" method="POST" class="formulario-login">
                <div class="login-usuario">
                    <label class="nome" for="usuario">Usuário</label>
                    <input type="text" name="cpf" id="nome" placeholder="Inserir seu cpf">
                </div>
                <div class="login-senha">
                    <label class="senha" for="password">Senha</label>
                    <input type="password"  name="senha" id="senha" placeholder="Insirir sua senha">
                </div>
                <button class="botao" type="submit">
                    <b>Entrar</b>
                </button>
                <a href="PainelPrincipal.php">medico</a>
                <a href="menu_rep.php">recepcionista</a>
                <div class="esqueceu-senha">
                    <hr class="linha" />
                    <p class="pergunta">Esqueceu a senha ? </p>
                    <hr class="linha" noshade="noshade" />
                </div>
                <div>
                    <hr />
                    <a class="link" href="esqueceuasenha.php">Clique aqui!</a>
                    <hr />
                </div>
            </form>
            <img class="imagem" src="../imagens/image 9.png" alt="">
            <div class="container">
                <a class="botao-link" href="../Resgistro.php">Ainda não possui uma conta ? <b>Crie aqui!</b></a>
            </div>
        </section>
    </main>
</body>

</html>