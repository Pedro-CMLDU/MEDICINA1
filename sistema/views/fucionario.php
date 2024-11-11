<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fucionario.css">
    <title>Fucionario</title>
</head>

<body>
    <div class="retangulo-superior">
        <div class="keybox">
            <img src="../imagem/logo.png" alt="keybox">
        </div>
        <div class="imglogosenac">
            <img src="../imagem/logosenac.png" alt="logosenac" class="img_senac_logo">
        </div>
    </div>


    </div>

    <nav class="navegacao">
        <div class="nav-esq">
            <a href="index_menu.php"> Inicio > </a>
        </div>
        <div class="nav-dir"><a href="add_fun.php">Novo Fucionário</a></div>

    </nav>

    <section class="blocomeio">
        <div class="input-pesquisa">
            <img src="../imagem/lupa.png" alt="lupa">
            <input type="search" name="" id="" placeholder="Pesquisa" class="pesquisa">
        </div>
    </section>
    <section class="blocoprincipal">
        <div class="input-chave">
            <button type="submit" name="" id="" class="chave"> Fucionário (0) </button>
            <img src="../imagem/interrogacao.png" alt="interrogação" class="img-interrogação">
        </div>
        <img src="../imagem/bi_people-fill.png" alt="chave vazias" class="chave-vazia">

        <div id="lista-chaves">
            <?php
            require_once('../src/controller/quant_funcionario.php');
            if (count($funcionarios) > 0): ?>
                <table class="tabela-chaves">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Contato</th>
                            <th>Tipo funcionario</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($funcionarios as $funcionario): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($funcionario['nome']); ?></td>
                                <td><?php echo htmlspecialchars($funcionario['contato']); ?></td>
                                <td><?php echo htmlspecialchars($funcionario['tip_func']); ?></td>
                                <td><?php echo htmlspecialchars($funcionario['email']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="mensagem-vazia">Nenhuma chave cadastrada.</p>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>