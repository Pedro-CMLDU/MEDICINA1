<?php
require_once("../../config/dbConnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $nome = htmlspecialchars(trim($_POST['nome']), ENT_QUOTES, 'UTF-8');
        
    $data_nasc = trim($_POST['data_nasc']);
    var_dump($data_nasc_valid);

    $cpf = preg_replace('/\D/', '', $_POST['cpf']); // Remove não dígitos
    if (strlen($cpf) !== 11) {
        header('Location: ../../views/cadastro.php?error=invalid_cpf');
        
    }

    // Verificar se todos os campos foram preenchidos
    if ($email && $nome && $cpf && $data_nasc) {
        
        $verifCadastro = "SELECT cpf FROM usuario WHERE cpf = :cpf";
        $req = $dbh->prepare($verifCadastro);
        $req->bindValue(':cpf', $cpf);
        $req->execute();
        if (!$req->fetch(PDO::FETCH_ASSOC)) {

            try {
                // Hash da senha
                $senha = "Senac123";
                $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

                $status = "1";
                $id_tipo = 1;

                // Preparar a query de inserção
                $insert = "INSERT INTO usuario (cpf, senha, nome, stts, data_nasc, id_tipo, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = $dbh->prepare($insert);
                
                // Executar a query
                if ($stmt->execute([$cpf, $senhaHash, $nome, $status, $data_nasc, $id_tipo, $email])) {
                    // Sucesso: usuário cadastrado
                    header('Location: ../../views/login.php');

                } else {
                    // Erro ao inserir
                    header('Location: ../../views/cadastro.php?error=insert_failed');
                    
                }
            } catch (PDOException $e) {
                error_log("Erro no banco de dados: " . $e->getMessage()); // Logar erro
                header('Location: ../../views/cadastro.php?error=db_error');
                
            }
        } else {
            header('Location: ../../views/cadastro.php?error=user_exists');
            
        }
    } else {
        header('Location: ../../views/cadastro.php?error=empty');
        
    }
} else {
    header("Location: ../../views/cadastro.php");
    
}
