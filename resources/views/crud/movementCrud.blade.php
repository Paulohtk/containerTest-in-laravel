@extends('layout.master')

@section('site')
Adicionar Movimentação de Container
@endsection

@section('content')
<div class='container mt-4 col-md-3'>
    <form class='row g-3 needs-validation' method='POST' action='{{ route('movement.store') }}'>
        @csrf
        <div class='col-md-12'>
            <label for='id04' class='form-label'>Container:</label>
            <select class='form-select' name="container_id" id='id04' required>
                <option selected disabled>Selecione o Container</option>
                @foreach ($containers as $container)
                <option value='{{ $container->id }}'>{{ $container->number }}</option>
                @endforeach
            </select>
        </div>
        <div class='col-md-12'>
            <label for='id04' class='form-label'>Tipo de Movimentação:</label>
            <select class='form-select' name="type" id='id04' required>
                <option selected disabled>Selecione o Tipo de Movimentação</option>
                <option value='1'>embarque</option>
                <option value='2'>descarga</option>
                <option value='3'>gate in</option>
                <option value='4'>gate out</option>
                <option value='5'>reposicionamento</option>
                <option value='6'>pesagem</option>
                <option value='7'>scanner</option>
            </select>
        </div>
        <div class='col-md-12'>
            <label for='id01' class='form-label'>Inicio:</label>
            <input type='datetime-local' name="start" class='form-control' id='id01' required>
        </div>
        <div class='col-md-12'>
            <label for='id02' class='form-label'>Fim</label>
            <input type='datetime-local' name="end" class='form-control' id='id02' required>
        </div>
        <div class='col-12'>
            <button class='btn btn-primary' type='submit'>Adicionar Movimentação</button>
        </div>
    </form>
</div>
@endsection