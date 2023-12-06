
<?php 

    $sql = "SELECT * FROM despesas ORDER BY data_limite";

    
    $res = $conn->query($sql);

    $quantidade = $res->num_rows;

    $totalDespesas = 0;

    if($quantidade > 0){
        print " <div class='container mx-auto p-0'>";
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
            $string = $row->valor_despesa;

            $newString = str_replace(".", ",", $string);

            print "<td>".ucfirst($row->tipo_despesa)."</td>";
            print "<td class='text-right'> R$".$newString."</td>";

            $data = $row->data_limite;
            $arrayData = explode("-", $data);

            print "<td>".$arrayData[2]."/".$arrayData[1]. "/" .$arrayData[0]. "</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn button-enviar' style='width:78px;'>Editar</button>


                <button onclick=\"if(confirm('Deseja realmente exluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger' style='width:78px;'>Excluir</button>";

                
            print "</tr>";
            $totalDespesas += $row->valor_despesa;
        }
        print "<h2 class='mt-4 text-center fs-3 fw-bold float-right' style='margin-left:15px;'>Custo Total: R$".str_replace(".", ",", $totalDespesas) ."</h2>";
    } else {
        print "<p class='alert alert-danger>Sem registros</p>";
    }

?>