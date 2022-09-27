
<?php

session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>AGFM -ATM</title>
    <style>
      #fff{
        background-image: url(img/pexels-croberin-photography-1422408.jpg);
        background-size: cover;
      }
    </style>
  </head>
  
  <body id="fff">
    
    <div class="container-fluid">
      
      <div class="row d-flex justify-content-center d-flex align-items-center" style="height: 100vh;">
        
        <div class="card p-2" style="background-image: linear-gradient(to right, rgb(20, 147 ,220), rgb(17, 54, 51));">
          <img src="img/agfm.png" alt="" width="300px" height="200px">
          <h4 class="text-center">Seja bem vindo!</h4>
          <div class="row px-3">
            <?php if(isset($_SESSION['erro'])){ ?>
              <div class="alert alert-danger w-100"><?php echo $_SESSION['erro'];
              unset($_SESSION['erro']);?>
              </div>
          <?php }?>
          </div>

          <form method="post" action="server/entrar.php">
          <div class="form-group">
              <label >Número da conta  </label>
             <input type="text" class="form-control" placeholder="Numero da conta" name="conta">
              <?php if(isset($_SESSION['conta-vazia'])){?>
              <span class="text-danger"> <?php echo $_SESSION['conta-vazia']; unset($_SESSION['conta-vazia']); ?></span>
              <?php }elseif(isset($_SESSION['conta-errada'])){ ?>
                <span class="text-danger"> <?php echo $_SESSION['conta-errada']; unset($_SESSION['conta-errada']); ?></span>
              <?php }?>  
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
              <?php if(isset($_SESSION['senha-vazia'])){?>
              <span class="text-danger"> <?php echo $_SESSION['senha-vazia']; unset($_SESSION['senha-vazia']); ?></span>
              <?php }elseif(isset($_SESSION['senha-errada'])){ ?>
                <span class="text-danger"> <?php echo $_SESSION['senha-errada']; unset($_SESSION['senha-errada']); ?></span>
              <?php }?> 
            </div>
            <button  type="submit" class="btn btn-primary btn-block">Acessar</button>
            <button type="reset" class="btn btn-danger btn-block">Limpar</button>
          </form>
        </div>
      </div>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>