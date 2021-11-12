<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Eliminar vehiculo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elimina vehiculo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-3 needs-validation" action="/car/{{ $car->id }}" method="POST" novalidate>
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="delete">
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Matricula</label>
    <input type="text" class="form-control" value="{{ $car->code }}" name="code" id="validationTooltip01" disabled>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Precio</label>
    <input type="number" class="form-control" value="{{ $car->price }}" name="price" id="validationTooltip01" disabled>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Numero de la version</label>
    <select class="form-select" name="version_id" id="validationTooltip02" disabled>
      <option selected disabled value="">{{ $car->version->name }}</option>
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Eliminar Vehiculo </button>
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