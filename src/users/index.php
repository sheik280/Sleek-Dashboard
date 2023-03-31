<?php
include_once __DIR__ . '/../database.php';
//
$BASE_URL = './../';
include_once __DIR__ . '/../header.php'
//
?>

<div class="content">
  <div class="row">
    <div class="col-12 mb-4">

      <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-inverse">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Usuários
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <!--  -->
  <div class="row">
    <div class="col-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
          <h2>Lista de Usuários</h2>

          <a href="users/add.php" class="btn btn-outline-primary btn-sm text-uppercase">
            <i class="mdi mdi-account-plus mr-1"></i> Registrar
          </a>
        </div>

        <div class="card-body">
          <div class="basic-data-table">
            <div id="basic-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <table id="basic-data-table" class="table nowrap dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="basic-data-table_info">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="basic-data-table" rowspan="1" colspan="1" aria-label="" style="width: 67px;" aria-sort="ascending">#</th>
                    <th class="sorting" tabindex="0" aria-controls="basic-data-table" rowspan="1" colspan="1" aria-label="" style="width: 66px;">Nome</th>
                    <th class="sorting" tabindex="0" aria-controls="basic-data-table" rowspan="1" colspan="1" aria-label="" style="width: 159px;">Contacto</th>
                    <th class="sorting" tabindex="0" aria-controls="basic-data-table" rowspan="1" colspan="1" aria-label="" style="width: 72px;">E-mail</th>
                    <th class="sorting" tabindex="0" aria-controls="basic-data-table" rowspan="1" colspan="1" aria-label="" style="width: 25px;">Username</th>
                    <th class="sorting" tabindex="0" aria-controls="basic-data-table" rowspan="1" colspan="1" aria-label="" style="width: 62px;">Acção</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  // faz a seleção do dados na Tabela	
                  $data = mysqli_query($connection, "SELECT * FROM users ORDER BY id ASC");
                  // lista os dados
                  while ($value = mysqli_fetch_array($data)) {

                    // PDO
                    // $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
                    // $stmt->execute();
                    // $values = $stmt->fetchAll();

                    // foreach($values as $value) {
                  ?>
                    <tr role="row" class="odd">
                      <td tabindex="0" class="sorting_1"><?php echo $value['id'] ?></td>
                      <td><?php echo $value['name'] ?></td>
                      <td><?php echo $value['contact'] ?></td>
                      <td><?php echo $value['email'] ?></td>
                      <td><?php echo $value['username'] ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="First group">
                          <a href="users/edit.php?id=<?php echo $value['id'] ?>">
                            <button type="button" class="btn btn-outline-info">
                              <i class="mdi mdi-account-edit"></i>
                            </button>
                          </a>
                          <a href="users/deleteQuery.php?id=<?php echo $value['id'] ?>">
                            <button type="button" class="btn btn-outline-danger">
                              <i class="mdi mdi-account-minus"></i>
                            </button>
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>

              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once __DIR__ . '/../footer.php'
?>