<?php
$BASE_URL = './../';
include_once __DIR__ . '/../header.php'
?>

<div class="content">
  <div class="row">
    <div class="col-12 mb-4">

      <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-inverse">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a href="products/">Produtos</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Registrar
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!--  -->
  <div class="row">
    <div class="col-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Editar</h2>
        </div>
        <div class="card-body">
          <form>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="code">Código</label>
                <input type="text" class="form-control" id="code" placeholder="" value="" required="">
                <div class="valid-feedback"></div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="" value="" required="">
                <div class="valid-feedback"></div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="price">Preço</label>
                <input type="number" class="form-control" id="price" placeholder="" value="" required="">
                <div class="valid-feedback"></div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">
              Guardar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include_once __DIR__ . '/../footer.php'
?>