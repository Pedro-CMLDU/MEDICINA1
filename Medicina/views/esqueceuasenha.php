<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas para Entrar - Unimed</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
            flex-direction: column;
        }

        .container {
            background-color: #009557;
            width: 400px;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
        }

         img {
            width: 200px;
            height: 35px;
            margin-bottom: 20px;

        }
        

        h2 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #ffffff;
            margin-bottom: 20px;
            font-size: 14px;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }

        button {
            background-color: #0F5A3B;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <img src="../imagens/layout_set_logo.png" alt="Unimed Logo">

    <div class="container">
        <h2>Problemas para entrar?</h2>
        <p>Digite seu Email e enviaremos um link para você voltar a acessar a sua conta.</p>
        <input type="email" placeholder="Inserir seu Email">
        <button>Enviar link para login</button>
    </div>

</body>
</html>
