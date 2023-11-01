<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $sql = "INSERT INTO categoria (nome_categoria) VALUES ('".$_POST['nome_categoria']."')";
            $res = $conn ->query($sql);
            if($res==true) {
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=categoria-listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=categoria-listar';</script>";
            }
            break;

        case 'editar':
            $sql = "UPDATE categoria (nome_categoria) SET ('".$_POST['nome_categoria']."')";
            $res = $conn->query($sql);
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='categoria-listar.php';</script>";
            }else{
                print "<script>alert('Não foi possível editar.');</script>";
                print "<script>location.href='categoria-listar.php';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM categoria WHERE id=".$_REQUEST["id"];
            $res = $conn ->query($sql) or die($conn->error);
            if($res==true){
                print "<script>alert('Excluído com Sucesso!');</script>";
                print "<script>location.href='categoria-listar.php';</script>";
            }
            break;
}