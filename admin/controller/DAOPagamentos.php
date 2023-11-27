<?php 

require_once 'FabricaConexao.php';
require_once '../model/Pagamentos.php';

class DAOPagamentos{

public function Insert(Pagamentos $c)
{
    $sql = 'INSERT INTO pagamentos(forma_pagamento , prazo )  values ( ? , ? )';
    $stmt = FabricaConexao::Conexao()->prepare($sql);

    $stmt->bindValue(1,$c->getMarca());
    $stmt->bindValue(2,$c->getMOdelo());
    $stmt->execute();
    header("Location:../view/Principal.php");
}
}




?>