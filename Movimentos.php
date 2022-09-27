<?php

session_start();
if(!isset($_SESSION['usuario'])){
    return header('location:server/logout.php');
}
$usuario=$_SESSION['usuario'];

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Movimentos</title>
</head>
<style>
 body{
     background-image: url(img/pexels-croberin-photography-1422408.jpg);
     background-size: cover;
 }
 .tabela{
display: flex;
text-align: center;

 }
 table{
   text-align: justify;
   
 }
 .baixar{
   text-align: center;
   font-size:20px;
   color: red;
   background-color: gray;
   cursor: pointer;
   border-radius: 3px;
 }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="menu.php">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link btn btn-danger text-white" href="server/logout.php">Sair</a>
        </li>
      </ul>
     
     </div>
     <div class="d-flex float-end align-middle"><i class="fas fa-user mx-1"></i>
     <?php echo $usuario['nome'].' '.$usuario['apelido'];?>
    </div>
    </div>
  </div>
</nav>

<div class="container py-3">
  <div class="row">
    <div class="col-12">
      <h5>Movimentos</h5>
  
    </div>
  </div>
  <div class="row">
    <table class="table table-hover bg-white">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Descricao</th>
          <th scope="col">Valor</th>
          <th scope="col">Data</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require_once 'server/conexao.php';
          $pdo = $conexao->prepare('select * from movimento where conta=:conta');
          $pdo->bindValue(':conta', $usuario['conta']);
          if($pdo->execute()){
          $movimentos = $pdo->fetchAll(PDO::FETCH_OBJ);
          $i=0;
          foreach ($movimentos as $mov) {
              $i++;
              echo
              "<tr>
              <th scope='row'>$i</th>
              <td>$mov->nome</td>
              <td>$mov->descricao</td>
              <td>$mov->valor MTS</td>
              <td>$mov->data</td>
              
              </tr>
              ";
          }
          }
        ?>
      </tbody>
    </table>
  </div>
</div>


<script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
        
</body>
</html>