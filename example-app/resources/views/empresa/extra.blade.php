<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal5">
  Añadir extra
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añade los extra </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Nombre del extra </label>
    <input type="text" class="form-control" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Descripcion </label>
    <input type="text" class="form-control" id="validationTooltip02" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip03" class="form-label">Version </label>
    <select class="form-select" id="validationTooltip03" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">Precio </label>
    <input type="text" class="form-control" id="validationTooltip04" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Añadir Extra </button>
  </div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cerrar </button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>