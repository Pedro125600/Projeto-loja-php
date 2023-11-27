<?php 

require_once 'FabricaConexao.php'; 
require_once '../model/Produtos.php';

class DAOProdutos{

public function Insert(Produtos $c)
{
    $sql = 'INSERT INTO produtos(descricao ,precoCompra ,precoVenda ,qtdeEstoque)  values ( ? , ? , ? ,?)';
    $stmt = FabricaConexao::Conexao()->prepare($sql);

    $stmt->bindValue(1,$c->getMarca());
    $stmt->bindValue(2,$c->getMOdelo());
    $stmt->bindValue(3,$c->getano());
    $stmt->bindValue(4,$c->getcor());
    $stmt->execute();
    header("Location:../view/Principal.php");
}


}

?>