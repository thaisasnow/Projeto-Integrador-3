<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #b19cd9;">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formulario-cadastro-cliente.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="listagem_de_clientes.php">Listagem</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formulario-cadastro-livro.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="listagem_de_livros.php">Listagem</a></li>
            </ul>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="quemSomos.php">Quem Somos</a>
           </li>
           <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="faleConosco.php">Fale Conosco</a>
           </li>

            <li class="nav-item">
              <a class="nav-link disabled"><?= $_SESSION['login']->email ?></a>
            </li>
      <form id="formSearchName" class="d-flex" role="search" method="post" action="localizaCliente.php">
        
        <input id="searchName" class="form-control me-1" name="nomeCliente" type="search" placeholder="Nome Cliente" aria-label="Search"> 
      </form>
        <form id="formSearchLivro" class="d-flex" role="search" method="post" action="localizaLivro.php">
        
          <input id="searchLivro" class="form-control me-1" name="nomeLivro" type="search" placeholder="Nome do Título" aria-label="Search"> 
        </form>

        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
        
      
    </div>
  </div>
</nav> 

