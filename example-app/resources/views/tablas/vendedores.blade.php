<div class="container">
    <h1 class="text-center">Tabla de vendedores</h1>
</div>
<table class="table caption-top">
    <caption>Lista de vendedores</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre: </th>
            <th scope="col">Apellido: </th>
            <th scope="col">Telefono: </th>
            <th scope="col">Direccion: </th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sellers as $seller)
        <tr>
            <th scope="row">{{ $seller->id }}</th>
            <td>{{ $seller->name }}</td>
            <td>{{ $seller->lastname }}</td>
            <td>{{ $seller->telephone }}</td>
            <td>{{ $seller->address }}</td>
            <td><a href="seller/{{ $seller->id }}/edit">EDITAR VENDEDOR</a></td>
            <td><a href="seller/{{ $seller->id }}">ELIMINAR VENDEDOR</a></td>
        </tr>
        @endforeach
    </tbody>
</table>