<?php 
//Lógica de inserção na tabela professor
require_once ('../../config/dbConnect.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $cargo = filter_input(INPUT_POST, 'cargo');

    $insertProf = "INSERT INTO func (nome, contato, cod_tip_func) VALUES (:nome, :contato, :cod_tip_func)";
    $req = $dbh->prepare($insertProf);
    $req->bindValue(':nome', $nome);
    $req->bindValue(':contato', $telefone);
    $req->bindValue(':cod_tip_func', $cargo);
    if($req->execute()){
        header("Location: ../../views/add_fun.php?sucesso=1");

    }else{
        header("Location: ../../views/add_fun.php?sucesso=0");
    }

}else{
    header("Location: ../../views/add_fun.php");
}
?>