<button type="button" class="btn btn-primary btnHidden" data-bs-toggle="modal" data-bs-target="#exampleModal9">
  Eliminar Venta
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Venta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-3 needs-validation" action="/sell/{{ $sell->id }}" method="POST" novalidate>
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
      <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Cliente </label>
    <select class="form-select" name="costumer_id" id="validationTooltip01" disabled>
      <option selected disabled value="">{{ $sell->costumer->name }}</option>
      @foreach($costumers as $costumer)
      <option value="{{ $costumer->id }}"> {{ $costumer->name }} </option>
      @endforeach
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Vendedor </label>
    <select class="form-select" name="seller_id" id="validationTooltip02" disabled>
      <option selected disabled value="">{{ $sell->seller->name }}</option>
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Vehiculo </label>
    <select class="form-select" name="car_id" id="validationTooltip03" disabled>
      <option selected disabled value="">{{ $sell->car->version->name }}</option>
    </select>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip04" class="form-label">Fecha de compra</label>
    <input type="date" name="sell_date" value="{{ $sell->sell_date }}" class="form-control" id="validationTooltip04" disabled>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit"> Eliminar Venta </button>
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