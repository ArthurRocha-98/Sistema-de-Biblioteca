<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $sql = "INSERT INTO livro (
                        categoria_id_categoria,
                        titulo_livro,
                        autor_livro,
                        editora_livro,
                        edicao_livro,
                        localidade_livro,
                        ano_livro
                    ) VALUES (
                        ".$_POST['categoria_id_livro'].",
                        ".$_POST['titulo_livro'].",
                        ".$_POST['autor_livro'].",
                        ".$_POST['editora_livro'].",
                        ".$_POST['edicao_livro'].",
                        ".$_POST['localidade_livro'].",
                        ".$_POST['ano_livro'].",
                    )";
                $res = $conn->query($sql);
                if($res==true){
                    print "<script>alert('Cadastrado com sucesso!');</script>";
                    print "<script>location.href='?page=livros-listar';</script>";
                }else{
                    print "<script>alert('Não foi possível!');</script>";
                    print "<script>location.href='?page=livros-listar';</script>";
                }
            break;

        case 'editar':
            $sql = "UPDATE livro (nome_livro) SET ('".$_POST['nome_livro']."')";
            $res = $conn->query($sql);
            if ($res==true) {
                print "<script>alert('Livro editado com sucesso!');</script>";
                print "<script>location.href='?page=livros-listar.php';</script>";
            }else{
                print "<script>alert('Não foi possível editar livro!');</script>";
                print "<script>location.href='?page-livros-listar.php';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM livro WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql) or die($conn->error);
            if ($res==true) {
                print "<script>alert('Livro excluído com Sucesso!');</script>";
                print "<script>location.href='livros-listar.php';</script>";
            }
            break;
    }   