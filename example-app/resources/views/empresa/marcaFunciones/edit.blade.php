<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal4">
  Editar marca
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edita una marca </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
      <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-7 position-relative">
    <label for="validationTooltip01" class="form-label">Nombre de la marca </label>
    <input type="text" class="form-control" name="name" value="{{ brand->name }}" id="validationTooltip01"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
    <div>
      <br>
    </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Editar Marca </button>
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