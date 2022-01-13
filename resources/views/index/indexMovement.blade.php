@extends('layout.master')

@section('site')
Listagem Movimentações
@endsection
@section('content')
    

<Div class='container mt-4  '>
    <a name='btn' id='btn' class='btn btn-primary mb-4' href='{{ route('movement.create') }}' role='button'>Adicionar
        Movimentações</a>
    <table id='table_id' class='display'>
        <thead>
            <tr>
                <th>Número do Container</th>
                <th>Tipo de Movimentação</th>
                <th>Inicio</th>
                <th>Termino</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movements as $movement)
            <tr>
                <td>{{ $movement->container->number }}</td>
                <td>{{ $movement->type }}</td>
                <td>{{ $movement->start->format('d-m-Y: H:i:s') }}</td>
                <td>{{ $movement->end->format('d-m-Y: H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</Div>
@endsection