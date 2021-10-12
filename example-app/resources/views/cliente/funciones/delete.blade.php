<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal7">
  Eliminar cliente
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elimina al cliente </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3 needs-validation" action="costumer/{{ $costumer->id }}" method="POST" novalidate>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Nombre del cliente </label>
    <input type="text" class="form-control" value="{{ $costumer->name }}"name="name" id="validationTooltip01" disabled>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Apellidos del cliente </label>
    <input type="text" class="form-control" value="{{ $costumer->lastname }}" name="lastname" id="validationTooltip02" disabled>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Telefono del cliente </label>
    <input type="text" class="form-control" value="{{ $costumer->telephone }}"name="telephone" id="validationTooltip03" disabled>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">Direccion del cliente </label>
    <input type="text" class="form-control" value="{{ $costumer->address }}"name="address" id="validationTooltip04" disabled>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Eliminar Cliente </button>
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