@extends('layout.master')
@section('site')
Listagem Containers
@endsection
@section( 'content')
<Div class='container mt-4  '>
    <a name='btn' id='btn' class='btn btn-primary mb-4' href='{{ route('create') }}' role='button'>Gravar Container</a>
    <table id='table_id' class='display'>
        <thead>
            <tr>
                <th>Número</th>
                <th>Cliente</th>
                <th>Tipo</th>
                <th>Status</th>
                <th>Categoria</th>
                <th>Data de Adição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($containers as $containers)
            <tr>
                <td>{{ $containers->number }}</td>
                <td>{{ $containers->client }}</td>
                <td>{{ $containers->type }}</td>
                <td>{{ $containers->status }}</td>
                <td>{{ $containers->category }}</td>
                <td>{{ $containers->created_at->format('d-m-Y: H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</Div>
@endsection