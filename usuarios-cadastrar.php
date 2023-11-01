<h1>Cadastrar Usuário</h1>
<form action="?page=usuarios-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Usuário</label>
        <input type="text" name="nome_usuario" class="form-control">

        <label for="matricula">Matrícula</label>
        <input type="number" name="matricula_usuario" class="form-control">

        <label for="email">E-mail</label>
        <input type="text" name="email" class="form-control">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone_usuario" class="form-control">

        <label for="cpf">CPF</label>
        <input type="number" name="cpf_usuario" class="form-control">

        <label for="endereco">Endereço</label>
        <input type="text" name="endereco_usuario" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>