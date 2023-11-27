<?php session_start();
        if ($_SESSION['login_session']==null || $_SESSION['login_session']==false) {
          header("Location:../view/login.php");
        }?>
<?php
include_once '../controller/DAOPedidos.php';
include_once '../controller/FabricaConexao.php';
$sql = 'SELECT id,fornecedor ,produto , quantidadeEstoque,dataPedido ,dependentesNumero from pedidos';
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_CLASS);

?>
<!DOCTYPE HTML>
<html lang="pt-br">   
    <head>   
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"  crossorigin="anonymous">
    <title>Loja Informatica - Home</title>
<!--Inicio da navBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Loja</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Crud_1/admin/DAOClientes.php">Cadastro Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastro Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastro Colaboradores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastro Fornecedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controller/logout.php">Sair</a>
        </li>
      </ul>
      <!--Apresentando valor da variavel de sessao no canto superior direito-->
      <form class="d-flex">
        <label>Usuario:  
        </label>
        <?php
       
           echo $_SESSION['login_session'];
       
       
        ?>
        </label>
      </form>
      <!--Fim da apresentacao da variavel de sessao-->
    </div>
  </div>
</nav> <!--Fim da navBar-->
    </head>
 <!------------------------------------------------------------------------------>   
<body>
 <main>  
 <div class="container py-5 h-50"><!--Comeco do conteiner -->
 <div class="row d-flex align-items-center justify-content-center h-50 "> <!--Comeco da linha -->
 <div class="col"></div><!--coluna vazia -->
<div class="col-sm-8"><!--Comeco da coluna principal -->
<div class="card"><!--Comeco do card -->
<div class="card-body"><!--Comeco do body card -->
<h5 class="card-title">Lista Pedidos</h5>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Produto</th>
      <th scope="col">quantidadeEstoque</th>
      <th scope="col">Data</th>
      <th scope="col">dependentesNumero</th>
    </tr>
  </thead> 
  <tbody>
  <?PHP foreach ($linhas as $linha) {
    echo "<tr>";
     echo "<td>". $linha->id."</td>";
     echo "<td>". $linha->fornecedor."</td>";
     echo "<td>". $linha->produto."</td>";
     echo "<td>". $linha->quantidadeEstoque."</td>";
     echo "<td>". $linha->dataPedido."</td>";
     echo "<td>". $linha->dependentesNumero."</td>";
     echo "<td>  <a  class='btn btn-sm btn-primary' href='AlterarClientes.php?acao=alterar&id=$linha->id'>Alterar</a> </td>";
     echo "<td>  <a  class='btn btn-sm btn-danger' href='AlterarClientes.php?acao=deletar&id=$linha->id'>Deletar</a> </td>";
     echo "</tr>";
    }
     ?>
  </tbody>
  
</table>

</div> <!--Fim body do card-->
</div> <!--Fim do card-->
</div> <!--Fim da col principal-->
<div class="col"></div>
</div> <!--Fim da row-->
</div><!--Fim do container-->
 </main>
</body>
</html>