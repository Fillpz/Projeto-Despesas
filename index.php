<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Despesas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/style.css">
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #8DC63F;">
  <div class="container-fluid mx-5">
    <a class="navbar-brand" style="color: #ffffff; font-weight: bold" href="index.php">Controle de Despesas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container-fluid">
<div class="card mt-5 mx-5">
  <div class="card-header">
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
                    echo "<h1 class='float-left'>Lista de Despesas</h1>";
            }
        ?>
        <a type="submit" id="cadastrar" href="?page=novo" class="btn" style="background-color: #8DC63F; color:white; font-weight: bold;">Cadastrar</a>
  </div>

  <div class="card-body">
    <?php
      if(@$_REQUEST["page"] != "listar" &&  @$_REQUEST["page"] != "novo")
        include("listar-despesa.php");
    ?> 
  </div>

</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./src/jquery/jquery-3.5.1.min.js"></script>
    
  </body>
  
</html>