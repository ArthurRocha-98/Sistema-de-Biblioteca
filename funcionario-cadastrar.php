<h1>Cadastrar Funcionários</h1>
<form action="?page=funcionario-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Funcionário</label>
        <input type="text" name="nome_funcionario" class="form-control">

        <label for="email">E-mail</label>
        <input type="text" name="email" class="form-control">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone_funcionario" class="form-control">

        <label for="matricula">Matrícula</label>
        <input type="number" name="matricula_funcionario" class="form-control">

        <label for="cargo">Cargo</label>
        <input type="text" name="cargo_funcionario" class="form-control">
    </div>
    <di class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>