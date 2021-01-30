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
                    <input type="text" class="form-control" name="estadoscivilcodigo" id="estadoscivilcodigo" aria-describedby="Codigo Estado Civil">
                    <small id="estadoscivilcodigosmall" name="estadoscivilcodigosmall" class="form-text text-muted">Codigo Estado Civil</small>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="estadoCivil">Estado Civil</label>
                    <input type="text" class="form-control" id="genero" name="estadoCivil">
                    <small id="estadoCivilsmall" name="estadoCivilsmall" class="form-text text-muted">Detalle del Estado Civil</small>

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
        <th scope="col">Etado Civil</th>
        <th scope="col">Accion</th>
    </tr>

    <tbody id=contenedorsexos>

        @foreach($estadocivil as $item)
        <tr scope="row">
            <td>
                {{$item->estadoscivilcodigo}}
            </td>
            <td>
                {{$item->estadoCivil}}
            </td>
            <td>
                <a href="" class="btn btn-warning">Editar</a>
                <a href="" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach()
    </tbody>
    @endsection