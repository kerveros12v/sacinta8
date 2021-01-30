@extends('plantillabase')
@section('menuprimario')


@endsection()
@section('contenido')
<form>
    <table>
        <tr>
            <td>
                <div class="form-group">
                    <label for="Cedula">Cedula</label>
                    <input type="text" class="form-control" name="estadoscivilcodigo" id="estadoscivilcodigo" aria-describedby="Codigo Estado Civil">
                    <small id="estadoscivilcodigosmall" name="estadoscivilcodigosmall" class="form-text text-muted">Numero de cedula de identidad</small>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="estadoCivil">Apellidos y Nombres</label>
                    <input type="text" class="form-control" id="genero" name="estadoCivil">
                    <small id="estadoCivilsmall" name="estadoCivilsmall" class="form-text text-muted">Apellidos y nombres del Estudiante</small>

                </div>
            </td>
            <td>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </td>
        </tr>
    </table>




</form>

<table class="table table-striped table-hover table-active" title="Perfiles Registradas Actualmente:">
    <tr class="ui-widget-header">
        <th scope="col">Cedula</th>
        <th scope="col">Apellidos y Nombres</th>
        <th scope="col">Accion</th>
    </tr>

    <tbody id=contenedorsexos>

        @foreach($estudiantes as $item)
        <tr scope="row">
            <td>
                {{$item->numeroIdentificacion}}
            </td>
            <td>
                {{$item->primerApellido}} {{$item->segundoApellido}} {{$item->primerNombre}} {{$item->segundoNombre}}
            </td>
            <td>
                <a href="" class="btn btn-warning">Editar</a>
                <a href="" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach()
    </tbody>
    @endsection