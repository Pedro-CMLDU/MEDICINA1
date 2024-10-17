<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloregistro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastrar Especialização</title>
    <style>
        /* Estilo adicional para centralizar a página */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            /* Fundo suave */
        }

        .container {
            background-color: #009557;
            /* Fundo do container */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            /* Largura máxima do formulário */
            width: 100%;
            /* Ocupar largura total disponível */
            text-align: center;
        }

        h1 {
            color: #ffffff;
            /* Cor do título */
            margin-bottom: 20px;
        }

        .grid-item {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #ffffff;
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #004d40;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #003d33;
        }

        .img-icon {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <!-- Ícone de voltar -->
    <div class="icon-voltar">
        <img src="../imagens/seta-esquerda.png" alt="Voltar" class="img-icon">
    </div>
    <!-- Logo da página -->
    <img src="../imagens/layout_set_logo.png" alt="Logo Unimed" class="logo">

    <div class="container">
        <form action="../controler/cadastro_especializacao.php" method="post">
            <h1>Cadastrar Especialização</h1>
            <div class="grid-container">
                <!-- Campo Nome da Especialização -->
                <div class="grid-item">
                    <label for="especializacao">Nome da Especialização:</label>
                    <input type="text" id="especializacao" name="especializacao" required placeholder="Insira o nome da especialização">
                </div>
            </div>
            <!-- Botão de submissão -->
            <button type="submit">Cadastrar Especialização</button>
        </form>
    </div>
</body>

</html>