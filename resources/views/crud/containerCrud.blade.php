@extends('layout.master')

@section('site')
Gravar dados containers
@endsection

@section('content')
<div class='container mt-4 col-md-3'>
    <form class='row g-3 needs-validation' method='POST' action='{{ route('store') }}'>
        @csrf
        <div class='col-md-12'>
            <label for='id01' class='form-label'>Cliente:</label>
            <input type='text' class='form-control' id='id01' name='client' placeholder='EX: Santos Brasil' required>
            @error ('client') <span class='text-danger'>{{ $message }}</span> @enderror
        </div>
        <div class='col-md-12'>
            <label for='id02' class='form-label'>Numero do Container:</label>
            <input type='text' class='form-control' id='id02' name='number' placeholder='EX: ASCD1234567' required>
            @error ('number') <span class='text-danger'>{{ $message }}</span> @enderror
        </div>
        <div class='col-md-12'>
            <label for='id03' class='form-label'>Tipo</label>
            <select class='form-select' id='id03' name='type' required>
                <option selected disabled>Defina o Tipo do Container</option>
                <option value='1' name='type'>20</option>
                <option value='2' name='type'>40</option>
            </select>
            @error ('type') <span class='text-danger'>{{ $message }}</span> @enderror
        </div>
        <div class='col-md-12'>
            <label for='id04' class='form-label'>Status:</label>
            <select class='form-select' name='status' id='id04' required>
                <option selected disabled>Defina o status do container</option>
                <option value='1'>Vazio</option>
                <option value='2'>Cheio</option>
            </select>
            @error ('status') <span class='text-danger'>{{ $message }}</span> @enderror
        </div>
        <div class='col-md-12'>
            <label for='id05' class='form-label'>Categoria</label>
            <select class='form-select' name='category' id='id05' required>
                <option selected disabled>Defina a Categoria do container</option>
                <option value='1'>Importação</option>
                <option value='2'>Exportação</option>
            </select>
            @error ('category') <span class='text-danger'>{{ $message }}</span> @enderror
        </div>
        <div class='col-12'>
            <button class='btn btn-primary' type='submit'>Gravar dados do container</button>
        </div>
    </form>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#id02').mask('AAAA0000000', {
            'translation': {
                A: {pattern: /[A-Z*]/}
            }
        });
    })
</script>
@endsection