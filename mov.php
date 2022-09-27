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
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Credelec ATM</title>
    <style>
        body{
    background-image: url(img/MOVITEL.jpg);
    
        background-size: cover;
        height: 100vh;
        font-family: Arial, Helvetica, sans-serif;
        }
        
        fieldset{
   
        height: 330px;
        border: 10px solid linear-gradient(to right, rgb(20, 147 ,220), rgb(17, 54, 51)); ;
        width: 500px;
       /* background-color: darkslategray;*/
        

        }
        .filho{
        display: flex;
        position: absolute;
        justify-content: center;
        height: 50vh;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        }

        h2{
        text-align: center;
        font-size: 20px;
        color: white;
      
   }

   input{
background: none;
border: none;
border-bottom: 1px solid black;
    outline: none;
    color: black ;
    font-size: 15px;
    width: 90%;
    letter-spacing: 2px;
    margin-left:20px;
       
   }
   
   .Confirmar{
    background-color: green;
    width: 120px;
    border: none;
    padding: 15px;
    color: white;
    font-size: 20px;
    cursor: pointer;
    border-radius: 7px;
    text-align: center;
    margin-right: 86px;
    margin-top: 7px;
    
   }
   .Cancelar{
    background-color: red;
    width: 120px;
    border: none;
    padding: 15px;
    color: white;
    font-size: 20px;
    cursor: pointer;
    border-radius: 7px;
    text-align: center;
    margin-left: 96px;
    margin-top: 7px;

   }
   form{
       background-color: #9d432b;
       padding: 20px;
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
     <div class="d-flex float-end align-middle"><i class="fas fa-user mx-1"></i>
     <?php echo $usuario['nome'].' '.$usuario['apelido'];?>
    </div>
    </div>
  </div>
</nav>

    
 
        <div class="filho">
            <fieldset>
                <form action= "server/creditoMovitel.php" method="POST">
                <h2> Compra credito </h2>
                <?php if(isset($_SESSION['success'])){?>
    <span class="text-success"><b><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></b></span>
                    <?php }?> 
          
           
            <br><br>
            <input type="text" id="numero contador" name="numeroCelular" placeholder="Digite o numero do celular (86/87) " minlength="9" maxlength="9" >
            <?php if(isset($_SESSION['erro-numero'])){?>
                    <span class="text-danger"> <?php echo $_SESSION['erro-numero']; unset($_SESSION['erro-numero']); ?></span>
                    <?php }?> 
            <br><br>
            <br><br>
         
            <br><br>
            <input type="number" id="valor" name="valor" placeholder="Digite o valor (Acima de 10)">
            <?php if(isset($_SESSION['erro-valor'])){?>
                    <span class="text-danger"> <?php echo $_SESSION['erro-valor']; unset($_SESSION['erro-valor']); ?></span>
                    <?php }?>
           <br><br>
            <div class="d-flex justify-content-end">
            <button class="btn btn-success form-control mx-4"><i class="fas fa-check"></i> Confirmar </button>
             <a href="index.php" class="btn btn-danger form-control"><i class="fas fa-times-circle"></i> Cancelar</a>
            </div>
           

                </form>
            </fieldset>
           
          

        </div>
    
 
    
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>