<div class="modal fade" id="modalInsert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cadastrar Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="users_controller/cadastrar" method="POST" class="d-flex flex-column" autocomplete="off">

          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control mb-3" name="name" required>

          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="email" required>

          <button type="submit" class="btn btn-success mt-4">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary modal-closeButton" data-bs-dismiss="modal">Não</a>
        <a href="" type="button" class="btn btn-danger modal-sendButton">Excluir</a>
      </div>
    </div>
  </div>
</div>