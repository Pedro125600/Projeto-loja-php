<?php 

Class Fornecedores{

private $_id;
private $_nome;
private $_cnpj;
private $_insc_estadual;
private $_contato;
private $_endereco;

public function setID($id){$this->_id = $id;  }
public function setMarca($Nome){$this->_nome = $Nome;  }
public function setMOdelo($Cnpj){$this->_cnpj = $Cnpj;  }
public function setano($Insc_estadual){$this->_insc_estadual = $Insc_estadual;  }
public function setcor($contato){$this->_contato = $contato;  }
public function setvalor($Endereco){$this->_endereco = $Endereco;  }


public function getID(){return $this->_id ;  }
public function getMarca(){return $this->_nome ;  }
public function getMOdelo(){return $this->_cnpj ;  }
public function getano(){return $this->_insc_estadual ;  }
public function getcor(){return $this->_contato ;   }
public function getvalor(){return $this->_endereco ;  }
}



?>