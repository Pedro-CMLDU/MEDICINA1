<?php
require_once("../controle/dbConnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $especializacao = filter_input(INPUT_POST, 'especializacao');
    // Verificar se todos os campos foram preenchidos


        if (!empty($especializacao)) {
            try {
                // Preparar a query de inserção
                $sql = "INSERT INTO especializacao (id, nome) VALUES (null, ?)";
                $stmt = $dbh->prepare($sql);

                // Executar a query
                if ($stmt->execute([$especializacao])) {
                    echo "Cadastro realizado com sucesso!";
                    header('Location: ../views/especializacao.php?sucesso=1');
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
        header('Location: ../views/especializacao.php?sucesso=0');
    }
