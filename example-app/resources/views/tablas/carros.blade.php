<div class="container">
    <h1 class="text-center">Tabla de vehiculos</h1>
</div>
<table class="table caption-top">
    <caption>Lista de vehiculos</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Matricula: </th>
            <th scope="col">Precio: </th>
            <th scope="col">Version: </th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <th scope="row">{{ $car->id }}</th>
            <td>{{ $car->code }}</td>
            <td>${{ $car->price }}</td>
            <td>{{ $car->version->name }}</td>
            <td><a href="car/{{ $car->id }}/edit">EDITAR CARRO</a></td>
            <td><a href="car/{{ $car->id }}">ELIMINAR CARRO</a></td>
        </tr>
        @endforeach
    </tbody>
</table>