<?php 

Class Produtos{
private $_id;
private $_descricao;
private $_precoCompra;
private $_precoVenda;
private $_qtdeEstoque;


public function setID($id){$this->_id = $id;  }
public function setMarca($Descricao){$this->_descricao = $Descricao;  }
public function setMOdelo($PrecoCompra){$this->_precoCompra = $PrecoCompra;  }
public function setano($PrecoVenda){$this->_precoVenda = $PrecoVenda;  }
public function setcor($QtdeEstoque){$this->_qtdeEstoque = $QtdeEstoque;  }



public function getID(){return $this->_id ;  }
public function getMarca(){return $this->_descricao ;  }
public function getMOdelo(){return $this->_precoCompra;  }
public function getano(){return $this->_precoVenda ;  }
public function getcor(){return $this->_qtdeEstoque ;   }
}



?>