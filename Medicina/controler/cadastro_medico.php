<?php
require_once("../controle/dbConnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $email = filter_input(INPUT_POST, 'email');
    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $senha = filter_input(INPUT_POST, 'senha');
    $crm = filter_input(INPUT_POST, 'crm');
    $especializacao = filter_input(INPUT_POST, 'especializacao');
    $confirmarsenha = filter_input(INPUT_POST, 'confirmar-senha');
    $cpf = filter_input(INPUT_POST, 'cpf');
    // Verificar se todos os campos foram preenchidos


    if ($senha == $confirmarsenha) {
        if (!empty($email) && !empty($nome) && !empty($telefone) && !empty($senha) && !empty($cpf) && !empty($confirmarsenha) && !empty($crm) && !empty($especializacao)) {
            try {
                // Preparar a query de inserção
                $sql = "INSERT INTO recepcionista (id, crm, nome, email, telefone, cpf) VALUES (null, ?, ?, ?, ?, ?)";
                $stmt = $dbh->prepare($sql);

                // Executar a query
                if ($stmt->execute([$email, $nome, $telefone, $senha, $crm, $cpf])) {
                    echo "Cadastro realizado com sucesso!";
                    header('Location: ../views/RegistroMed.php?sucesso=1');
                } else {
                    echo "Erro ao cadastrar.";
                }
            } catch (PDOException $e) {
                echo "Erro no banco de dados: " . $e->getMessage();
            }
        } else {
            echo "Todos os campos são obrigatórios!";
        }
    } else {
        echo "As senhas não são iguais";
        header('Location: ../views/RegistroMed.php?sucesso=0');
    }
} else {
    header("Location: ../views/RegistroMed.php");
}
