
<?php

session_start();
if(!isset($_SESSION['usuario'])){
    return header('location:server/logout.php');
}
$usuario = $_SESSION['usuario'];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Saldo</title>
    <style>
        body{
           background-image: url(img/pexels-croberin-photography-1422408.jpg);
           
            background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
      
        }
        #saldo{
          font-size: 25px;
        }
       

    </style>
</head>
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
     <div class="d-flex float-end align-middle" ><i class="fas fa-user mx-1"></i>
     <?php echo $usuario['nome'].' '.$usuario['apelido'];?>
    </div>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center h-100" style="height:80% !important;">
          <div class="alert alert-info text-center" style="width: 40%; "  id="saldo">
            <b>Saldo Actual : </b><?php 
              require_once 'server/conexao.php';
              $pdo=$conexao->prepare('select * from usuario where conta=:conta');
              $pdo->bindValue(':conta',$usuario['conta']);
              $pdo->execute();
              $saldo = $pdo->fetch(PDO::FETCH_ASSOC)['saldo'];
              echo $saldo; ?>MTS
          </div>
        </div>
    </div>
   

    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>