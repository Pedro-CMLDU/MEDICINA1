<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Consultas Médicas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/estilo_pac_reg.css">
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
            <img class="imagem-logo" src="/imagens/image 14.png" alt="Unimed Logo">
            <div class="menu-item">
                <a href="RegistroMed.html">
                    <label>Médico</label>
                    <img class="img-menu" src="/imagens/1021799-removebg-preview 1.png" alt=""> 
                </a>
            </div>
            <div class="menu-item">
                <a href="registro_pac.html">
                    <label>Pacientes</label>
                    <img class="img-menu" src="/imagens/1430402-removebg-preview 17.png" alt="">
                </a>
            </div>
            <div class="menu-item">
                <a href="mar_consulta.html">
                    <label>Consulta</label>
                    <img class="img-menu" src="/imagens/1478254-removebg-preview 17.png" alt="">
                </a>
            </div>
        </div>

        <div class="content">
            <div class="header">
                <h1>Consultas</h1>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Pesquisar...">
                <button><i class="fas fa-search"></i></button>
                <div class="date">
                    <p>01/08/2024</p>
                </div>
            </div>
            <div class="table-container">
                <table>
                    <tr>
                        <td>João Bosco <a href="paciente.html">Ver</a></td>
                    </tr>
                    <tr>
                        <td>Lucas Henrique Marques <button>Ver</button></td>
                    </tr>
                    <tr>
                        <td>Helio Souza <button>Ver</button></td>
                    </tr>
                    <tr>
                        <td>Davi Henrique Souza <button>Ver</button></td>
                    </tr>
                    <tr>
                        <td>Gabriel Lima <button>Ver</button></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Terezinha Eva <button>Ver</button></td>
                    </tr>
                    <tr>
                        <td>Luiz Da Silva <button>Ver</button></td>
                    </tr>
                    <tr>
                        <td>Gloria Maria <button>Ver</button></td>
                    </tr>
                    <tr>
                        <td>Geraldo Bezerra <button>Ver</button></td>
                    </tr>
                    <tr>
                        <td>Josué Santos Silva <button>Ver</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
