<?php
// Conexão com o banco de dados
require_once ('../../config/dbConnect.php');

// Verificação se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipoFuncionario = filter_input(INPUT_POST, 'tipo_funcionario');

    if ($tipoFuncionario) {
        $insertTipoFunc = "INSERT INTO tipo_funcionario VALUES (null, :tipo_funcionario)";
        $stmt = $dbh->prepare($insertTipoFunc);
        $stmt->bindValue(':tipo_funcionario', $tipoFuncionario);

        if ($stmt->execute()) {
            // Redireciona para o formulário com mensagem de sucesso
            header("Location: ../../views/tipo_func.php?sucesso=1");
        } else {
            // Redireciona para o formulário com mensagem de erro
            header("Location: ../../views/tipo_func.php?sucesso=0");
        }
    } else {
        header("Location: ../../views/tipo_func.php?sucesso=0");
    }
} else {
    // Redireciona para o formulário caso o acesso não seja via POST
    header("Location: ../../views/tipo_func.php");
}