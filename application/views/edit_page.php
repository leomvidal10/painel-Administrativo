<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Editar</title>
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
        <a href="<?php echo base_url()?>" class="mb-4 fs-4 text-decoration-none">← Voltar</a>
        <form action="../users_controller/editar/<?php echo $usuarios['id']?>" method="POST" class="d-flex flex-column form-edit" autocomplete="off">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control mb-3" name="name" value="<?php echo $usuarios['nome']?>">

          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="email" value="<?php echo $usuarios['email']?>">

          <button type="submit" class="btn btn-warning mt-4">Editar</button>
        </form>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
</body>

</html>