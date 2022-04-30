@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Editar Eleccion
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('eleccion.update', $eleccion->id) }}"
        enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="periodo">periodo:</label>
                <input type="text" id="periodo"
                 value="{{$eleccion->periodo}}"
                 class="form-control" name="periodo" />
            </div>
            
            <div class="form-group">
                <label for="fecha">fecha:</label>
                <input type="date" id="fecha"
                 value="{{$eleccion->fecha}}"
                 class="form-control" name="fecha" />
            </div>
            <div class="form-group">
                <label for="fechaapertura">fecha de apertura:</label>
                <input type="date" id="fechaapertura"
                 value="{{$eleccion->fechaapertura}}"
                 class="form-control" name="fechaapertura" />
            </div>
            <div class="form-group">
                <label for="horaapertura">hora de apertura:</label>
                <input type="time" id="horaapertura"
                 value="{{$eleccion->horaapertura}}"
                 class="form-control" name="horaapertura" />
            </div>
            <div class="form-group">
                <label for="fechacierre">fecha de cierre:</label>
                <input type="date" id="fechacierre"
                 value="{{$eleccion->fechacierre}}"
                 class="form-control" name="fechaacierre" />
            </div>
            <div class="form-group">
                <label for="horacierre">hora de cierre:</label>
                <input type="time" id="horacierre"
                 value="{{$eleccion->horacierre}}"
                 class="form-control" name="horacierre" />
            </div>
            <div class="form-group">
                <label for="observaciones">observaciones:</label>
                <input type="text" id="observaciones"
                 value="{{$eleccion->observaciones}}"
                 class="form-control" name="observaciones" />
            </div>
          

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection