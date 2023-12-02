<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpendMate</title>
</head>

<body>

</body>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Despesas</title>
    <link href="./src/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: var(--cor_primaria);">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" style="color: #ffffff; font-weight: bold" href="index.php">SpendMate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- <div class="div-container-listagem"> -->
    <div class="mt-5 mx-5">
        <!-- <div> -->
        <?php
        include("./db/config.php");
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("./core/cadastrar-despesa.php");
            break;
          case "listar":
            include("./core/listar-despesa.php");
            break;
          case "salvar":
            include("./core/salvar.php");
            break;
          case "editar":
            include("./core/editar.php");
            break;
          default:
            echo "<div class='d-flex div-header-table-style-css justify-content-between align-items-center'>";
            echo "<h3 class='fs-3 fw-bold float-left' style='margin-left:15px;' >Lista de Despesas</h3>";
            if (@$_REQUEST["page"] != "novo") {
              echo "<a type='submit' id='cadastrar' href='?page=novo' class='btn ml-auto' style='background-color: var(--cor_secundaria); color:white; margin-right: 15px; font-weight: bold;'>Cadastrar</a>";
            }
            echo "</div>";
        }
        ?>
    </div>

    <?php 
          switch (@$_REQUEST["page"]){
            case (!"listar"):
              include("./core/listar-despesa.php");
              break;
          }
        ?>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./src/jquery/jquery-3.5.1.min.js"></script>

</body>

</html>