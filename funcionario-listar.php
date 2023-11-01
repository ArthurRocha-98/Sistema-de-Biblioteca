<h1>Listar Funcionários</h1>
<?php
    $sql = "SELECT * FROM funcionario";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome dos Funcionários</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row =$res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_funcionario."</td>";
            print "<td>".$row->nome_funcionario."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=funcionario-editar&id_funcionario=".$row->id_funcionario."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir funcionário?')){locaation.href='?page=funcionario-salvar&acao=excluir&id_funcionario=".$row->id_funcionario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print 'Nenhum resultado encontrado!';
    }