<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $descricao_despesa = $_POST["descricao_despesa"];
            $tipo_despesa = $_POST["tipo_despesa"];
            $valor_despesa = $_POST["valor_despesa"];
            $data_limite = $_POST["data_limite"];

            $sql = "INSERT INTO despesas (nome, descricao_despesa, tipo_despesa, valor_despesa, data_limite) VALUES ('{$nome}', '{$descricao_despesa}', '{$tipo_despesa}', '{$valor_despesa}', '{$data_limite}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Despesa cadastrada com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }


            break;

        case 'editar':
            break;
        case 'excluir':
            break;
        default:
            # code...
            break;
    }
?>