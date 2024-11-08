<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fucionario_chaveamento.css">
    <title>Chave</title>
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

    <nav class="navegacao">
        <a href="index_menu.php">Início</a>
        <a  class="link-add" href="adicionar_chave.php">Acrescentar chaves</a>
    </nav>

    <section class="blocomeio">
        <div class="input-pesquisa">
            <img src="../imagem/lupa.png" alt="lupa">
            <input type="search" name="" id="" placeholder="Pesquisa" class="pesquisa">
        </div>
    </section>

    <section class="blocoprincipal">
        <div class="input-chave">
            <img src="../imagem/lupa.png" alt="lupa">
            <button type="submit" name="" id="" class="chave"> Chave </button>
            <img src="../imagem/interrogacao.png" alt="interrogação" class="img-interrogação">
        </div>

        <!-- Inclusão da tabela de chaves -->
        <div id="lista-chaves">
            <?php
            require_once('../src/controller/quant_chaveamento.php');
            if (count($chaves) > 0): ?>
                <table class="tabela-chaves">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Número</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($chaves as $chave): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($chave['descrição']); ?></td>
                                <td><?php echo htmlspecialchars($chave['numero']); ?></td>
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