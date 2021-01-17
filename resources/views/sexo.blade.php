@extends('plantillabase')
@section('contenido')
<table class="table table-striped table-hover table-active" title="Perfiles Registradas Actualmente:">
    <tr class="ui-widget-header">
        <th scope="col">Codigo</th>
        <th scope="col">Sexo</th>
        <th scope="col"></th>
    </tr>

    <tbody id=contenedorsexos>

        @foreach($sex as $item)
        <tr scope="row">
            <td >
                {{$item->sexocodigo}}
            </td>
            <td>
                {{$item->sexo}}
            </td>
            <td>
            </td>
        </tr>
        @endforeach()
    </tbody>
    @endsection