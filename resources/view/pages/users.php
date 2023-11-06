<div class="container mt-5">
    <h1>Usuários do sistema</h1>
    <div class="d-flex justify-content-between mb-3">
        <a href="users-new" class="btn btn-primary">Novo usuário</a>
        <div class="input-group">
            <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar usuário">
            <button class="btn btn-primary" id="searchButton">Buscar</button>
        </div>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    const userData = JSON.parse(`{{users}}`);

    function populateUserData(searchQuery = "") {
        var userTableBody = document.getElementById("userTableBody");
        userTableBody.innerHTML = "";

        filteredUserData = userData.filter(function(user) {
            return user.name.toLowerCase().includes(searchQuery.toLowerCase()) ||
                user.document.toLowerCase().includes(searchQuery.toLowerCase());
        });

        filteredUserData.forEach(function(user) {
            var row = document.createElement("tr");
            row.innerHTML = `
                <td>${user.id}</td>
                <td>${user.name}</td>
                <td>${user.document}</td>
                <td>
                    <a href="users-edit-${user.id}" class="btn btn-primary btn-sm">Editar/Visualizar</a>
                    <a href="users-delete-${user.id}" class="btn btn-danger btn-sm">Deletar</a>
                </td>
            `;
            userTableBody.appendChild(row);
        });
    }

    populateUserData();

    document.getElementById("searchButton").addEventListener("click", function() {
        var searchQuery = document.getElementById("searchInput").value.trim();
        populateUserData(searchQuery);
    });
</script>