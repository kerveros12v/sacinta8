@extends('plantillabase')
@section('menuprimario')


@endsection()
@section('contenido')
<form>
    <div class="form-group">
        <label for="Codigo">Codigo</label>
        <input type="text" class="form-control" id="sexocodigo" aria-describedby="sexo codigo">
        <small id="sexo codigo" class="form-text text-muted">Codigo del sexo</small>
    </div>
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" class="form-control" id="sexo">
    </div>

    <button type="submit" class="btn btn-primary">Agregar</button>
</form>

<table class="table table-striped table-hover table-active" title="Perfiles Registradas Actualmente:">
    <tr class="ui-widget-header">
        <th scope="col">Codigo</th>
        <th scope="col">Sexo</th>
        <th scope="col">Accion</th>
    </tr>

    <tbody id=contenedorsexos>

        @foreach($sex as $item)
        <tr scope="row">
            <td>
                {{$item->sexocodigo}}
            </td>
            <td>
                {{$item->sexo}}
            </td>
            <td>
                <a href="" class="btn btn-warning">Editar</a>
                <a href="" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach()
    </tbody>
    @endsection