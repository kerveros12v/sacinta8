@extends('plantillabase')
@section('menuprimario')


@endsection()
@section('contenido')
<form class="">
    <table>

        <tr>
            <td>
                <div class="form-group">
                    <label for="Codigo">Codigo</label>
                    <input type="text" class="form-control" id="codigoMateria" aria-describedby="Codigo Materia">
                    <small id="codigoMateria" class="form-text text-muted">Codigo de Materia</small>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="materia">Materia</label>
                    <input type="text" class="form-control" id="materia">
                    <small id="codigoMateria" class="form-text text-muted">Detalle de la Materia</small>
                </div>
            </td>
            <td>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </td>
        </tr>
    </table>
</form>

<table class="table table-striped table-hover table-active" title="Perfiles Registradas Actualmente:">
    <tr>
        <th>
            Codigo
        </th>
        <th>
            Materia
        </th>
        <th>
            Accion
        </th>
    </tr>
    @foreach($asignaturas as $item)
    <tr>
        <td>
            {{$item->codigoMateria}}
        </td>
        <td>
            {{$item->materia}}
        </td>
        <td class="unilinea">
            <a href="" class="btn btn-warning">Editar</a>
            <a href="" class="btn btn-danger">Eliminar</a>
        </td>
    </tr>
    @endforeach()
</table>

@endsection