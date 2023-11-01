<h1>Listar Usuarios</h1>
<?php
    $sql = "SELECT * FROM usuario";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> cadastro(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome dos Usuários</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_usuario."</td>";
            print "<td>".$row->nome_usuario."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=usuarios-editar&id_usuario=".$row->id_usuario."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir usuário?')){locaation.href='?page=usuarios-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print 'Nenhum usuário encontrado.';
    }