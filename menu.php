<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    return header('location:server/logout.php');
  }
  $usuario = $_SESSION['usuario'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">


    <title>ATM AGFM-Menu</title>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(img/pexels-croberin-photography-1422408.jpg);
    background-size: cover;
    height: 90vh;

    }
   #pai{
            
   margin-left: auto;
   margin-right: auto;
    width: 1300px;
    margin-top: 150px;
          }


</style>
  </head>
  <body >
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

    
    <div class="cnnontainer-fluid d-flex justify-content-center align-items-center margin-left:20px"  >
        <div class="row d-flex justify-content-center">
            <div class="col-5 d-flex flex-column justify-content-center" id="pai">
                <h2 class="text-center"> AGFM ATM - Menu</h2>
                <a href="saldo.php" class="btn btn-success btn-lg btn-block">Ver Saldo </a>
                <a href="Movimentos.php" class="btn btn-success btn-lg btn-block">Ver Movimentos</a>
                <a href="Levantamento.php" class="btn btn-success btn-lg btn-block">Fazer Levantamento</a>
                <a href="Credito.php" class="btn btn-success btn-lg btn-block">Comprar Credito</a>
                <a href="Credelec.php" class="btn btn-success btn-lg btn-block">Comprar Credelec</a>
                <a href="server/logout.php" class="btn btn-danger btn-lg btn-block">Sair do Sistema</a>
            </div>
            
        </div>
        </div>
        <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>