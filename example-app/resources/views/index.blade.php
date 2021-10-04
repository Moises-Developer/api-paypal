<!DOCTYPE html>
<html lang="en">
<head>
    <title>Concecionaria de automoviles</title>
    @include('componentes/header')
</head>
<body>
    @include('componentes/nav')
    
    <section class="container">
        <div class="container">
            <h1 class="text-center">Tabla de vehiculos</h1>
        </div>
        <div>
            <table class="table caption-top">
                <caption>List of users</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Version</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ url('/API/PayPal/Pay') }}"> PayPal </a>

        </div>
    </section>
    

    @include('componentes/footer')
</body>
</html>