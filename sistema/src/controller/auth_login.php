<?php
require_once('../../config/dbConnect.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$verificaUsuario = "SELECT senha FROM func WHERE email = :email";

$req = $dbh->prepare($verificaUsuario);
$req->bindValue(':email', $email);
$req->execute();
$dadosUsuario = $req->fetch(PDO::FETCH_ASSOC);

if($dadosUsuario){
    if(password_verify($senha, $dadosUsuario["senha"])){
        echo "Usuario encontrado!";
        echo "Encaminhar para o menu...";
        header('Location: ../../views/index_menu.php');
    }else{
        echo "Senha incorreta!";
        header('Location: ../../views/login.php?sucesso=0');
    }
}else{
    echo "Usuario não encontrado, verifique os dados de login!";
    header('Location: ../../views/login.php?sucesso=0');
}

?>