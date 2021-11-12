<div class="container">
    <h1 class="text-center">Tabla de versiones</h1>
</div>
<table class="table caption-top">
    <caption>Lista de versiones</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre: </th>
            <th scope="col">Potencia: </th>
            <th scope="col">Precio Base: </th>
            <th scope="col">Tipo de combustible: </th>
            <th scope="col">Modelo: </th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($versions as $version)
        <tr>
            <th scope="row">{{ $version->id }}</th>
            <td>{{ $version->name }}</td>
            <td>{{ $version->power }}</td>
            <td>{{ $version->base_price }}</td>
            <td>{{ $version->kind_of_gasoline }}</td>
            <td>{{ $version->model->name }}</td>
            <td><a href="version/{{ $version->id }}/edit">EDITAR VERSION</a></td>
            <td><a href="version/{{ $version->id }}">ELIMINAR VERSION</a></td>
        </tr>
        @endforeach
    </tbody>
</table>