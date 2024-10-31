<?php
require_once('../../config/dbConnect.php');

$login = $_POST['email'];
$senha = $_POST['senha'];

$verificaUsuario = "SELECT  email, senha FROM 
fuc 
WHERE
email = :email AND senha = :senha";

$req = $dbh->prepare($verificaUsuario);
$req->bindValue(':email', $email);
$req->bindValue(':senha', $senha);
$req->execute();
$dadosUsuario = $req->fetch(PDO::FETCH_ASSOC);

if($dadosUsuario){
    echo "Usuario encontrado!";
    echo "Encaminhar para o menu...";
    exit();
    header('Location: ../../login.php?sucesso=1');
}else{
    echo "Usuario não encontrado, verifique os dados de login!";
    header('Location: ../../login.php?sucesso=0');
}

?>