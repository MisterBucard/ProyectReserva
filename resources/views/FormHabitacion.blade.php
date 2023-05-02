@extends('viewMother')

@section('nombredepestana','Habitaciones')

@section('cuerpodepagina')
@if(isset($habitacion))
<h1 class="tituloM">Modificar Habitacion</h1>
@else
<h1 class="tituloC">Crear una nueva Habitacion</h1>
@endif
@if($errors->any())
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif
</ul>
<form method="post" action=" {{ isset($habitacion) ? route("habitacion.update", ["id"=> $habitacion->id]): route("habitacion.store") }}">
    @csrf
    @if(isset($habitacion))
    @method('put')
    @endif
    <br>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="num_Habit" placeholder="ingrese numero de habitacion" name="numHabitacion" value="{{ isset($habitacion) ? $habitacion->Num_Habitacion: old("numHabitacion") }}" require>
        <label for="num_Habit">Numero de habitacion</label>
    </div>
    <div class="form-floating">
    <input type="number" class="form-control" id="precio_numb" placeholder="ingrese el precio de la habitacion" name="precio" value="{{ isset($habitacion) ? $habitacion->Precio: old("precio") }}" require>
        <label for="precio_numb">Precio</label>
    </div>
    <br>
    <label for="tipo_select">Tipo de habitacion</label>
    <select id="tipo_select" class="form-select form-select-sm" aria-label=".form-select-sm example" name="Tipo " value="{{ isset($habitacion) ? $habitacion->Tipo: old("Tipo")}}" require>
        <option value="Individual">Individual</option>
        <option value="Doble">Doble</option>
        <option value="Suite">Suite</option>
    </select>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Guardar</button>
        
        <a href="{{ route("habitacion.index") }}" class="btn btn-warning">Atrás</a>
    </div>
</form>
<br>
<a class="btn btn-success" href="{{ route("habitacion.index") }}" class="card-link">Volver al inicio</a>
@endsection