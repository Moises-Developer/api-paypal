<div class="container">
    <h1 class="text-center">Tabla de marcas</h1>
</div>
<table class="table caption-top">
    <caption>Lista de marcas</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre: </th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
        <tr>
            <th scope="row">{{ $brand->id }}</th>
            <td>{{ $brand->name }}</td>
            <td><a href="brand/{{ $brand->id }}/edit">EDITAR MARCA</a></td>
            <td><a href="brand/{{ $brand->id }}">ELIMINAR MARCA</a></td>
        </tr>
        @endforeach
    </tbody>
</table>