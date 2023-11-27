<?php

require_once 'FabricaConexao.php'; 
require_once '../model/Cliente.php'; 
class DAOClientes{
  
public function Insert(Cliente $c)
{

    $sql ='INSERT INTO clientes(nome,cpf,telefone,email,endereco)values(?,?,?,?,?)';
    $stmt = FabricaConexao::Conexao()->prepare($sql);

    $stmt->bindValue(1,$c->getNome());
    $stmt->bindValue(2,$c->getCpf());
    $stmt->bindValue(3,$c->getTel());
    $stmt->bindValue(4,$c->getEmail());
    $stmt->bindValue(5,$c->getEndereco());
    $stmt->execute();
  header("Location:../view/Principal.php");
}  

public function update(Cliente $c)
{

  $sql ='UPDATE clientes set nome=? ,cpf=? ,telefone=? ,email=? ,endereco=?  WHERE idClientes = ?  ';
  $stmt = FabricaConexao::Conexao()->prepare($sql);

  $stmt->bindValue(1,$c->getNome());
  $stmt->bindValue(2,$c->getCpf());
  $stmt->bindValue(3,$c->getTel());
  $stmt->bindValue(4,$c->getEmail());
  $stmt->bindValue(5,$c->getEndereco());
  $stmt->bindValue(6,$c->getID());
  $stmt->execute();

}  

public function find($id)
{
  $sql ='SELECT * from clientes WHERE idClientes = :id';
  $stmt = FabricaConexao::Conexao()->prepare($sql);
  $stmt->bindParam(':id',$id,PDO::PARAM_INT);
  $stmt->execute();
  return $stmt->fetch();

}

public function Delete($id)
{
  $sql ='DELETE from clientes WHERE idclientes = :id';
  $stmt = FabricaConexao::Conexao()->prepare($sql);
  $stmt->bindParam(':id',$id,PDO::PARAM_INT);
  $stmt->execute();
  header("Location:../view/ListaCliente.php");
}

}
?>