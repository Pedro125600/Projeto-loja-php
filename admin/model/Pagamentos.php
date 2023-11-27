<?php 
Class Pagamentos{


private $_id;
private $_forma;
private $_prazo;

        
        public function setID($id){$this->_id = $id;  }
        public function setMarca($Forma){$this->_forma = $Forma;  }
        public function setMOdelo($Prazo){$this->_prazo = $Prazo;  }
 
        
        
        public function getID(){return $this->_id ;  }
        public function getMarca(){return $this->_forma ;  }
        public function getMOdelo(){return $this->_prazo ;  }
     
        
            

}

?>