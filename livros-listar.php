<h1>Listar Livros</h1>
<?php
    $sql = "SELECT * FROM livro";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome dos Livros</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row =$res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_livro."</td>";
            print "<td>".$row->nome_livro."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=livros-editar&id_livro=".$row->id_livro."';\"class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir livro?')){location.href='?page=livros-salvar&acao=excluir&id_livro=".$row->id_livro."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print 'Nenhum resultado encontrado!';
    }
