@if($car = Session::get('car'))
@if($function = Session::get('function'))
@if($function == 'edit')
@include('empresa/carroFunciones/edit')
@endif
@endif
@endif

@if($car = Session::get('car'))
@if($function = Session::get('function'))
@if($function == 'delete')
@include('empresa/carroFunciones/delete')
@endif
@endif
@endif

@if($car == '')
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
        
      <form class="row g-3 needs-validation" action="/car" method="POST" novalidate>
      {{ csrf_field() }}
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Matricula</label>
    <input type="text" class="form-control" name="code" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Precio</label>
    <input type="number" class="form-control" name="price" id="validationTooltip01" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Numero de la version</label>
    <select class="form-select" name="version_id" id="validationTooltip02" required>
      <option selected disabled value="">Elegir una opcion...</option>
      @foreach($versions as $version)
      <option value="{{ $version->id }}"> {{ $version->name }} </option>
      @endforeach
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Agregar Nuevo Vehiculo </button>
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
@endif