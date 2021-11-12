<!DOCTYPE html>
<html lang="en">
<head>
    <title>Concecionaria de automoviles</title>
    @include('componentes/header')
</head>
<body>
    @include('componentes/nav')
    
    <section class="container">
        @if($statusCreation = Session::get('stateCreation'))
        <div class="alert alert-success">
            <h2>{{ $statusCreation }}</h2>
        </div>
        @endif
        @isset($sellers)
        @if($table == 'sellers')
        @include('tablas/vendedores')
        @endif
        @endisset
        @isset($brands)
        @if($table == 'brands')
        @include('tablas/marcas')
        @endif
        @endisset
        @isset($models)
        @if($table == 'models')
        @include('tablas/modelo')
        @endif
        @endisset
        @isset($versions)
        @if($table == 'version')
        @include('tablas/version')
        @endif
        @endisset
        @isset($cars)
        @if($table == 'cars')
        @include('tablas/carros')
        @endif
        @endisset
        @isset($sells)
        @if($table == 'sells')
        @endif
        @endisset
        @isset($sells)
        @if($table == 'sells')
        @include('tablas/ventas')
        @endif
        @endisset
        @isset($costumers)
        @if($table == 'costumers')
        <div class="container">
            <h1 class="text-center">Tabla de clientes</h1>
        </div>
        <div>
            <table class="table caption-top">
                <caption>Lista de clientes</caption>
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
                    @foreach($costumers as $costumer)
                    <tr>
                        <th scope="row">{{ $costumer->id }}</th>
                        <td>{{ $costumer->name }}</td>
                        <td>{{ $costumer->lastname }}</td>
                        <td>{{ $costumer->telephone }}</td>
                        <td>{{ $costumer->address }}</td>
                        <td><a href="costumer/{{ $costumer->id }}/edit">EDITAR CLIENTE</a></td>
                        <td><a href="costumer/{{ $costumer->id }}">ELIMINAR CLIENTE</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
            @endisset
            <a href="{{ url('/API/PayPal/Pay') }}"> PayPal </a>

        </div>
    </section>
    

    @include('componentes/footer')
</body>
</html>