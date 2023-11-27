<?php 
Class Cliente{
private $_id;
private $_nome;
private $_cpf;
private $_telefone;
private $_email;
private $_endereco;

public function setID($id){$this->_id = $id;  }
public function setNome($Nome){$this->_nome = $Nome;  }
public function setcpf($Cpf){$this->_cpf = $Cpf;  }
public function settel($Telefone){$this->_telefone = $Telefone;  }
public function setemail($Email){$this->_email = $Email;  }
public function setendereco($Endereco){$this->_endereco = $Endereco;  }


public function getID(){return $this->_id ;  }
public function getNome(){return $this->_nome ;  }
public function getcpf(){return $this->_cpf ;  }
public function gettel(){return $this->_telefone ;  }
public function getemail(){return $this->_email ;   }
public function getendereco(){return $this->_endereco ;  }
}


?>