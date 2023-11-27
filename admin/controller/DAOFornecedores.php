<?php 

require_once 'FabricaConexao.php';
require_once '../model/Fornecedores.php';

class DAOfornecedores{

public function Insert(Fornecedores $c)
{
    $sql = 'INSERT INTO Fornecedores(nome,cnpj,insc_estadual,contato,endereco)  values ( ? , ? , ? , ? , ?)';
    $stmt = FabricaConexao::Conexao()->prepare($sql);

    $stmt->bindValue(1,$c->getMarca());
    $stmt->bindValue(2,$c->getMOdelo());
    $stmt->bindValue(3,$c->getano());
    $stmt->bindValue(4,$c->getcor());
    $stmt->bindValue(5,$c->getvalor());
    $stmt->execute();
    header("Location:../view/Principal.php");
}


}

?>