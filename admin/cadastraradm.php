<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4" style="background: #FFFF; border-radius: 3px; box-shadow: 0 1px 8px rgba(0, 0, 0, 0.88); padding: 10px;">
			<h4>Registro do Administrador</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
			    <label for="name">Nome: </label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Seu Nome">
			  </div>
			  <div class="form-group">
			    <label for="email">E-mail para acesso: </label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail@e-mail.com">
			    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com mais ninguém.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Senha:</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirmar Senha:</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Repita a Senha">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-primary register-btn">Registrar</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
