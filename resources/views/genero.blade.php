@extends('plantillabase')
@section('menuprimario')

@endsection()
@section('contenido')
<form>
    <table>
        <tr>
            <td>
                <div class="form-group">
                    <label for="Codigo">Codigo</label>
                    <input type="text" class="form-control" name="generoscodigo" id="generoscodigo" aria-describedby="Codigo Genero">
                    <small id="codgenerosmall" name="codgenerosmall" class="form-text text-muted">Codigo del Genero</small>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input type="text" class="form-control" id="genero" name="genero">
                    <small id="generosmall" name="generosmall" class="form-text text-muted">Detalle del Genero</small>

                </div>
            </td>
            <td>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </td>
        </tr>
    </table>




</form>

<table class="table table-striped table-hover table-active" title="Perfiles Registradas Actualmente:">
    <tr class="ui-widget-header">
        <th scope="col">Codigo</th>
        <th scope="col">Genero</th>
        <th scope="col">Accion</th>
    </tr>

    <tbody id=contenedorsexos>

        @foreach($genero as $item)
        <tr scope="row">
            <td>
                {{$item->generoscodigo}}
            </td>
            <td>
                {{$item->genero}}
            </td>
            <td>
                <a href="" class="btn btn-warning">Editar</a>
                <a href="" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach()
    </tbody>
    @endsection