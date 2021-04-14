<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Inicio</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/global.css")?>">
</head>

<body>
  <div class="home-grid">
    <?php
			$this->load->view('components/sidebar');
		?>
    <div class="menu">
      <div class="container d-flex justify-content-lg-center mt-5 flex-column">

        <?php $this->load->view('components/modal') ?>

        <div class="d-flex justify-content-between">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInsert">Cadastrar Usuário</button>
          <form class="d-flex" action="<?php echo base_url('/main_controller/pesquisar')?>" method="POST" autocomplete="off">
            <input type="search" name="search" class="form-control form-control-dark" placeholder="Busque por email ou nome">
            <button type="submit" class="btn btn-info text-white ms-3">Search</button>
          </form>
        </div>

        <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Data Cadastro</th>
            <th scope="col">Atualização</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if(isset($usuarios)) {
            foreach($usuarios as $usuario) {
            ?>
          <tr>
            <td><?php echo $usuario['id']?></td>
            <td><?php echo $usuario['nome']?></td>
            <td><?php echo $usuario['email']?></td>
            <td><?php echo substr($usuario['dataCadastro'], 0, 16)?></td>
            <td><?php echo substr($usuario['dataCadastro'], 0, 16)?></td>
            <td scope="col">
              <a href="<?php echo base_url('editar/'.$usuario['id'])?>" class="btn btn-warning btn-sm">Editar</a>
              <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete" data-bs-whatever="<?php echo $usuario['id']?>">Deletar</a>
            </td>
          </tr>
          <?php }
           }else if(isset($resultado)) {
            foreach($resultado as $usuario) { ?>
            <tr>
              <td><?php echo $usuario['id']?></td>
              <td><?php echo $usuario['nome']?></td>
              <td><?php echo $usuario['email']?></td>
              <td><?php echo substr($usuario['dataCadastro'], 0, 16)?></td>
              <td><?php echo substr($usuario['dataCadastro'], 0, 16)?></td>
              <td scope="col">
                <a href="<?php echo base_url('editar/'.$usuario['id'])?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete" data-bs-whatever="<?php echo $usuario['id']?>">Deletar</a>
              </td>
          </tr>

            <?php 
            }
           }
           ?>
        </tbody>
      </table>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
  <script>
    var deleteModal = document.getElementById('modalDelete')
    deleteModal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget
      var recipient = button.getAttribute('data-bs-whatever')
      var url = "<?php echo base_url('users_controller/deletar/')?>" + recipient

      var modalTitle = deleteModal.querySelector('.modal-title')
      var buttonSend = deleteModal.querySelector('.modal-sendButton')
      var buttonClose = deleteModal.querySelector('.modal-closeButton')

      modalTitle.textContent = 'Tem certeza que deseja excluir? #' + recipient
      buttonSend.href = url
  })
  </script>
</body>

</html>