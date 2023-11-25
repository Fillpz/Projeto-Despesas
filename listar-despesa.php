<?php 

    $sql = "SELECT * FROM despesas";

    $res = $conn->query($sql);

    $quantidade = $res->num_rows;

    if($quantidade > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Descrição</th>";
            print "<th>Categoria</th>";
            print "<th>Valor</th>";
            print "<th>Data final</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->descricao_despesa."</td>";
            print "<td>".$row->tipo_despesa."</td>";
            print "<td>".$row->valor_despesa."</td>";
            print "<td>".$row->data_limite."</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger>Sem registros</p>";
    }

?>