<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		return header('location:server/logout.php');
	}
	$usuario=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Credito</title>
		<style type="text/css">
			*{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
				font-family: Arial, Helvetica, sans-serif;
			}

			body{
				display: flex;
				background-color: #666;
				justify-content: center;
				align-items: center;
				min-height: 100vh;
			background-image: url(img/pexels-croberin-photography-1422408.jpg);
			background-size: cover;
			}
			.container{
				width: 1150px;
				padding: 20px;
				display: flex;
				align-items: center;
				justify-content: center;
				flex-wrap: wrap;
			}
			.container .card-1{
				position: relative;
				padding: 10px;
				width: 300px;
				background-color: #fff;
				margin: 20px; 
				border: 1px solid black;
				border-radius: 20px;
				overflow: hidden;
				transition: 0.5s;
				text-align: center;
				height: 460px;
			}
			.container .card-1 img{
				transition: 0.5s;
				border-radius: 90px;
			}
			.container .card-1 h1{
				font-size: 2rem;
			}
			.container .card-1 .content-1{
				padding: 20px;
				text-align: center;
			}
			.container .card-1 .content-1 p{
				color:#666;
				transition: 0.5s;
			}
			.container .card-1 .content-1 a{
				position: relative;
				display: inline-block;
				padding: 10px 20px;
				background-color: #000;
				color:#fff;
				border-radius: 40px;
				text-decoration: none;
				transition: 0.5s;
				outline: none;
				margin-top: 20px;
	
			}
			.container .card-1:hover{
				background-color: #D42A2A;
				color:white;
				margin-top: -30px;
				box-shadow: 2px 20px 25px #dc2e68;
				border-color: #dc2e69;
			}
			
		
			.container .card-1:hover .content-1 a{
				color:red;
				background-color: beige;
				font-weight: bold;
			}
		


			.container .card-2{
				position: relative;
				padding: 10px;
				width: 300px;
				background-color: #fff;
				margin: 20px; 
				border: 1px solid black;
				border-radius: 20px;
				overflow: hidden;
				transition: 0.5s;
				text-align: center;
				height: 460px;
			}
			.container .card-2 img{
				transition: 0.5s;
				border-radius: 90px;
			}
			.container .card-2 h1{
				font-size: 2rem;
			}
			.container .card-2 .content-2{
				padding: 20px;
				text-align: center;
			}
		
			.container .card-2 .content-2 a{
				position: relative;
				display: inline-block;
				padding: 10px 20px;
				background-color: #000;
				color:#fff;
				border-radius: 40px;
				text-decoration: none;
				transition: 0.5s;
				outline: none;
				margin-top: 20px;
	
			}
			.container .card-2:hover{
				background-color: yellow;
				color:green;
				margin-top: -30px;
				box-shadow: 2px 20px 25px yellow;
				border-color: yellow;
			}
			
			.container .card-2:hover .content-2 p{
				color:green;
			}
			.container .card-2:hover .content-2 a{
				color:yellow;
				background-color: green;
				font-weight: bold;
			}


			.container .card-3{
				position: relative;
				padding: 10px;
				width: 300px;
				background-color: #fff;
				margin: 20px; 
				border: 1px solid black;
				border-radius: 20px;
				overflow: hidden;
				transition: 0.5s;
				text-align: center;
				height: 460px;
			}
			.container .card-3 img{
				transition: 0.5s;
				border-radius: 90px;
			}
			.container .card-3 h1{
				font-size: 2rem;
			}
			.container .card-3 .content-3{
				padding: 20px;
				text-align: center;
			}
			.container .card-3 .content-3 p{
				color:#666;
				transition: 0.5s;
			}
			.container .card-3 .content-3 a{
				position: relative;
				display: inline-block;
				padding: 10px 20px;
				background-color: #000;
				color:#fff;
				border-radius: 40px;
				text-decoration: none;
				transition: 0.5s;
				outline: none;
				margin-top: 20px;
	
			}
			.container .card-3:hover{
				background-color: #F87821;
				color:white;
				margin-top: -30px;
				box-shadow: 2px 20px 25px orange;
				border-color: orange;
			}
			.container .card-3:hover img{
				filter: invert(1);
			}
			.container .card-3:hover .content-3 p{
				color:white;
			}
			.container .card-3:hover .content-3 a{
				color:orange;
				background-color: white;
				font-weight: bold;
			}
		</style>
	</head>
	<body class="imagem-fundo">	
		


		<div class="container">
			<div class="card-1">
				<div class="imagem">
					<img src="img/voda.jpg" alt="vodacom" height="200px">
				</div>
				<h1>Vodacom</h1>
				<div class="content-1">
					<p>Compre recargas e se habilite a ganhar diversos bonus, na vodacom e tudo, tudo bom Vamos?</p>
					<a href="voda.php">Comprar Agora</a>
				</div>
			</div>
			<!--segundo CARD-->
			<div class="card-2">
				<div class="imagem">
					<img src="img/TMCEL.png" alt="Mcel" height="200px">
				</div>
				<h1>Tmcel</h1>
				<div class="content-2">
					<p>Compre recargas e se habilite a ganhar diversos bonus, vamos la falar.</p>
					<a href="mcel.php">Comprar Agora</a>
				</div>
			</div>
			<!--Terceiro CARD-->
			<div class="card-3">
				<div class="imagem">
					<img src="img/R.png" alt="movitel" height="200px">
				</div>
				<h1>Movitel</h1>
				<div class="content-3">
					<p>Compre recargas e se habilite a ganhar diversos bonus, movitel a todo momento em todo lugar.</p>
					<a href="mov.php">Comprar Agora</a>
				</div>
			</div>
		</div>
		<script src="js/all.min.js"></script> 
   <script src="js/bootstrap.min.js"></script>
	</body>
</html>