<?php
require_once("../controle/dbConnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $email = filter_input(INPUT_POST, 'email');
    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $senha = filter_input(INPUT_POST, 'senha');
    $confirmarsenha = filter_input(INPUT_POST, 'confirmar-senha');
    $cpf = filter_input(INPUT_POST, 'cpf');    
    // Verificar se todos os campos foram preenchidos


    if ($senha == $confirmarsenha){
        if (!empty($email) && !empty($nome) && !empty($telefone) && !empty($senha) && !empty($cpf) && !empty($confirmarsenha)) {
            try {
                // Preparar a query de inserção
                $sql = "INSERT INTO recepcionista (id, email, nome, telefone, senha, cpf) VALUES (null, ?, ?, ?, ?, ?)";
                $stmt = $dbh->prepare($sql);
                
                // Executar a query
                if ($stmt->execute([$email, $nome, $telefone, $senha, $cpf])) {
                    echo "Cadastro realizado com sucesso!";
                    header('Location: ../Registro.php?sucesso=1');
                } else {
                    echo "Erro ao cadastrar.";
                }
            } catch (PDOException $e) {
                echo "Erro no banco de dados: " . $e->getMessage();
            } 
    
    
        } else {
            echo "Todos os campos são obrigatórios!";
        }
    } else{
        echo "As senhas não são iguais";
        header('Location: ./Registro.php?sucesso=0');
    }
        
    }else{
        header("Location: Registro.php");
    }


?>




