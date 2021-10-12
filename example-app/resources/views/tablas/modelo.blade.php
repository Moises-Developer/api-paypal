<div class="container">
    <h1 class="text-center">Tabla de modelos</h1>
</div>
<table class="table caption-top">
    <caption>Lista de modelos</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre: </th>
            <th scope="col">Marca: </th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($models as $model)
        <tr>
            <th scope="row">{{ $model->id }}</th>
            <td>{{ $model->name }}</td>
            <td>{{ $model->brand_ID }}</td>
            <td><a href="model/{{ $model->id }}/edit">EDITAR MODELO</a></td>
            <td><a href="model/{{ $model->id }}">ELIMINAR MODELO</a></td>
        </tr>
        @endforeach
    </tbody>
</table>