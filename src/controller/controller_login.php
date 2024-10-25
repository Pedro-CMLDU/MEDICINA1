<?php
require_once("../../config/dbConnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $cpf = filter_input(INPUT_POST, 'cpf');
    $senha = filter_input(INPUT_POST, 'senha');
    // Verificar se todos os campos foram preenchidos

    if (!empty($cpf) && !empty($senha)) {
        try {
            // Preparar a query de inserção
            $sql = "SELECT nome from usuario WHERE senha = :senha and cpf = :cpf and stts = '1'";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':senha', $senha);
            $stmt->bindValue(':cpf', $cpf);


            // Executar a query
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) { // Verifica se algum usuário foi encontrado
                    echo "Login realizado com sucesso!";
                    header('Location: ../../views/inicio.php');
                    exit; // É uma boa prática chamar exit após header
                } else {
                    header('Location: ../../views/login.php?erro=NotFound');
                }
            } else {
                header('Location: ../../views/login.php?erro=DBError');
            }
            
        } catch (PDOException $e) {
            header('Location: ../../views/login.php?erro=ConsultError');
        }
    } else {
        header('Location: ../../views/login.php?erro=EmptyError');
    }   
} else {
    header("Location: ../../views/login.php");
}
