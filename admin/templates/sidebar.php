<nav class="col-md-2 d-none d-md-block bg-light sidebar fundo">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 
            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);
          ?>
        <style >
            .menu{
                background: #042331;
                box-shadow: 0 1px 8px rgba(0, 0, 0, 0.88);
                color: #FFFF;
                padding: 10px;
            }
        </style>

          <li class="nav-item menu" >
            <a class="nav-link <?php echo ($page == '' || $page == 'index.php') ? 'active' : ''; ?>" href="index.php">
              <span data-feather="home"></span>
              Painel de Controle <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item menu" >
            <a class="nav-link <?php echo ($page == 'produtos-cadastrados.php') ? 'active' : ''; ?>" href="produtos-cadastrados.php">
              <span data-feather="file"></span>
              Encomendas
            </a>
          </li>
          <li class="nav-item menu" >
            <a class="nav-link <?php echo ($page == 'produtos.php') ? 'active' : ''; ?>" href="produtos.php">
              <span data-feather="shopping-cart"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item menu" >
            <a class="nav-link <?php echo ($page == 'brands.php') ? 'active' : ''; ?>" href="brands.php">
              <span data-feather="shopping-cart"></span>
              Marcas
            </a>
          </li>
          <li class="nav-item menu">
            <a class="nav-link <?php echo ($page == 'categories.php') ? 'active' : ''; ?>" href="categories.php">
              <span data-feather="shopping-cart"></span>
              Categorias
            </a>
          </li>
          <li class="nav-item menu">
            <a class="nav-link <?php echo ($page == 'customers.php') ? 'active' : ''; ?>" href="customers.php">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item menu">
            <a class="nav-link <?php echo ($page == 'cadastraradm.php') ? 'active' : ''; ?>" href="cadastraradm.php">
              <span data-feather="users"></span>
              Cadastrar novo Adm
            </a>
          </li>
        </ul>

       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 back-white">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bem vindo <?php echo $_SESSION["admin_name"]; ?> ao Painel de Controle</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary"></button>
            <button type="button" class="btn btn-sm btn-outline-secondary"></button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
          </button>
        </div>
      </div>