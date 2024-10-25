<?php
$user = "root"; //variavel em PHP usa $
$pass = "Samuel@0";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=senac', $user, $pass);
    echo "Conexão estabelecida!";
} catch (PDOException $e) {
    echo "Erro!";
    echo $e;
}
?>