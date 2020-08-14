@extends('templates.template')
@section('content')

    <h1 class="text-center">Crud</h1><hr>
    <div class="col-8 m-auto">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">tidulo</th>
                <th scope="col">autor</th>
                <th scope="col">preço</th>
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
    </div>

@endsection
