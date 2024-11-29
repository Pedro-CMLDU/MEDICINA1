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
            $sql = "SELECT nome, id from usuario WHERE senha = :senha and cpf = :cpf and stts = '1'";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':senha', $senha);
            $stmt->bindValue(':cpf', $cpf);


            // Executar a query
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) { // Verifica se algum usuário foi encontrado
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    session_start();
                    $_SESSION["Nome_user"] = $result[0]['nome'];
                    $_SESSION["id_user"] = $result[0]['id'];
                    header('Location: ../../views/inicio.php');
                    exit; // É uma boa prática chamar exit após header
                } else {
                    header('Location: ../../views/login.php?erro=NotFound');
                    exit;
                }
            } else {
                header('Location: ../../views/login.php?erro=DBError');
                exit;
            }
            
        } catch (PDOException $e) {
            header('Location: ../../views/login.php?erro=ConsultError');
            exit;
        }
    } else {
        header('Location: ../../views/login.php?erro=EmptyError');
        exit;
    }   
} else {
    header("Location: ../../views/login.php");
    exit;
}
?>