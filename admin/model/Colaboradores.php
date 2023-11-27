<?php 

Class Colaboradores{
    
    
    
private $_id;
private $_nome;
private $_cpf;
private $_telefone;
private $_email;
private $_dependentesNumero;

public function setID($id){$this->_id = $id;  }
public function setNome($nome){$this->_nome = $nome;  }
public function setCpf($cpf){$this->_cpf = $cpf;  }
public function setTel($telefone){$this->_telefone = $telefone;  }
public function setEmail($email){$this->_email = $email;  }
public function setDependentesNumero($dependentesNumero){$this->_dependentesNumero = $dependentesNumero;  }

public function getID(){return $this->_id; }
public function getNome(){return $this->_nome; }
public function getCpf(){return $this->_cpf; }
public function getTel(){return $this->_telefone; }
public function getEmail(){return $this->_email; }
public function getDependentesNumero(){return $this->_dependentesNumero; }

}



?>