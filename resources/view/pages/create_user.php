<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Novo usuário</h2>
            <form method="post" action="/users-new">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="document">CPF:</label>
                    <input type="text" class="form-control" id="document" name="document">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Confirmar</button>
                <a href="/users" class="btn btn-secondary mt-2">Cancelar</a>
            </form>
        </div>
    </div>
</div>