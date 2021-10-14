<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal3">
  Añadir modelo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añade los modelos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-3 needs-validation" action="/model" method="POST" novalidate>
      {{ csrf_field() }}
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Nombre del modelo </label>
    <input type="text" class="form-control" name="name" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Marca </label>
    <select class="form-select" name="brand_ID" id="validationTooltip02" required>
      <option selected disabled value="">Elegir una opcion... </option>
      @foreach($brands as $brand)
      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
      @endforeach

    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Agregar Modelo </button>
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