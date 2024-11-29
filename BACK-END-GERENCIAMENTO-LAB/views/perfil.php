<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../public/css/perfil.css">
</head>

<body>
    <header class="upbar">
        <img class="img-senac" src="../public/imgs/senac_logo_branco.png" alt="">
    </header>
    <div class="downbar">
    </div>
    <sidebar class="sidebar">
        <img src="../public/imgs/bars-solid.svg" alt="" class="menu_sand">
        <nav class="side_items">
            <a href="inicio.html">
                <i class="fa-solid fa-house"></i>
                <span>Início</span>
            </a>
            <hr>
            <a href="gerenciamento.html">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Gerenciamento</span>
            </a>
            <hr>
            <a href="reservas.html">
                <i class="fa-solid fa-table-list"></i>
                <span>Reservas</span>
            </a>
            <hr>
            <a href="relatorio.html">
                <i class="fa-solid fa-clipboard"></i>
                <span>Relatório</span>
            </a>
            <hr>
            <a href="perfil.html">
                <i class="fa-solid fa-circle-user"></i>
                <span>Perfil</span>
            </a>
        </nav>
    </sidebar>
    <div class="user-info-container">
        <div class="informações">
            <div class="info">
                <div class="navegacao">
                    <a class="ocupacao-info-home" href="inicio.html">Início/</a>
                    <a class="perfil" href="perfil.html">Perfil/</a>
                    <h2 class="ocupacao-info-titulo">Informações de usuário</h2>
                </div>
            </div>
        </div>
        <?php
        require_once('../config/dbConnect.php');
        session_start();
        $user_infos = "SELECT usuario.nome, usuario.cpf, usuario.data_nasc, usuario.email, tipo.descr FROM usuario, tipo WHERE usuario.id_tipo = tipo.id AND usuario.id = {$_SESSION['id_user']}";
        $lista_infos = $dbh->query($user_infos);
        $resultados_infos = $lista_infos->fetch(PDO::FETCH_ASSOC);

        ?>
        <div class="user-info">
            <div class="quadrado">
                <div class="profile-pic-perfil">
                    <div class="initials">NM</div>
                    <div class="edit-icon-perfil">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                </div>
                <div class="user-details">
                    <h1 class="nome"><?= $resultados_infos['nome'] ?></h1>
                    <h3 class="tipo-user"><?= $resultados_infos['descr'] ?></h3>
                    <h4 class="sair">Sair
                        <a class="voltar" href="login.php"></a>
                    </h3>
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div>
            </div>

            <div class="dados-usuario">
                <h2>Usuário</h2>
                <p><?= $resultados_infos['nome'] ?></p>

                <h2>Tipo de usuário</h2>
                <p><?= $resultados_infos['descr'] ?></p>

                <h2>CPF</h2>
                <p><?= $resultados_infos['cpf'] ?></p>

                <h2>Data de nascimento</h2>
                <p><?= $resultados_infos['data_nasc'] ?></p>

                <h2>E-mail</h2>
                <p><?= $resultados_infos['email'] ?></p>

                <h2>Senha</h2>
                <p class="password">●●●●●●●●</p>
                <a class="change-password" href="trocar-senha.html">Trocar de senha</a>
            </div>
            <div class="mobile">
                <h4 class="sair-mobile">Sair <i class=" fa-solid fa-arrow-right-from-bracket"></i></h4>
            </div>
            </i>
            </i>
        </div>
    </div>
    </div>
    </div>
    </div>




    <!-- Link para a biblioteca de ícones FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha384-OH5h9J1d4F2pWOSr6QdoARnIk/lZwE2deLq5pD7zB2RyFF2zDzZQdyycfp6Hs6jb" crossorigin="anonymous"></script>
    <script src="../public/js/perfil.js"></script>
</body>

</html>