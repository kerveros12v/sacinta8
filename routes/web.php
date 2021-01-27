<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
seccion general
*/

Route::get('/', 'App\Http\Controllers\PagesController@inicio');
Route::get('plantillabase', 'App\Http\Controllers\PagesController@plantillabase')->name('plantillabase');
Route::get('menuprincipal', 'App\Http\Controllers\PagesController@menuprincipal')->name('menuprincipal');
/*
Seccion de listado de registros
*/
Route::get('acceso_departamentos', 'App\Http\Controllers\PagesController@acceso_departamentos')->name('acceso_departamentos');
Route::get('asignaturas', 'App\Http\Controllers\PagesController@asignaturas')->name('asignaturas');
Route::get('asistencia_estudiantes', 'App\Http\Controllers\PagesController@asistencia_estudiantes')->name('asistencia_estudiantes');
Route::get('bachilleratos', 'App\Http\Controllers\PagesController@bachilleratos')->name('bachilleratos');
Route::get('becas_docentes', 'App\Http\Controllers\PagesController@becas_docentes')->name('becas_docentes');
Route::get('bimestres', 'App\Http\Controllers\PagesController@bimestres')->name('bimestres');
Route::get('bono_desarrollos', 'App\Http\Controllers\PagesController@bono_desarrollos')->name('bono_desarrollos');
Route::get('calendarios', 'App\Http\Controllers\PagesController@calendarios')->name('calendarios');
Route::get('cantons', 'App\Http\Controllers\PagesController@cantons')->name('cantons');
Route::get('cargo_directivos', 'App\Http\Controllers\PagesController@cargo_directivos')->name('cargo_directivos');
Route::get('cargo_gestion_direccion_academicos', 'App\Http\Controllers\PagesController@cargo_gestion_direccion_academicos')->name('cargo_gestion_direccion_academicos');
Route::get('carreras', 'App\Http\Controllers\PagesController@carreras')->name('carreras');
Route::get('categoria_migratorias', 'App\Http\Controllers\PagesController@categoria_migratorias')->name('categoria_migratorias');
Route::get('ciclo_periodos', 'App\Http\Controllers\PagesController@ciclo_periodos')->name('ciclo_periodos');
Route::get('colegios', 'App\Http\Controllers\PagesController@colegios')->name('colegios');
Route::get('contactos_emergencias', 'App\Http\Controllers\PagesController@contactos_emergencias')->name('contactos_emergencias');
Route::get('cuarta_razon_becas', 'App\Http\Controllers\PagesController@cuarta_razon_becas')->name('cuarta_razon_becas');
Route::get('curso_periodo_academicos', 'App\Http\Controllers\PagesController@curso_periodo_academicos')->name('curso_periodo_academicos');
Route::get('cursos', 'App\Http\Controllers\PagesController@cursos')->name('cursos');
Route::get('departamentos', 'App\Http\Controllers\PagesController@departamentos')->name('departamentos');
Route::get('desertore_retirados', 'App\Http\Controllers\PagesController@desertore_retirados')->name('desertore_retirados');
Route::get('dias', 'App\Http\Controllers\PagesController@dias')->name('dias');
Route::get('discapacidad_docentes', 'App\Http\Controllers\PagesController@discapacidad_docentes')->name('discapacidad_docentes');
Route::get('discapacidad_estudiantes', 'App\Http\Controllers\PagesController@discapacidad_estudiantes')->name('discapacidad_estudiantes');
Route::get('discapacidads', 'App\Http\Controllers\PagesController@discapacidads')->name('discapacidads');
Route::get('distributivo_curso_asignaturas', 'App\Http\Controllers\PagesController@distributivo_curso_asignaturas')->name('distributivo_curso_asignaturas');
Route::get('distributivos', 'App\Http\Controllers\PagesController@distributivos')->name('distributivos');
Route::get('docencia_tecnico_superiors', 'App\Http\Controllers\PagesController@docencia_tecnico_superiors')->name('docencia_tecnico_superiors');
Route::get('docencia_tecnologicos', 'App\Http\Controllers\PagesController@docencia_tecnologicos')->name('docencia_tecnologicos');
Route::get('docentes', 'App\Http\Controllers\PagesController@docentes')->name('docentes');
Route::get('empresas', 'App\Http\Controllers\PagesController@empresas')->name('empresas');
Route::get('entorno_institucional_practica_profesionals', 'App\Http\Controllers\PagesController@entorno_institucional_practica_profesionals')->name('entorno_institucional_practica_profesionals');
Route::get('escalafon_docentes', 'App\Http\Controllers\PagesController@escalafon_docentes')->name('escalafon_docentes');
Route::get('esta_cursando_estudios', 'App\Http\Controllers\PagesController@esta_cursando_estudios')->name('esta_cursando_estudios');
Route::get('esta_en_periodo_sabaticos', 'App\Http\Controllers\PagesController@esta_en_periodo_sabaticos')->name('esta_en_periodo_sabaticos');
Route::get('estado_civiles', 'App\Http\Controllers\PagesController@estado_civiles')->name('estado_civiles');
Route::get('estados_procesos', 'App\Http\Controllers\PagesController@estados_procesos')->name('estados_procesos');
Route::get('estudiante_ocupacions', 'App\Http\Controllers\PagesController@estudiante_ocupacions')->name('estudiante_ocupacions');
Route::get('estudiante_titulados', 'App\Http\Controllers\PagesController@estudiante_titulados')->name('estudiante_titulados');
Route::get('estudiante_titulo_tercer_nivels', 'App\Http\Controllers\PagesController@estudiante_titulo_tercer_nivels')->name('estudiante_titulo_tercer_nivels');
Route::get('estudiantes', 'App\Http\Controllers\PagesController@estudiantes')->name('estudiantes');
Route::get('estudinate_trabajos', 'App\Http\Controllers\PagesController@estudinate_trabajos')->name('estudinate_trabajos');
Route::get('etnias', 'App\Http\Controllers\PagesController@etnias')->name('etnias');
Route::get('financiamiento_beca_docentes', 'App\Http\Controllers\PagesController@financiamiento_beca_docentes')->name('financiamiento_beca_docentes');
Route::get('financiamiento_becas', 'App\Http\Controllers\PagesController@financiamiento_becas')->name('financiamiento_becas');
Route::get('forma_calificacions', 'App\Http\Controllers\PagesController@forma_calificacions')->name('forma_calificacions');
Route::get('formacion_artesanos', 'App\Http\Controllers\PagesController@formacion_artesanos')->name('formacion_artesanos');
Route::get('generos', 'App\Http\Controllers\PagesController@generos')->name('generos');
Route::get('grado_ocupacionals', 'App\Http\Controllers\PagesController@grado_ocupacionals')->name('grado_ocupacionals');
Route::get('ha_perdido_la_gratuidads', 'App\Http\Controllers\PagesController@ha_perdido_la_gratuidads')->name('ha_perdido_la_gratuidads');
Route::get('ha_realizado_practica_preprofesionals', 'App\Http\Controllers\PagesController@ha_realizado_practica_preprofesionals')->name('ha_realizado_practica_preprofesionals');
Route::get('ha_repetido_almenos_una_materias', 'App\Http\Controllers\PagesController@ha_repetido_almenos_una_materias')->name('ha_repetido_almenos_una_materias');
Route::get('horario_docentes', 'App\Http\Controllers\PagesController@horario_docentes')->name('horario_docentes');
Route::get('horas', 'App\Http\Controllers\PagesController@horas')->name('horas');
Route::get('idioma_ancestrals', 'App\Http\Controllers\PagesController@idioma_ancestrals')->name('idioma_ancestrals');
Route::get('ingreso_con_concurso_meritos', 'App\Http\Controllers\PagesController@ingreso_con_concurso_meritos')->name('ingreso_con_concurso_meritos');
Route::get('ingresos_estudiantes', 'App\Http\Controllers\PagesController@ingresos_estudiantes')->name('ingresos_estudiantes');
Route::get('institucion_donde_cursa_estudios', 'App\Http\Controllers\PagesController@institucion_donde_cursa_estudios')->name('institucion_donde_cursa_estudios');
Route::get('institutos', 'App\Http\Controllers\PagesController@institutos')->name('institutos');
Route::get('jornada_academicas', 'App\Http\Controllers\PagesController@jornada_academicas')->name('jornada_academicas');
Route::get('malla_curriculars', 'App\Http\Controllers\PagesController@malla_curriculars')->name('malla_curriculars');
Route::get('matriculas', 'App\Http\Controllers\PagesController@matriculas')->name('matriculas');
Route::get('modalidad_carreras', 'App\Http\Controllers\PagesController@modalidad_carreras')->name('modalidad_carreras');
Route::get('nivel_academicos', 'App\Http\Controllers\PagesController@nivel_academicos')->name('nivel_academicos');
Route::get('nivel_formacions', 'App\Http\Controllers\PagesController@nivel_formacions')->name('nivel_formacions');
Route::get('notas', 'App\Http\Controllers\PagesController@notas')->name('notas');
Route::get('num_pub_revistas_cientif_indexadas', 'App\Http\Controllers\PagesController@num_pub_revistas_cientif_indexadas')->name('num_pub_revistas_cientif_indexadas');
Route::get('numeracion_documentos', 'App\Http\Controllers\PagesController@numeracion_documentos')->name('numeracion_documentos');
Route::get('numero_matriculas', 'App\Http\Controllers\PagesController@numero_matriculas')->name('numero_matriculas');
Route::get('obra_publicacions', 'App\Http\Controllers\PagesController@obra_publicacions')->name('obra_publicacions');
Route::get('pais', 'App\Http\Controllers\PagesController@pais')->name('pais');
Route::get('paralelos', 'App\Http\Controllers\PagesController@paralelos')->name('paralelos');
Route::get('parentescos', 'App\Http\Controllers\PagesController@parentescos')->name('parentescos');
Route::get('parroquias', 'App\Http\Controllers\PagesController@parroquias')->name('parroquias');
Route::get('participa_proyecto_vinculacion_sociedads', 'App\Http\Controllers\PagesController@participa_proyecto_vinculacion_sociedads')->name('participa_proyecto_vinculacion_sociedads');
Route::get('password_resets', 'App\Http\Controllers\PagesController@password_resets')->name('password_resets');
Route::get('periodo_academicos', 'App\Http\Controllers\PagesController@periodo_academicos')->name('periodo_academicos');
Route::get('personal_administrativos', 'App\Http\Controllers\PagesController@personal_administrativos')->name('personal_administrativos');
Route::get('personals', 'App\Http\Controllers\PagesController@personals')->name('personals');
Route::get('posee_becas', 'App\Http\Controllers\PagesController@posee_becas')->name('posee_becas');
Route::get('practica_estudiantes', 'App\Http\Controllers\PagesController@practica_estudiantes')->name('practica_estudiantes');
Route::get('practica_preprofecionales', 'App\Http\Controllers\PagesController@practica_preprofecionales')->name('practica_preprofecionales');
Route::get('primera_razon_becas', 'App\Http\Controllers\PagesController@primera_razon_becas')->name('primera_razon_becas');
Route::get('provincias', 'App\Http\Controllers\PagesController@provincias')->name('provincias');
Route::get('proyectos_investigacions', 'App\Http\Controllers\PagesController@proyectos_investigacions')->name('proyectos_investigacions');
Route::get('proyectos_macros', 'App\Http\Controllers\PagesController@proyectos_macros')->name('proyectos_macros');
Route::get('pub_revista_cienin_indexadas', 'App\Http\Controllers\PagesController@pub_revista_cienin_indexadas')->name('pub_revista_cienin_indexadas');
Route::get('pueblo_nacionalidads', 'App\Http\Controllers\PagesController@pueblo_nacionalidads')->name('pueblo_nacionalidads');
Route::get('quinta_razon_becas', 'App\Http\Controllers\PagesController@quinta_razon_becas')->name('quinta_razon_becas');
Route::get('recibe_pension_diferenciadas', 'App\Http\Controllers\PagesController@recibe_pension_diferenciadas')->name('recibe_pension_diferenciadas');
Route::get('relacion_laboral_ies', 'App\Http\Controllers\PagesController@relacion_laboral_ies')->name('relacion_laboral_ies');
Route::get('residencia_estudiantes', 'App\Http\Controllers\PagesController@residencia_estudiantes')->name('residencia_estudiantes');
Route::get('sector_economicos', 'App\Http\Controllers\PagesController@sector_economicos')->name('sector_economicos');
Route::get('segunda_razon_becas', 'App\Http\Controllers\PagesController@segunda_razon_becas')->name('segunda_razon_becas');
Route::get('segunda_tercera_matriculas', 'App\Http\Controllers\PagesController@segunda_tercera_matriculas')->name('segunda_tercera_matriculas');
Route::get('sete_condicion_laborals', 'App\Http\Controllers\PagesController@sete_condicion_laborals')->name('sete_condicion_laborals');
Route::get('setec_aspirantes', 'App\Http\Controllers\PagesController@setec_aspirantes')->name('setec_aspirantes');
Route::get('setec_condicion_de_vidas', 'App\Http\Controllers\PagesController@setec_condicion_de_vidas')->name('setec_condicion_de_vidas');
Route::get('setec_encuestadors', 'App\Http\Controllers\PagesController@setec_encuestadors')->name('setec_encuestadors');
Route::get('setec_estado_ocupacionals', 'App\Http\Controllers\PagesController@setec_estado_ocupacionals')->name('setec_estado_ocupacionals');
Route::get('setec_experiencia_laborals', 'App\Http\Controllers\PagesController@setec_experiencia_laborals')->name('setec_experiencia_laborals');
Route::get('setec_ocupacions', 'App\Http\Controllers\PagesController@setec_ocupacions')->name('setec_ocupacions');
Route::get('setec_perfils', 'App\Http\Controllers\PagesController@setec_perfils')->name('setec_perfils');
Route::get('setec_tipo_ocupacions', 'App\Http\Controllers\PagesController@setec_tipo_ocupacions')->name('setec_tipo_ocupacions');
Route::get('setecs', 'App\Http\Controllers\PagesController@setecs')->name('setecs');
Route::get('sexos', 'App\Http\Controllers\PagesController@sexos')->name('sexos');
Route::get('sexta_razon_becas', 'App\Http\Controllers\PagesController@sexta_razon_becas')->name('sexta_razon_becas');
Route::get('socioempleos', 'App\Http\Controllers\PagesController@socioempleos')->name('socioempleos');
Route::get('sostenimientos', 'App\Http\Controllers\PagesController@sostenimientos')->name('sostenimientos');
Route::get('tercera_razon_becas', 'App\Http\Controllers\PagesController@tercera_razon_becas')->name('tercera_razon_becas');
Route::get('tiempo_dedicacions', 'App\Http\Controllers\PagesController@tiempo_dedicacions')->name('tiempo_dedicacions');
Route::get('tipo_alcance_proyecto_vinculacions', 'App\Http\Controllers\PagesController@tipo_alcance_proyecto_vinculacions')->name('tipo_alcance_proyecto_vinculacions');
Route::get('tipo_asistencia_estudiantes', 'App\Http\Controllers\PagesController@tipo_asistencia_estudiantes')->name('tipo_asistencia_estudiantes');
Route::get('tipo_becas', 'App\Http\Controllers\PagesController@tipo_becas')->name('tipo_becas');
Route::get('tipo_carreras', 'App\Http\Controllers\PagesController@tipo_carreras')->name('tipo_carreras');
Route::get('tipo_colegios', 'App\Http\Controllers\PagesController@tipo_colegios')->name('tipo_colegios');
Route::get('tipo_discapacidads', 'App\Http\Controllers\PagesController@tipo_discapacidads')->name('tipo_discapacidads');
Route::get('tipo_enfermedad_catastroficas', 'App\Http\Controllers\PagesController@tipo_enfermedad_catastroficas')->name('tipo_enfermedad_catastroficas');
Route::get('tipo_matriculas', 'App\Http\Controllers\PagesController@tipo_matriculas')->name('tipo_matriculas');
Route::get('tipo_retiro_estudiantes', 'App\Http\Controllers\PagesController@tipo_retiro_estudiantes')->name('tipo_retiro_estudiantes');
Route::get('tipo_usuarios', 'App\Http\Controllers\PagesController@tipo_usuarios')->name('tipo_usuarios');
Route::get('tipos_bacilleratos', 'App\Http\Controllers\PagesController@tipos_bacilleratos')->name('tipos_bacilleratos');
Route::get('tipos_documentos', 'App\Http\Controllers\PagesController@tipos_documentos')->name('tipos_documentos');
Route::get('tipos_sangres', 'App\Http\Controllers\PagesController@tipos_sangres')->name('tipos_sangres');
Route::get('titulo_tercer_nivels', 'App\Http\Controllers\PagesController@titulo_tercer_nivels')->name('titulo_tercer_nivels');
Route::get('titulos_profecionales', 'App\Http\Controllers\PagesController@titulos_profecionales')->name('titulos_profecionales');
Route::get('vinculacion_sociedads', 'App\Http\Controllers\PagesController@vinculacion_sociedads')->name('vinculacion_sociedads');
