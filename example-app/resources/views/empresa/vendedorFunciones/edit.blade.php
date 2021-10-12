<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Editar vendedor
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edita un vendedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-3 needs-validation" action="seller/{{ $seller->id }}" method="POST" novalidate>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put" >
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Nombre del vendedor: </label>
    <input type="text" class="form-control" value="{{ $seller->name }}" name="name" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Apellidos del vendedor: </label>
    <input type="text" class="form-control" value="{{ $seller->lastname }}" name="lastname" id="validationTooltip02"  required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Telefono del vendedor: </label>
    <input type="text" class="form-control" value="{{ $seller->telephone }}" name="telephone" id="validationTooltip03" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">Direccion del vendedor: </label>
    <input type="text" class="form-control" value="{{ $seller->address }}"name="address" id="validationTooltip04" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Editar vendedor </button>
  </div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>