<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Flowers Store ❀ INICIO</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/site.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:#6B855F; border-color: #6B855F;">
		<div class="container-menu" style=" margin-left: 100px;">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">Flowers Store ❀ INICIO</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--<a href="#" class="texto-menu"> Flawers Store</a>-->
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav left200">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio </a></li>
				<li><a href="carrinho.php"><span class="glyphicon glyphicon-modal-window"></span> Produtos </a></li>
				<li><a href="registrar_cliente.php"><span class="glyphicon glyphicon-modal-window"></span> Minha Conta </a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho <span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sequencia </div>
									<div class="col-md-3">Imagem </div>
									<div class="col-md-3">Nome do Produto </div>
									<div class="col-md-3">Valor <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" style="margin-right: 10px;" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Entrar  </a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary" style="background: #6B855F;border: 0px solid #6B855F;border-radius: 0px;">
								<div class="panel-heading" style="background: #6B855F;border: 0px solid #6B855F;border-radius: 0px;"> Entrar no Site</div>
								<div class="panel-heading" style="background: #6B855F;border: 0px solid #6B855F;border-radius: 0px;">
									<form onsubmit="return false" id="login" style="margin-right: 10px;>
										<label for="email">E-mail:</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Senha:</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Esqueci a Senha (Breve)</a><input type="submit" class="btn btn-success" style="margin-left: 20px;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"  style="background: #6B855F; border: 0px solid #6B855F;border-radius: 0px;" ></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<img src="img/logo.png" style=" margin-top: 100px; margin-left: 100px;">
			<form class="navbar-form" align="center" style="margin-top: -50px;">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Buscar Produto" id="search" style=" height: 45px; width: 400px; ">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn" style="height: 45px; width: 50px; background: #6B855F; ""><span class="glyphicon glyphicon-search"></span></button>
		     </form>
	<p class="container-fluid" style=" width: auto; height: 90px; border-bottom: 1px solid #6B855F;">
		<div>
			<h4 align="center"> ❀ Bem vindo ao site da Flowers Store, boas compras #FiqueEmCasa ! ❀ </h4>
			<h5 align="center"> Frete grátis para Presidente Prudente</h5>
		</div>
	</p>
	<div class="container-fluid" style="background: #6B855F; padding-bottom: 30px; padding-left: 100px;">
		<h2 style="color: #FFFF; margin-left: 30px;">Produtos</h2>
		<h5 style="color: #FFFF; margin-left: 30px; margin-top: -8px;">Confira os lançamentos</h5>
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
						<div id="get_product" >
						</div>
					</div>
					<div class="panel-footer" align="center">&copy; Desenvolvido por Gui e Edu para Laboratorio de Engenharia 2020.</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































