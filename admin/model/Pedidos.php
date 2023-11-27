<?php 

Class Pedidos{

        
private $_id;
private $_fornecedor;
private $_produto;
private $_quantidadeEstoque;
private $_dataPedido;
private $_dependentesNumero;

public function setID($id){$this->_id = $id;  }
public function setFornecedor($Fornecedor){$this->_fornecedor = $Fornecedor;  }
public function setProduto($Produto){$this->_produto = $Produto;  }
public function setQuantidadeEsto($QuantidadeEstoque){$this->_quantidadeEstoque = $QuantidadeEstoque;  }
public function setData($DataPedido){$this->_dataPedido = $DataPedido;  }
public function setdependente($DependentesNumero){$this->_dependentesNumero = $DependentesNumero;  }


public function getID(){return $this->_id ;  }
public function getFornecedor(){return $this->_fornecedor ;  }
public function getProduto(){return $this->_produto ;  }
public function getQuantidadeEsto(){return $this->_quantidadeEstoque ;  }
public function getData(){return $this->_dataPedido ;   }
public function getdependente(){return $this->_dependentesNumero ;  }
}
    




?>