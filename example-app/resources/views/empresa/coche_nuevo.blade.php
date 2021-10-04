<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Añadir vehiculo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añade un nuevo vehiculo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Matricula</label>
    <input type="text" class="form-control" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Numero de la version</label>
    <select class="form-select" id="validationTooltip02" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Fecha de compra</label>
    <input type="text" class="form-control" id="validationTooltip03" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">Numero de cliente</label>
    <select class="form-select" id="validationTooltip04">
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip05" class="form-label">Numero de vendedor</label>
    <select class="form-select" id="validationTooltip05">
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  
  <div class="col-5">
    <button class="btn btn-primary" type="submit"> Agregar Nuevo Vehiculo </button>
  </div>
  <div class="col-5">
    <button class="btn btn-primary" type="submit"> Vender Vehiculo </button>
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