<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD (php - msyql - ajax)</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>

  <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="page-header">
          <h1> CRUD <small>(php - msyql - ajax)</small></h1>
        </div>
        <?php
          include 'create.inc';
          include 'read.inc';
          include 'update.inc';
        ?>
        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#createuser"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Usuario</button>
        <br><br>

        <?php if (isset($_SESSION['action'])): ?>
          <div class="alert alert-success alert-dismissible alert-action" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Noticia!</strong> <?php echo $_SESSION['action']; ?>
          </div>
          <br><br>
        <?php endif; unset($_SESSION['action']); ?>

        <table class="table table-striped table-bordered table-hover">
            <thead class="text-uppercase">
              <th>Id</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Actions</th>
            </thead>
            <tbody id="lstusers">
              <tr>
                <td colspan="4" style='text-align: center; background-color: white'>
                  <img src="public/imgs/progress.gif" width="100px" />
                </td>
              </tr>
            </tbody>
        </table>

      </div>
      <div class="col-md-3"></div>
  </div>

  <script src="public/js/jquery-1.11.3.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/app.js"></script>
</body>
</html>
