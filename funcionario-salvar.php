<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO funcionario (nome_funcionario) VALUES ('".$_POST['nome_funcionario']."')";
            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Funcionario cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=funcionario-listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar o funcionário!');</script>";
                print "<script>location.href='?page=funcionario-listar';</script>";
            }
            break;
        
        case 'editar':
            $sql = "UPDATE funcionario (nome_funcionario) SET ('".$_POST['nome_funcionario']."')";
            $res = $conn->query($sql);
            if ($res==true) {
                print "<script>alert('Funcionário editado com sucesso!');</script>";
                print "<script>location.href='funcionario-listar.php';</script>";
            }else{
                print "<script>alert('Não foi possível editar funcionário.');</script>";
                print "<script>location.href='funcioario-listar.php';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM funcionario WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);
            if ($res==true) {
                print "<script>alert('Funcionário excluído com Sucesso!');</script>";
                print "<script>location.href='funcionario-listar.php';</script>";
            }
            break;
    }