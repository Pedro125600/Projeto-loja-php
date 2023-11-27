<?php 

require_once 'FabricaConexao.php';
require_once '../model/Pedidos.php';

class DAOPedidos{

public function Insert(Pedidos $c)
{
    $sql = 'INSERT INTO pedidos(fornecedor,produto,quantidadeEstoque,dataPedido,dependentesNumero )  values (?,?,?,?,?)';
    $stmt = FabricaConexao::Conexao()->prepare($sql);

    $stmt->bindValue(1,$c->getFornecedor());
    $stmt->bindValue(2,$c->getProduto());
    $stmt->bindValue(3,$c->getQuantidadeEsto());
    $stmt->bindValue(4,$c->getData());
    $stmt->bindValue(5,$c->getdependente());
    $stmt->execute();
    header("Location:../view/Principal.php");
}


}

?>