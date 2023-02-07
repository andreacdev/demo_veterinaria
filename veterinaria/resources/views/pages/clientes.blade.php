@extends('app')

@section('content')

    <div class="container w-50 border p-4">

        <h1>Registar cliente</h1>

        <form action="{{ route('clientes') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label for="txtdia" class="col-sm-2 col-form-label">Documento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtdia" name="documentNumber">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txttime" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txttime" name="fullName">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txtmascota" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                    <input type="phone" class="form-control" id="txtmascota" name="phone">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txtmascota" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="mail" class="form-control" id="txtmascota" name="email">
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Registrar</button>
            </div>
        </form>
    </div>

@endsection