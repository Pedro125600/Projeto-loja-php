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
  
<div class="col">
    <h5>Loja Informatica - Venda de Hardware e Software</h5>
    <div class="card h-100">
        <div class="card-body">
            <ol class="card-text">
                <li> Sessões são uma forma simples de armazenar dados para usuários
                     individuais usando um ID de sessão único. 
                <li> IDs de sessão normalmente são enviados ao navegador através de cookies 
                     de sessão e o ID é usado para recuperar dados da sessão existente. 
                <li> A ausência de um ID ou cookie de sessão permite que o PHP saiba 
                    que deve criar uma nova sessão e gerar um novo ID de sessão
                <li> <strong>Iniciar uma sessão:</strong> 
                    Antes de poder trabalhar com sessões em PHP, você precisa iniciar uma sessão. 
                   Para isso, use a função session_start() no início do seu script PHP.
                   Definir variáveis de sessão: 
                   Uma vez que a sessão tenha sido iniciada, você pode definir variáveis de sessão 
                   que serão armazenadas no servidor para uso posterior. 
                   Para definir uma variável de sessão, use a sintaxe $_SESSION['variavel'] = valor.

                <li><strong>Acessar variáveis de sessão:</strong>
                    Para acessar uma variável de sessão que você definiu anteriormente, 
                    use a sintaxe $_SESSION['variavel']. Você pode fazer isso em qualquer 
                    script PHP que tenha acesso à sessão.
                    com todos os dados de sessão depois que a sessão iniciar.


                <li><strong>Destruir a sessão:</strong>
                    Quando o usuário fizer logout ou a sessão precisar ser 
                    encerrada por qualquer motivo, você pode destruir a sessão usando a 
                    função session_destroy(). Isso removerá todas as variáveis de sessão 
                    armazenadas no servidor.
            </ol>          
  
</div> <!-- Fim do card-body--> 

</div><!--Fim do card-->
</div><!--Fim da 1 coluna-->

<div class="col">
    <h5>Faça seu Login para acessar a Loja</h5>
    <div class="card h-100">
        <div class="card-body">
           
            <!--Inicio do form--> 
            <form class="row d-flex align-items-bottom justify-content-center" 
            action="../controller/valida.php" method="POST">
              <!--Inicio da imagem-->
            <div class="col-md-10 ">
            <img src="assets/loja.png" alt="logo" width="300" height="300" style="vertical-align:middle" class="img-fluid" >
            </div> <!--Fim da imagem-->
            <div class="col-auto">
              <label for="#">Login-Email</label>
              <input type="text" class="form-control" name="login" placeholder="digite seu email"><br>
              <label for="#">Senha</label>
              <input type="password" class="form-control" name="senha"placeholder="digite sua senha"><br>
              <button type="submit" class="btn btn-primary mb-3">Logar</button>
              </div>
              </div><!--Fim do card-body--> 
            </form><!--Final do form-->
            
</div><!--Fim do card-body-->    
</div><!--Fim do card--> 
</div><!--Fim da 2 coluna-->
</div><!--Fim da row-->
</div><!--Fim do container-->


 </main>
</body>
</html>