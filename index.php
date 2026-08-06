<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="https://images.icon-icons.com/2699/PNG/512/minecraft_logo_icon_168974.png" alt="Logo" width="30" height="25" class="d-inline-block align-text-top"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Relatórios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selecione a opção
          </a>
          <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="#">Usuários</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Produtos</a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li
            ><a class="dropdown-item" href="#">Clientes</a>
        </li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <h1> Bem vindo ao site </h1>
    <button type="button" class="btn btn-success">Salvar</button>
<div class="alert alert-warning" role="alert">
  Cuidado! Sua nota vai ser I
</div>

<div class="card">
  <div class="card-header bg-dark">
    <span class="text-white fw-bold">Pesquisar</span>
    
  </div>

  <div class="card-body">
    <p class="card-text">Aqui será um menu de pesquisa</p>
    <a href="#" class="btn btn-info">Pesquisar</a>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>