<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Adicionar contato</h2>
            <form method="post" action="/contacts-new">
                <div class="form-group">
                    <label for="person">Pessoa: </label>
                    <select name="users" id="users" class="form-control">
                        <!-- add entries -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="type">Tipo:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="Email">Email</option>
                        <option value="Telefone Fixo">Telefone Fixo</option>
                        <option value="Telefone Celular">Telefone Celular</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Confirmar</button>
                <a href="/users" class="btn btn-secondary mt-2">Cancelar</a>
            </form>
        </div>
    </div>
    <script>
        var users = JSON.parse(`{{users}}`);
        var typeSelect = document.getElementById('users');

        users.forEach(function(user) {
            var option = document.createElement('option');
            option.value = user.id;
            option.text = user.name;
            typeSelect.appendChild(option);
        });
    </script>
</div>