<head>
    <link rel="stylesheet" href="../src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&family=Roboto+Slab:wght@900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container mt-1 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 div-formulario">
                <div class="card shadow">
                    <div class="card-header div-header-cadastrar-despesas">
                        <h3 class="text-center fs-4 fw-bold">Cadastrar Despesa</h3>
                    </div>
                    <div class="card-body">
                        <form action="?page=salvar" method="POST">
                            <input type="hidden" name="acao" value="cadastrar">

                            <div class="mt-3">
                                <label for="nome"><span style='color:red;margin-right:5px;'>*</span>Nome</label>
                                <input type="text" required name="nome" onfocus="limparPlaceholder(this)"
                                    placeholder="Nome da despesa..." class="form-control">
                            </div>

                            <div class="mt-3">
                                <label for="descricao_despesa">Descrição</label>
                                <input type="text" name="descricao_despesa" onfocus="limparPlaceholder(this)"
                                    placeholder="Fale sobre a despesa..." class="form-control">
                            </div>

                            <div class="mt-3">
                                <label for="tipo_despesa"><span style='color:red;margin-right:5px;'>*</span>Categoria</label>
                                <select class="form-select" required name="tipo_despesa" aria-label="Default select example">
                                    <option value="alimentacao" selected>Alimentação</option>
                                    <option value="moradia">Moradia</option>
                                    <option value="transporte">Transporte</option>
                                    <option value="saude">Saúde</option>
                                    <option value="educacao">Educação</option>
                                    <option value="entretenimento">Entretenimento</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <label for="valor_despesa"><span style='color:red;margin-right:5px;'>*</span>Valor</label>
                                <input id="valor" required name="valor_despesa" onfocus="limparPlaceholder(this)"
                                    placeholder="R$ 0.00" class="form-control mask-n-2">
                            </div>

                            <div class="mt-3">
                                <label for="data_limite"><span style='color:red;margin-right:5px;'>*</span>Data limite</label>
                                <input type="date" required name="data_limite" class="form-control">
                            </div>

                            <div class="mt-4 justify-content-end div-botoes-style-css">
                                <a class="btn button-cancelar btn-danger" href='index.php'
                                    style='color:white; font-weight: bold;'>Cancelar
                                </a>
                                <button type="submit" class="btn button-enviar"
                                    >Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./src/jquery/jquery-3.5.1.min.js"></script>
    <script src="./src/jquery/jquery.mask-1.14.16.min.js"></script>
    <script>
    function limparPlaceholder(elemento) {
        elemento.placeholder = "";
    }
    </script>

    <script>
    $(".mask-n-2").mask("#0.00", {
        reverse: true,
        translation: {
            '#': {
                pattern: /-|\d/,
                recursive: true
            }
        }
    });
    </script>

</body>