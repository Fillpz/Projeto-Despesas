<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Despesas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #8DC63F;">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #ffffff; font-weight: bold" href="index.php">Controle de Despesas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=novo">Cadastrar Despesa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=listar">Listar Despesas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt5">            
        <?php 
            include("config.php");
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("cadastrar-despesa.php");
                    break;
                case "listar":
                    include("listar-despesa.php");
                    break;
                case "salvar":
                    include("salvar.php");
                    break;
                default:
                    echo "<h1>Página inicial</h1>";
            }
        ?>
        </div>
    </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  
</html>