<div id="createuser" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="gridModalLabel">Adicionar Usuario</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-12">

              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Errores!</strong> Por favor debe llenar los siguientes campos.
                <ul class="verrors"></ul>
              </div>

              <form id="frmcreate">
                <div class="form-group">
                  <label for="firstname">Firstname</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Firstname" required>
                </div>
                <div class="form-group">
                  <label for="lastname">Lastname</label>
                  <input type="text" class="form-control" id="lastname" placeholder="Lastname" required>
                </div>
                <div class="form-group">
                  <label for="phonenumber">Phonenumber</label>
                  <input type="number" class="form-control" id="phonenumber" placeholder="Phonenumber" required>
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" placeholder="City" required>
                </div>
              </form>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success btn-create">Adicionar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
