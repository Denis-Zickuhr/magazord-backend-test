<div class="mt-5 pd-0">
  <div class="row">
    <div class="col-md-3 ml-3">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title"><i class="bi bi-people-fill"></i> Usuários</h5>
        </div>
        <div class="card-body" id="user-list">
          <!-- Users -->
        </div>
        <div class="text-center mb-2">
          <a href="/users" class="btn btn-primary">Ir para usuários</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title"><i class="bi bi-people-fill"></i>Contatos</h5>
        </div>
        <div class="card-body">
          <div class="text-center mb-2">
            <a href="/contacts" class="btn btn-primary">Visualizar lista de contatos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const userData = JSON.parse(`{{users}}`);

    const userListContainer = document.getElementById("user-list");
    userData.slice(0, 3).forEach((user) => {
      const userCard = document.createElement("div");
      userCard.classList.add("user-card");
      userCard.innerHTML = `
    <div class="row">
      <div class="col-10">
        <h6>${user.name}</h6>
        <p><b>CPF</b>: ${user.document}</p>
      </div>
      <div class="col-2 text-right">
        <a
          href="users/${user.id}"
          class="circle"
          data-toggle="collapse"
          data-target="#user-${user.id}-info"
        >
            <i class="bi bi-plus-circle-fill"></i>
        </a>
      </div>
    </div>
    <div class="collapse" id="user-${user.id}-info">
      <p><b>ID</b>: ${user.id}</p>
      <!-- Add more user info here -->
    </div>
  `;
      userListContainer.appendChild(userCard);
    });

    if (userData.length > 3) {
      const moreUsersText = document.createElement("p");
      moreUsersText.innerHTML = "<b>Acesse para ver a lista completa...</b>";
      userListContainer.appendChild(moreUsersText);
    }
  </script>
</div>
<?php

