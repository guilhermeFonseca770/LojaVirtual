 <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background: #063146;">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"> ❀ Flawers Store  ❀ </a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Em teste" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link" href="../admin/admin-logout.php">Sair</a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="../admin/cadastraradm.php">Registre-se</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../admin/login.php">Entrar</a>
	    			<?php
    			}


    			
    		}

    	?>
      
    </li>
  </ul>
</nav>