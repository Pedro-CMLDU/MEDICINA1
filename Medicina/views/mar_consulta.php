<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mar_consulta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>Marcar consulta</title>
</head>


<body>
    <header class="cabeca">
        <div class="sep">
            <div class="dropdown">Escolher idioma
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="dropdown">
                Conta <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </header>

    <main class="corpo">
        <aside>
                <div class="logo">
                    <img class="logo-imagem" src="../imagens/image 14.png" alt="">
                </div>
                <div class="card-principal">
                    <div class="card-medico-paciente">
                        <div class="card-medico"> 
                            
                            <button class="botao-medico">
                                <div class="card">
                                    <a class="icone_m" href="RegistroMed.php">
                                        <div class="card-icon medico-icon">
                                            <img class="imagem-medico" src="../imagens/1021799-removebg-preview 1.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </button>
                            <label class="label-esp" for="Medico">Médico</label>
                        </div>
                        <div class="card-paciente">
                            
                            <button class="botao-paciente">
                                <div class="card">
                                    <a class="icone_p" href="registro_pac.php">
                                        <div class="card-icon paciente-icon">
                                            <img class="imagem-paciente" src="../imagens/1430402-removebg-preview 17.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </button>
                            <label class="label-esp" for="Paciente">Pacientes</label>
                        </div>  
                    </div>
                    <div class="card-consulta">
                        
                        <button class="botao-consulta">
                            <div class="card">
                                <a class="icone_c" href="mar_consulta.php">
                                    <div class="card-icon consulta-icon">
                                        <img class="imagem-consulta" src="../imagens/1478254-removebg-preview 17.png" alt="">
                                    </div>
                            </div>
                            </a>
                        </button>
                        <label class="label-esp" for="Consulta">Consulta</label>
                    </div>
                </div>
        </aside>
        <section>
            <form class="formulario-consulta">
                <div class="formulario-input-img">
                    <div class="formulario-inputs">
                        <div class="nome_pac">
                            <label for="Paciente">Paciente</label>
                            <input type="text" id="nome" placeholder="insira o nome do paciente">
                        </div>
                        <div>
                            <label for="Data de Consulta">Data da Consulta</label>
                            <input type="text" id="data" placeholder="insira a data">
                        </div>
                        <div>
                            <label for="Medico">Médico</label>
                            <input type="text" id="nome" placeholder="insira o nome do médico">
                        </div>
                        <div>
                            <label for="Especialização">Especialização</label>
                            <input type="text" id="nome" placeholder="insira a sua especialização">
                        </div>
                    </div>
                    <div class="imagem-celular">
                        <img class="tela-celular" src="../imagens/image 9.png" alt="">
                    </div>
                </div>
                <div class="botao-conf">
                    <button type="submit" class="conf">Confirmar</button>
                </div>
                </div>
            </form>
        </section>

    </main>

</body>

</html>