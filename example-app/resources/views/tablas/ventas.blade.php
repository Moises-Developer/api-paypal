<div class="container">
    <h1 class="text-center">Tabla de ventas</h1>
</div>
<table class="table caption-top">
    <caption>Lista de ventas</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente: </th>
            <th scope="col">Vendedor: </th>
            <th scope="col">Vehiculo: </th>
            <th scope="col">Fecha de venta: </th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sells as $sell)
        <tr>
            <th scope="row">{{ $sell->id }}</th>
            <td>{{ $sell->costumer->name }}</td>
            <td>{{ $sell->seller->name }}</td>
            <td>{{ $sell->car->version->name }}</td>
            <td>{{ $sell->sell_date }}</td>
            <td><a href="sell/{{ $sell->id }}/edit">EDITAR VENTA</a></td>
            <td><a href="sell/{{ $sell->id }}">ELIMINAR VENTA</a></td>
        </tr>
        @endforeach
    </tbody>
</table>