<link rel="stylesheet" href="../src/style.css">

<?php 

    $sql = "SELECT * FROM despesas";

    $res = $conn->query($sql);

    $quantidade = $res->num_rows;

    $totalDespesas = 0;

    if($quantidade > 0){
        print "<table class='table mt-4 table-style-css shadow table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Descrição</th>";
            print "<th>Categoria</th>";
            print "<th>Valor</th>";
            print "<th>Data final</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->descricao_despesa."</td>";
            print "<td>".$row->tipo_despesa."</td>";
            print "<td>".$row->valor_despesa."</td>";
            print "<td>".$row->data_limite."</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn button-enviar' style='width:78px;'>Editar</button>


                <button onclick=\"if(confirm('Deseja realmente exluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger' style='width:78px;'>Excluir</button>";

                
            print "</tr>";
            $totalDespesas += $row->valor_despesa;
        }
    } else {
        print "<p class='alert alert-danger>Sem registros</p>";
    }

?>