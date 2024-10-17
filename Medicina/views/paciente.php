<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Consultas Médicas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/estilo_pac_reg.css">
</head>
<body>
    <nav>
        <div class="language-selector">
            <select id="language">
                <option value="pt">Escolher idioma</option>
                <option value="en">English</option>
                <option value="es">Español</option>
            </select>
        </div>
        <div class="account">
            <button>Conta</button>
        </div>
    </nav>

    <div class="container">
        <div class="sidebar">
            <img class="imagem-logo" src="../imagens/image 14.png" alt="Unimed Logo">
            <div class="menu-item">
                <a href="RegistroMed.php">
                    <label>Médico</label>
                    <img class="img-menu" src="../imagens/1021799-removebg-preview 1.png" alt=""> 
                </a> 
            </div>
            <div class="menu-item">
                <a href="registro_pac.php">
                    <label>Pacientes</label>
                    <img class="img-menu" src="../imagens/1430402-removebg-preview 17.png" alt="">
                </a>
            </div>
            <div class="menu-item">
                <a href="mar_consulta.php">
                    <label>Consulta</label>
                    <img class="img-menu" src="../imagens/1478254-removebg-preview 17.png" alt="">
                </a>
            </div>
        </div>


        <div class="content">
            <h1>Informações Pessoais</h1>
            <div class="table-container">
                <table>
                    <tr>
                        <th class="info">Nome:</th>
                        <td>João Bosco</td>
                    </tr>
                    <tr>
                        <th class="info">Telefone:</th>
                        <td>(87) 96786-7899</td>
                    </tr>
                    <tr>
                        <th class="info">Email:</th>
                        <td>joaobmartins@gmail.com</td>
                    </tr>
                    <tr>
                        <th class="info">CPF:</th>
                        <td>908.123.989-06</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th class="info">Data de Nascimento:</th>
                        <td>12/08/1988</td>
                    </tr>
                    <tr>
                        <th class="info">Endereço:</th>
                        <td>Rua da Caixa - 156(BA)</td>
                    </tr>
                    <tr>
                        <th class="info">Sexo:</th>
                        <td>Masculino</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
