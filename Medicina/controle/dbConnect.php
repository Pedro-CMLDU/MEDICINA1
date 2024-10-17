<?php 

$user = "root";
$pass = "legosonic2";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=sistema', $user, $pass);
    echo "Conexão estabelecida!";
} catch (PDOException $e) {
    echo "Erro!";
    echo $e;
}

?>