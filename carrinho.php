<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Flowers Store ❀ CARRINHO DE COMPRAS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary" style="border-color: #6B855F;" >
					<div class="panel-heading" style=" background: #6B855F; border-radius: 0px; width: 1095px; "> Itens do Carrinho</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Ação</b></div>
							<div class="col-md-2 col-xs-2"><b>Imagem</b></div>
							<div class="col-md-2 col-xs-2"><b>Produto</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantidade</b></div>
							<div class="col-md-2 col-xs-2"><b>Preço</b></div>
							<div class="col-md-2 col-xs-2"><b>Preço em <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout"></div>
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
</body>	
</html>
















		