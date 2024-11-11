<?php
require_once('../config/dbConnect.php'); 

// Consulta SQL com INNER JOIN entre func e tipo_funcionario
$sql = "SELECT nome, contato, tip_func, email
        FROM func
        INNER JOIN tipo_funcionario ON func.cod_tip_func = tipo_funcionario.codigo";
        
$stmt = $dbh->query($sql);
$funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
