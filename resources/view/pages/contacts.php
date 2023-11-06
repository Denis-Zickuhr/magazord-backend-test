<div class="container mt-5">
    <h1>Contatos</h1>
    <div class="text-right mb-3">
        <a href="contacts-new" class="btn btn-primary">Novo contato</a>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pessoa</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="contactTableBody">
            <!-- User data will be populated here -->
        </tbody>
    </table>
</div>

<script>
    const contactData = JSON.parse(`{{contacts}}`);

    function populateContactData() {
        var contactTableBody = document.getElementById("contactTableBody");
        contactTableBody.innerHTML = "";

        contactData.forEach(function(contact) {
            var row = document.createElement("tr");
            row.innerHTML = `
                <td>${contact.id}</td>
                <td>${contact.pessoaNome}</td>
                <td>${contact.descricao}</td>
                <td>${contact.tipo}</td>
                <td>
                    <a href="contacts-edit-${contact.id}" class="btn btn-primary btn-sm">Editar/Visualizar</a>
                    <a href="contacts-delete-${contact.id}" class="btn btn-danger btn-sm">Deletar</a>
                </td>
            `;
            contactTableBody.appendChild(row);
        });
    }

    populateContactData();
</script>