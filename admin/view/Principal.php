<?php 
session_start();

if ($_SESSION['login_session']==null || $_SESSION['login_session']==false ){
  header("Location : login.php");
}

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
    <title>Aula PHP - Revisão</title>
  
    </head>
<body>
 <main>  

<div class="container py-5 h-50">
<div class="row d-flex align-items-center justify-content-center h-50 ">
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
          <a class="nav-link" href="navbar.php">Cadastro Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
   
      </ul>
      <form class="d-flex">
        <label>Usuario:  
        </label><?php 
 echo $_SESSION['login_session'];?>
        </label>
      </form>
    </div>
  </div>
</nav>  
</div><!--Fim da row-->
</div><!--Fim do container-->

<?PHP
 include "../controller/conecta.php";
 #$db = new FabricaConexao();
 #$db->conexaoBanco();

 echo "Cadastrar Clientes "; 

 echo "<a href='navbar.php'>Cadastro cliente</a>";
 echo "<br>";
echo "Se desejar SAIR da Sessao clique abaixo "; 
 echo "<br>";
echo "<a href='logout.php'>Deseja sair?</a>";
?>
<a href="../controller/logout.php">Deseja sair?</a>
 </main>
</body>
</html>
