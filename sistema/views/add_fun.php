<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Funcionário</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilofun.css">
</head>
<body>
    <header class="header">
        <div class="retangulo-superior">
            <div class="keybox">
             <img src="../imagem/logo.png" alt="keybox">
            </div>
            <div class="imglogosenac">
             <img src="../imagem/logosenac.png" alt="logosenac" class="img_senac_logo">
         </div>
         </div>
    </header>
    
    <nav class="breadcrumb">
        <a href="index_menu.php">Início</a> >
        <a href="fucionario.php">Voltar</a>
    </nav>
    
    <main class="main-content">
        <div class="form-container">
            <h2>Adicionar Novo Funcionário</h2>
            <form action="#" >
                <div class="input-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" placeholder="Ana Luiza Pereira dos Santos">
                </div>
                
                <div class="input-group">
                    <label for="cargo">Cargo:</label>
                    <select id="cargo" class="input-group-select">
                        <option value="">Selecione</option>
                        <option value="">Professor (a)</option>
                        <option value=""> Assist. de Limpeza </option>
                        <option value="">Gerente</option>
                    </select>
                </div>
        

                <div class="input-group">
                    <label>Tipo de Funcionário:</label>
                    <div class="radio-group">
                        <div class="radio-group-div">
                            <label> Comum</label>
                            <input type="radio" name="tipo" value="comum">
                        </div>
                       <div class="radio-group-div">
                            <label>Gerente</label>
                            <input type="radio" name="tipo" value="gerente"> 
                       </div>
                        
                    </div>
                </div>

                <div class="input-group">
                    <label for="contato">Contato:</label>
                    <input type="tel" id="contato" placeholder="(87) 96734-8403">
                </div>
                
                <button type="submit" class="submit-button">Adicionar Funcionário</button>
                
            </form>
        </div>
    </main>
</body>
</html>