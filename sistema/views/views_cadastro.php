<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <form class="container" action="../src/controller/index_cadastro.php" method="POST">
        <h1>CADASTRO</h1>
        <div class="row">
            <div class="retangulo-container">
                <div class="label">Nome:</div>
                <input class="retangulo" type="text" placeholder="Ex: João Silva" name="nome">
            </div>
            <div class="retangulo-container">
                <div class="label">Email:</div>
                <input class="retangulo" type="email" placeholder="Ex: exemplo@dominio.com" name="email">
            </div>
           
        </div>
        <div class="row">

            <div class="retangulo-container">
                <div class="label">Telefone:</div>
                <input class="retangulo" type="tel" placeholder="Ex: (11) 98765-4321" name="telefone">
            </div>
            <div class="retangulo-container">
                <div class="label">Senha:</div>
                <input class="retangulo" type="password" placeholder="Ex: ***" name="senha">
            </div>
        </div>
        <button class="button">ENTRAR</button>
    </form>
    
    <img class="img" src="../imagem/image 7.png" alt="Logo Senac">

    

</body>
</html> 