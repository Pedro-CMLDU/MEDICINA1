<?php
$user = "root"; //variavel em PHP usa $
$pass = "legosonic2";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=gabriel', $user, $pass);
} catch (PDOException $e) {
    echo "Erro!";
    echo $e;
}
?>