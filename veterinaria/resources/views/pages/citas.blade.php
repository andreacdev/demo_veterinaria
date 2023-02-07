@extends('app')

@section('content')

    <div class="container w-50 border p-4">

        <h1>Agendar cita</h1>

        <form action="{{ route('citas') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label for="txtdia" class="col-sm-2 col-form-label">Día</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtdia">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txttime" class="col-sm-2 col-form-label">Hora</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" id="txttime">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txtmascota" class="col-sm-2 col-form-label">Mascota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtmascota">
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Agendar</button>
            </div>
        </form>
    </div>

@endsection