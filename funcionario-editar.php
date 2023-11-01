<h1>Editar Funcionário</h1>
<?php
    $sql = "SELECT * FROM funcionario WHERE id_funcionario =".$_REQUEST['id_funcionario'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=atendentes-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario; ?>">
    <div class="mb-3">
        <label>nome_funcionario</label>
        <input type="text" value="<?php echo $row->nome_funcionario; ?>" name="nome_funcionario" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>