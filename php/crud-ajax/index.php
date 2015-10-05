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
        <button type="button" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Usuario</button>
        <br><br>
        <table class="table table-striped table-bordered table-hover">
            <thead class="text-uppercase">
              <th>Id</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Actions</th>
            </thead>
            <tbody id="lstusers">

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
