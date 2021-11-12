<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Editar version
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edita una nueva version</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3 needs-validation" action="/version/{{ $version->id }}" method="POST" novalidate>
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="edit">
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Nombre de la version </label>
    <input type="text" name="name" value="{{ $version->name }}" class="form-control" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Potencia </label>
    <input type="text" name="power" value="{{ $version->power }}" class="form-control" id="validationTooltip02" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Precio Base  </label>
    <input type="text" name="base_price" value="{{ $version->base_price }}" class="form-control" id="validationTooltip03" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">Tipo de combustible </label>
    <input type="text" name="kind_of_gasoline" value="{{ $version->kind_of_gasoline }}" class="form-control" id="validationTooltip04" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip05" class="form-label">Modelo </label>
    <select class="form-select" name="model_id" id="validationTooltip05" required>
      <option selected disabled value="{{ $version->model->id }}">{{ $version->model->name }}</option>
      @foreach($models as $model)
      <option value="{{ $model->id }}"> {{ $model->name }} </option>
      @endforeach
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Editar Version </button>
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