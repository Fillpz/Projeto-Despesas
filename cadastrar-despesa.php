<script src="./src/jquery/jquery-3.5.1.min.js"></script>
<script src="./src/jquery/jquery.mask-1.14.16.min.js"></script>

<h1 class="mt-5">Cadastrar Despesa</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mt-5 mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mt-2 mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao_despesa" class="form-control">
    </div>

    <div class="mt-2 dropdown">
        <label>Categoria</label>
        <select class="form-select" name="tipo_despesa" aria-label="Default select example">
            <option value="alimentacao" selected>Alimentação</option>
            <option value="moradia">Moradia</option>
            <option value="transporte">Transporte</option>
            <option value="saude">Sáude</option>
            <option value="educacao">Educação</option>
            <option value="entretenimento">Entretenimento</option>
        </select>
    </div>

    <div class="mt-2">
        <label>Valor</label>
        <input id="valor" name="valor_despesa" placeholder="R$ 0.00" class="form-control mask-n-2">
    </div>

    <div class="mt-2 mb-3">
        <label for="Data limite"></label>
        <input type="date" name="data_limite" class="form-control">
    </div>

    <div class="mt-2 mb-3">
        <button type="submit" class="btn" style="background-color: #8DC63F; color:white; font-weight: bold;">Enviar</button>
    </div>
</div>

<script>
    $(".mask-n-2").mask("#.##0,00", {
    reverse: true, translation: {
        '#': {
            pattern: /-|\d/,
            recursive: true
        }
    }, } );

    console.log($(".mask-n-2"));
</script>

</form>