<?php
$BASE_URL = './../';
include_once __DIR__ . '/../header.php'
?>

<div class="content">

  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 mb-4">

        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb breadcrumb-inverse">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
              <a href="users/">Usuários</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Eliminação
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- INICIO -->
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Usuario Eliminado com sucessso.
    </div>
    <div class="text-center">
      <a href="users/index.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Voltar</button></a>
    </div>
    <!-- FIM -->
  </div>


  <?php
  include_once __DIR__ . '/../footer.php'
  ?>