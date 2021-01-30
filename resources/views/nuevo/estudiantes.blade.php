@extends('plantillabase')
@section('menuprimario')
@endsection()
@section('contenido')
<table>
    <td>
        <table width=100%;>
            <tr class="tabtitulos">
                <th>
                    DATOS INFORMATIVOS
                </th>
            </tr>
            <tr>
                <td>
                    <table>

                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="tipodocumento" id="tipodocumento">
                                                ' . cargartipodocumento($dato->getFktipodocumentoId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> TIPO DE DOCUMENTO DE IDENTIDAD </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" id="ced" name="ced" maxlength="10" placeholder="Ingrese su N° CI/RUC" ' . $activo . ' required="required" value="' . $cedula . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> NUMERO DE DOCUMENTO DE IDENTIDAD </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" placeholder="Primer Apellido" id="apellidoEst" name="apellidoEst" class="texto" required="required" value="' . $dato->getPrimerApellido() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> PRIMER APELLIDO </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" placeholder="Segundo Apellido" id="apellidoEst2" name="apellidoEst2" class="texto" value="' . $dato->getSegundoApellido() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> SEGUNDO APELLIDO </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" placeholder="Primer Nombre" id="nombreEst" name="nombreEst" class="texto" required="required" value="' . $dato->getPrimerNombre() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> PRIMER NOMBRE </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" placeholder="Segundo Nombre" id="nombreEst2" name="nombreEst2" class="texto" value="' . $dato->getSegundoNombre() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> SEGUNDO NOMBRE </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                    ORIENTACION SEXUAL
                </th>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="lstsexo" id="lstsexo">
                                                ' . cargarSexos($dato->getFksexoId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">SEXO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" id="lstgeneros" name="lstgeneros">
                                                ' . cargarGeneros($dato->getFkGeneroId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> GENERO </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                    ESTADO CIVIL Y TIPO DE SANGRE
                </th>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" id="estadoCivil" name="estadoCivil">
                                                ' . cargarEstadoCivil($dato->getFkEstadoCivilId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">ESTADO CIVIL</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" id="lstsangre" name="lstsangre">
                                                ' . cargartipoSangre($dato->getFkTipoSangreId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1"> TIPO DE SANGRE </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                    FECHA Y LUGAR DE NACIMIENTO
                </th>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="date" placeholder="Ingrese su fecha de nacimiento" id="fechanaci" name="fechanaci" class="light" required="required" value="' . $dato->getFechaNacimiento() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">FECHA DE NACIIENTO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" id="paisNacionalidad" name="paisNacionalidad" onchange="cargarProvincias()">
                                                ' . cargarPais($paisest->getPaisId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">PAIS DE NACIMIENTO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr id="nacionalidad">
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="provinciaNacionalidad" id="provinciaNacionalidad" onchange="cargarCantonest1()">
                                                ' . cargarProvincias_pais($paisest->getPaisId(), $provest->getProvinciaId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">PROVINCIA DE NACIMIENTO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="cantonNacionalidad" id="cantonNacionalidad">
                                                ' . cargarCanton($cantonet->getCantonId(), $provest->getProvinciaId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">CANTON DE NACIMIENTO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr id=migrante>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="categoraMigratoria" id="categoraMigratoria">
                                                ' . cargarCategoriaMigratoria($dato->getCategoriaMigratoriaId(), $paisest) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">CATEGORIA MIGRATORIA</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                    ETNIA , PUEBLO E IDIOMA ANCESTRAL
                </th>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <select class="selector" id="etnia" name="etnia" onchange="cargarPueblo()">
                                    ' . cargarEtnia($pueblo->getPnetnia()) . '
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="etiqueta1">ETNIA</label>
                            </th>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="pueblonacionalidad" id="pueblonacionalidad" onchange="selectpueblo()">
                                                ' . cargarPuebloEtnia($dato->getFkPuebloNacionalidadId(), $pueblo->getPnetnia()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">PUEBLO NACIONALIDAD</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" id="lstidioma" name="lstidioma">
                                                ' . cargarIdiomaEtnia($dato->getIdiomas(), $pueblo->getPnetnia()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">IDIOMA ANCESTRAL</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                    FORMAS DE CONTACTOS CON EL ESTUDIANTE
                </th>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="email" placeholder="Correo Electrónico" id="email1" name="email1" class="texto" required="required" value="' . $dato->getCorreoElectronico() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">CORREO ELECTRONICO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="tel" placeholder="Numero Celular" pattern="[0-9]{10}" id="numcelular" maxlength="10" name="telefonos" class="light campnum1" required="required" value="' . $dato->getNumeroCelular() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">NUMERO CELULAR</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="tel" placeholder="Numero Convencional" minlength="1" maxlength="8" id="numconvenconal" name="numconvenconal" class="light campnum1" value="' . $dato->getNumeroComvencional() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">NUMERO CONVENCIONAL</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
    </td>
</table>
@endsection