<?php
define('HOST','localhost');
define( 'DATABASENAME', 'teste');
define( 'USER','root');
define('PASSWORD','');
class FabricaConexao{
protected $conn;

public function __construct()
{
    $this->conexaoBanco();
}

public function conexaoBanco(){

try {

    $this->conn = new PDO('mysql:host='.HOST.';db='.DATABASENAME,USER,PASSWORD); 
    $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e)
{
    echo "falha de conexão ". $e-> getMessage();
    die();
}


}



}

?>