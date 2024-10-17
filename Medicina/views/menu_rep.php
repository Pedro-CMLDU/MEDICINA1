<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_menu_rec.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>Menu Recepcionista</title>
</head>

<body>
    <header class="cabeca">
        <div class="painel-principal">Painel Principal</div>
        <div class="logo">
            <img class="imagem-conta" src="../imagens/image 14.png" alt="">
        </div>
        <div class="menu">
            <div class="dropdown">Escolher idioma
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="dropdown">
                Conta <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </header>

    <main>
        <aside>
            <div class="user-profile">
                <div class="user-icon">
                    <img class="imagem-icone" src="../imagens/image 27.png" alt="">
                </div>
                <div class="user-name">Conta</div>
            </div>
            <div class="line"></div>
        </aside>

        <section class="main-content">
            <div class="card">
                <button class="botao-medico">
                    <a class="icone_m" href="RegistroMed.php">
                        <div class="card-icon medico-icon">
                            <img class="imagem-medico" src="../imagens/1021799-removebg-preview 1.png" alt="">
                        </div>
                        <p class="card-title1">Médico</p>
                    </a>
                    <div class="card-line"></div>
                </button>
            </div>
                <button class="botao-paciente">
                    <div class="card">
                        <a class="icone_p" href="registro_pac.php">
                            <div class="card-icon paciente-icon">
                                <img class="imagem-paciente" src="../imagens/1430402-removebg-preview 17.png" alt="">
                            </div>
                            <p class="card-title">Pacientes</p>
                        </a>
                        <div class="card-line"></div>
                </button>
            </div>
                <button class="botao-consulta">
                    <div class="card">
                        <a class="icone_c" href="mar_consulta.php">
                            <div class="card-icon consulta-icon">
                                <img class="imagem-consulta" src="../imagens/1478254-removebg-preview 17.png" alt="">
                            </div>
                            <p class="card-title">Consulta</p>
                        </a>
                </button>
            </div>
        </section>
    </main>

</body>

</html>