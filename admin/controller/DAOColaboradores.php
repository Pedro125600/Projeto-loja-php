<?php 

require_once 'FabricaConexao.php'; 
require_once '../model/Colaboradores.php';

class DAOColaborador{

public function Insert(Colaboradores $c)
{
    $sql = 'INSERT INTO colaborador(nome,cpf,telefone,email,dependentesNumero)  values ( ? , ? , ? , ? , ?)';
    $stmt = FabricaConexao::Conexao()->prepare($sql);

    $stmt->bindValue(1,$c->getNome());
    $stmt->bindValue(2,$c->getCpf());
    $stmt->bindValue(3,$c->getTel());
    $stmt->bindValue(4,$c->getEmail());
    $stmt->bindValue(5,$c->getDependentesNumero());
    $stmt->execute();
    header("Location:../view/Principal.php");
}


}

?>