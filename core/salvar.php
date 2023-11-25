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
                print "<script>location.href='./index.php';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='./index.php';</script>";
            }


            break;

        case 'editar':
            $nome = $_POST["nome"];
            $descricao_despesa = $_POST["descricao_despesa"];
            $tipo_despesa = $_POST["tipo_despesa"];
            $valor_despesa = $_POST["valor_despesa"];
            $data_limite = $_POST["data_limite"];

            $sql = "UPDATE despesas SET 
                            nome='{$nome}',
                            descricao_despesa='{$descricao_despesa}',
                            tipo_despesa='{$tipo_despesa}',
                            valor_despesa='{$valor_despesa}',
                            data_limite='{$data_limite}'            
                    WHERE id = ".$_REQUEST["id"];                

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Despesa editada com sucesso!')</script>";
                print "<script>location.href='./index.php';</script>";
            } else {
                print "<script>alert('Não foi possível editada');</script>";
                print "<script>location.href='./index.php';</script>";
            }

            break;
        case 'excluir':

            $sql = "DELETE FROM despesas WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Despesa excluída com sucesso!')</script>";
                print "<script>location.href='./index.php';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='./index.php';</script>";
            }

            break;
        default:
            
            break;
    }
?>