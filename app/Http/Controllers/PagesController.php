<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PagesController extends Controller
{
    //

    function menuprincipal()
    {
        $menuprincipal = 'App\Models\AccesoDepartamento'::all();
        $departamentos = 'App\Models\Departamento'::all();
        $usuario = 1;
        return view('/menus/principal', compact('menuprincipal', 'departamentos', 'usuario'));
    }
    function inicio()
    {
        return view('welcome');
    }
    public function plantillabase()
    {

        return view('plantillabase');
    }
    public function acceso_departamentos()
    {
        return view('acceso_departamentos');
    }

    public function asignaturas()
    {
        $asignaturas = 'App\Models\Asignatura'::all();
        return view('asignaturas', compact('asignaturas'));
    }
    public function asistencia_estudiantes()
    {
        return view('asistencia_estudiantes');
    }
    public function bachilleratos()
    {
        return view('bachilleratos');
    }
    public function becas_docentes()
    {
        return view('becas_docentes');
    }
    public function bimestres()
    {
        return view('bimestres');
    }
    public function bono_desarrollos()
    {
        return view('bono_desarrollos');
    }
    public function calendarios()
    {
        return view('calendarios');
    }
    public function cantons()
    {
        return view('cantons');
    }
    public function cargo_directivos()
    {
        return view('cargo_directivos');
    }
    public function cargo_gestion_direccion_academicos()
    {
        return view('cargo_gestion_direccion_academicos');
    }
    public function carreras()
    {
        return view('carreras');
    }
    public function categoria_migratorias()
    {
        return view('categoria_migratorias');
    }
    public function ciclo_periodos()
    {
        return view('ciclo_periodos');
    }
    public function colegios()
    {
        return view('colegios');
    }
    public function contactos_emergencias()
    {
        return view('contactos_emergencias');
    }
    public function cuarta_razon_becas()
    {
        return view('cuarta_razon_becas');
    }
    public function curso_periodo_academicos()
    {
        return view('curso_periodo_academicos');
    }
    public function cursos()
    {
        return view('cursos');
    }
    public function departamentos()
    {
        return view('departamentos');
    }
    public function desertore_retirados()
    {
        return view('desertore_retirados');
    }
    public function dias()
    {
        return view('dias');
    }
    public function discapacidad_docentes()
    {
        return view('discapacidad_docentes');
    }
    public function discapacidad_estudiantes()
    {
        return view('discapacidad_estudiantes');
    }
    public function discapacidads()
    {
        return view('discapacidads');
    }
    public function distributivo_curso_asignaturas()
    {
        return view('distributivo_curso_asignaturas');
    }
    public function distributivos()
    {
        return view('distributivos');
    }
    public function docencia_tecnico_superiors()
    {
        return view('docencia_tecnico_superiors');
    }
    public function docencia_tecnologicos()
    {
        return view('docencia_tecnologicos');
    }
    public function docentes()
    {
        return view('docentes');
    }
    public function empresas()
    {
        return view('empresas');
    }
    public function entorno_institucional_practica_profesionals()
    {
        return view('entorno_institucional_practica_profesionals');
    }
    public function escalafon_docentes()
    {
        return view('escalafon_docentes');
    }
    public function esta_cursando_estudios()
    {
        return view('esta_cursando_estudios');
    }
    public function esta_en_periodo_sabaticos()
    {
        return view('esta_en_periodo_sabaticos');
    }
    public function estado_civiles()
    {

        $estadocivil = 'App\Models\EstadoCivile'::all();
        return view('estado_civiles', compact('estadocivil'));
    }
    public function estados_procesos()
    {
        return view('estados_procesos');
    }
    public function estudiante_ocupacions()
    {
        return view('estudiante_ocupacions');
    }
    public function estudiante_titulados()
    {
        return view('estudiante_titulados');
    }
    public function estudiante_titulo_tercer_nivels()
    {
        return view('estudiante_titulo_tercer_nivels');
    }
    public function estudiantes()
    {
        $estudiantes = 'App\Models\Estudiante'::all();
        return view('estudiantes', compact('estudiantes'));
    }
    public function estudinate_trabajos()
    {
        return view('estudinate_trabajos');
    }
    public function etnias()
    {
        return view('etnias');
    }
    public function financiamiento_beca_docentes()
    {
        return view('financiamiento_beca_docentes');
    }
    public function financiamiento_becas()
    {
        return view('financiamiento_becas');
    }
    public function forma_calificacions()
    {
        return view('forma_calificacions');
    }
    public function formacion_artesanos()
    {
        return view('formacion_artesanos');
    }
    public function generos()
    {

        $genero = 'App\Models\Genero'::all();
        return view('genero', compact('genero'));
    }
    public function grado_ocupacionals()
    {
        return view('grado_ocupacionals');
    }
    public function ha_perdido_la_gratuidads()
    {
        return view('ha_perdido_la_gratuidads');
    }
    public function ha_realizado_practica_preprofesionals()
    {
        return view('ha_realizado_practica_preprofesionals');
    }
    public function ha_repetido_almenos_una_materias()
    {
        return view('ha_repetido_almenos_una_materias');
    }
    public function horario_docentes()
    {
        return view('horario_docentes');
    }
    public function horas()
    {
        return view('horas');
    }
    public function idioma_ancestrals()
    {
        return view('idioma_ancestrals');
    }
    public function ingreso_con_concurso_meritos()
    {
        return view('ingreso_con_concurso_meritos');
    }
    public function ingresos_estudiantes()
    {
        return view('ingresos_estudiantes');
    }
    public function institucion_donde_cursa_estudios()
    {
        return view('institucion_donde_cursa_estudios');
    }
    public function institutos()
    {
        return view('institutos');
    }
    public function jornada_academicas()
    {
        return view('jornada_academicas');
    }
    public function malla_curriculars()
    {
        return view('malla_curriculars');
    }
    public function matriculas()
    {
        return view('matriculas');
    }
    public function modalidad_carreras()
    {
        return view('modalidad_carreras');
    }
    public function nivel_academicos()
    {
        return view('nivel_academicos');
    }
    public function nivel_formacions()
    {
        return view('nivel_formacions');
    }
    public function notas()
    {
        return view('notas');
    }
    public function num_pub_revistas_cientif_indexadas()
    {
        return view('num_pub_revistas_cientif_indexadas');
    }
    public function numeracion_documentos()
    {
        return view('numeracion_documentos');
    }
    public function numero_matriculas()
    {
        return view('numero_matriculas');
    }
    public function obra_publicacions()
    {
        return view('obra_publicacions');
    }
    public function pais()
    {
        return view('pais');
    }
    public function paralelos()
    {
        return view('paralelos');
    }
    public function parentescos()
    {
        return view('parentescos');
    }
    public function parroquias()
    {
        return view('parroquias');
    }
    public function participa_proyecto_vinculacion_sociedads()
    {
        return view('participa_proyecto_vinculacion_sociedads');
    }
    public function periodo_academicos()
    {
        return view('periodo_academicos');
    }
    public function personal_administrativos()
    {
        return view('personal_administrativos');
    }
    public function personals()
    {
        return view('personals');
    }
    public function posee_becas()
    {
        return view('posee_becas');
    }
    public function practica_estudiantes()
    {
        return view('practica_estudiantes');
    }
    public function practica_preprofecionales()
    {
        return view('practica_preprofecionales');
    }
    public function primera_razon_becas()
    {
        return view('primera_razon_becas');
    }
    public function provincias()
    {
        return view('provincias');
    }
    public function proyectos_investigacions()
    {
        return view('proyectos_investigacions');
    }
    public function proyectos_macros()
    {
        return view('proyectos_macros');
    }
    public function pub_revista_cienin_indexadas()
    {
        return view('pub_revista_cienin_indexadas');
    }
    public function pueblo_nacionalidads()
    {
        return view('pueblo_nacionalidads');
    }
    public function quinta_razon_becas()
    {
        return view('quinta_razon_becas');
    }
    public function recibe_pension_diferenciadas()
    {
        return view('recibe_pension_diferenciadas');
    }
    public function relacion_laboral_ies()
    {
        return view('relacion_laboral_ies');
    }
    public function residencia_estudiantes()
    {
        return view('residencia_estudiantes');
    }
    public function sector_economicos()
    {
        return view('sector_economicos');
    }
    public function segunda_razon_becas()
    {
        return view('segunda_razon_becas');
    }
    public function segunda_tercera_matriculas()
    {
        return view('segunda_tercera_matriculas');
    }
    public function sete_condicion_laborals()
    {
        return view('sete_condicion_laborals');
    }
    public function setec_aspirantes()
    {
        return view('setec_aspirantes');
    }
    public function setec_condicion_de_vidas()
    {
        return view('setec_condicion_de_vidas');
    }
    public function setec_encuestadors()
    {
        return view('setec_encuestadors');
    }
    public function setec_estado_ocupacionals()
    {
        return view('setec_estado_ocupacionals');
    }
    public function setec_experiencia_laborals()
    {
        return view('setec_experiencia_laborals');
    }
    public function setec_ocupacions()
    {
        return view('setec_ocupacions');
    }
    public function setec_perfils()
    {
        return view('setec_perfils');
    }
    public function setec_tipo_ocupacions()
    {
        return view('setec_tipo_ocupacions');
    }
    public function setecs()
    {
        return view('setecs');
    }
    public function sexos()
    {
        $menuprincipal = 'App\Models\AccesoDepartamento'::all();
        $departamentos = 'App\Models\Departamento'::all();
        $usuario = 0;
        $sex = 'App\Models\Sexo'::all();
        return view('sexos', compact('sex', 'menuprincipal', 'departamentos', 'usuario'));
    }
    public function sexta_razon_becas()
    {
        return view('sexta_razon_becas');
    }
    public function socioempleos()
    {
        return view('socioempleos');
    }
    public function sostenimientos()
    {
        return view('sostenimientos');
    }
    public function tercera_razon_becas()
    {
        return view('tercera_razon_becas');
    }
    public function tiempo_dedicacions()
    {
        return view('tiempo_dedicacions');
    }
    public function tipo_alcance_proyecto_vinculacions()
    {
        return view('tipo_alcance_proyecto_vinculacions');
    }
    public function tipo_asistencia_estudiantes()
    {
        return view('tipo_asistencia_estudiantes');
    }
    public function tipo_becas()
    {
        return view('tipo_becas');
    }
    public function tipo_carreras()
    {
        return view('tipo_carreras');
    }
    public function tipo_colegios()
    {
        return view('tipo_colegios');
    }
    public function tipo_discapacidads()
    {
        return view('tipo_discapacidads');
    }
    public function tipo_enfermedad_catastroficas()
    {
        return view('tipo_enfermedad_catastroficas');
    }
    public function tipo_matriculas()
    {
        return view('tipo_matriculas');
    }
    public function tipo_retiro_estudiantes()
    {
        return view('tipo_retiro_estudiantes');
    }
    public function tipo_usuarios()
    {
        return view('tipo_usuarios');
    }
    public function tipos_bacilleratos()
    {
        return view('tipos_bacilleratos');
    }
    public function tipos_documentos()
    {
        return view('tipos_documentos');
    }
    public function tipos_sangres()
    {
        return view('tipos_sangres');
    }
    public function titulo_tercer_nivels()
    {
        return view('titulo_tercer_nivels');
    }
    public function titulos_profecionales()
    {
        return view('titulos_profecionales');
    }
    public function vinculacion_sociedads()
    {
        return view('vinculacion_sociedads');
    }
    /*
seccion de accion nuevo
*/
    public function nuevo_acceso_departamentos()
    {
        return view('nuevo/acceso_departamentos');
    }
    public function nuevo_asignaturas()
    {
        return view('nuevo/asignaturas');
    }
    public function nuevo_asistencia_estudiantes()
    {
        return view('nuevo/asistencia_estudiantes');
    }
    public function nuevo_bachilleratos()
    {
        return view('nuevo/bachilleratos');
    }
    public function nuevo_becas_docentes()
    {
        return view('nuevo/becas_docentes');
    }
    public function nuevo_bimestres()
    {
        return view('nuevo/bimestres');
    }
    public function nuevo_bono_desarrollos()
    {
        return view('nuevo/bono_desarrollos');
    }
    public function nuevo_calendarios()
    {
        return view('nuevo/calendarios');
    }
    public function nuevo_cantons()
    {
        return view('nuevo/cantons');
    }
    public function nuevo_cargo_directivos()
    {
        return view('nuevo/cargo_directivos');
    }
    public function nuevo_cargo_gestion_direccion_academicos()
    {
        return view('nuevo/cargo_gestion_direccion_academicos');
    }
    public function nuevo_carreras()
    {
        return view('nuevo/carreras');
    }
    public function nuevo_categoria_migratorias()
    {
        return view('nuevo/categoria_migratorias');
    }
    public function nuevo_ciclo_periodos()
    {
        return view('nuevo/ciclo_periodos');
    }
    public function nuevo_colegios()
    {
        return view('nuevo/colegios');
    }
    public function nuevo_contactos_emergencias()
    {
        return view('nuevo/contactos_emergencias');
    }
    public function nuevo_cuarta_razon_becas()
    {
        return view('nuevo/cuarta_razon_becas');
    }
    public function nuevo_curso_periodo_academicos()
    {
        return view('nuevo/curso_periodo_academicos');
    }
    public function nuevo_cursos()
    {
        return view('nuevo/cursos');
    }
    public function nuevo_departamentos()
    {
        return view('nuevo/departamentos');
    }
    public function nuevo_desertore_retirados()
    {
        return view('nuevo/desertore_retirados');
    }
    public function nuevo_dias()
    {
        return view('nuevo/dias');
    }
    public function nuevo_discapacidad_docentes()
    {
        return view('nuevo/discapacidad_docentes');
    }
    public function nuevo_discapacidad_estudiantes()
    {
        return view('nuevo/discapacidad_estudiantes');
    }
    public function nuevo_discapacidads()
    {
        return view('nuevo/discapacidads');
    }
    public function nuevo_distributivo_curso_asignaturas()
    {
        return view('nuevo/distributivo_curso_asignaturas');
    }
    public function nuevo_distributivos()
    {
        return view('nuevo/distributivos');
    }
    public function nuevo_docencia_tecnico_superiors()
    {
        return view('nuevo/docencia_tecnico_superiors');
    }
    public function nuevo_docencia_tecnologicos()
    {
        return view('nuevo/docencia_tecnologicos');
    }
    public function nuevo_docentes()
    {
        return view('nuevo/docentes');
    }
    public function nuevo_empresas()
    {
        return view('nuevo/empresas');
    }
    public function nuevo_entorno_institucional_practica_profesionals()
    {
        return view('nuevo/entorno_institucional_practica_profesionals');
    }
    public function nuevo_escalafon_docentes()
    {
        return view('nuevo/escalafon_docentes');
    }
    public function nuevo_esta_cursando_estudios()
    {
        return view('nuevo/esta_cursando_estudios');
    }
    public function nuevo_esta_en_periodo_sabaticos()
    {
        return view('nuevo/esta_en_periodo_sabaticos');
    }
    public function nuevo_estado_civiles()
    {
        return view('nuevo/estado_civiles');
    }
    public function nuevo_estados_procesos()
    {
        return view('nuevo/estados_procesos');
    }
    public function nuevo_estudiante_ocupacions()
    {
        return view('nuevo/estudiante_ocupacions');
    }
    public function nuevo_estudiante_titulados()
    {
        return view('nuevo/estudiante_titulados');
    }
    public function nuevo_estudiante_titulo_tercer_nivels()
    {
        return view('nuevo/estudiante_titulo_tercer_nivels');
    }
    public function nuevo_estudiantes()
    {
        return view('nuevo/estudiantes');
    }
    public function nuevo_estudinate_trabajos()
    {
        return view('nuevo/estudinate_trabajos');
    }
    public function nuevo_etnias()
    {
        return view('nuevo/etnias');
    }
    public function nuevo_financiamiento_beca_docentes()
    {
        return view('nuevo/financiamiento_beca_docentes');
    }
    public function nuevo_financiamiento_becas()
    {
        return view('nuevo/financiamiento_becas');
    }
    public function nuevo_forma_calificacions()
    {
        return view('nuevo/forma_calificacions');
    }
    public function nuevo_formacion_artesanos()
    {
        return view('nuevo/formacion_artesanos');
    }
    public function nuevo_generos()
    {
        return view('nuevo/generos');
    }
    public function nuevo_grado_ocupacionals()
    {
        return view('nuevo/grado_ocupacionals');
    }
    public function nuevo_ha_perdido_la_gratuidads()
    {
        return view('nuevo/ha_perdido_la_gratuidads');
    }
    public function nuevo_ha_realizado_practica_preprofesionals()
    {
        return view('nuevo/ha_realizado_practica_preprofesionals');
    }
    public function nuevo_ha_repetido_almenos_una_materias()
    {
        return view('nuevo/ha_repetido_almenos_una_materias');
    }
    public function nuevo_horario_docentes()
    {
        return view('nuevo/horario_docentes');
    }
    public function nuevo_horas()
    {
        return view('nuevo/horas');
    }
    public function nuevo_idioma_ancestrals()
    {
        return view('nuevo/idioma_ancestrals');
    }
    public function nuevo_ingreso_con_concurso_meritos()
    {
        return view('nuevo/ingreso_con_concurso_meritos');
    }
    public function nuevo_ingresos_estudiantes()
    {
        return view('nuevo/ingresos_estudiantes');
    }
    public function nuevo_institucion_donde_cursa_estudios()
    {
        return view('nuevo/institucion_donde_cursa_estudios');
    }
    public function nuevo_institutos()
    {
        return view('nuevo/institutos');
    }
    public function nuevo_jornada_academicas()
    {
        return view('nuevo/jornada_academicas');
    }
    public function nuevo_malla_curriculars()
    {
        return view('nuevo/malla_curriculars');
    }
    public function nuevo_matriculas()
    {
        return view('nuevo/matriculas');
    }
    public function nuevo_modalidad_carreras()
    {
        return view('nuevo/modalidad_carreras');
    }
    public function nuevo_nivel_academicos()
    {
        return view('nuevo/nivel_academicos');
    }
    public function nuevo_nivel_formacions()
    {
        return view('nuevo/nivel_formacions');
    }
    public function nuevo_notas()
    {
        return view('nuevo/notas');
    }
    public function nuevo_num_pub_revistas_cientif_indexadas()
    {
        return view('nuevo/num_pub_revistas_cientif_indexadas');
    }
    public function nuevo_numeracion_documentos()
    {
        return view('nuevo/numeracion_documentos');
    }
    public function nuevo_numero_matriculas()
    {
        return view('nuevo/numero_matriculas');
    }
    public function nuevo_obra_publicacions()
    {
        return view('nuevo/obra_publicacions');
    }
    public function nuevo_pais()
    {
        return view('nuevo/pais');
    }
    public function nuevo_paralelos()
    {
        return view('nuevo/paralelos');
    }
    public function nuevo_parentescos()
    {
        return view('nuevo/parentescos');
    }
    public function nuevo_parroquias()
    {
        return view('nuevo/parroquias');
    }
    public function nuevo_participa_proyecto_vinculacion_sociedads()
    {
        return view('nuevo/participa_proyecto_vinculacion_sociedads');
    }
    public function nuevo_periodo_academicos()
    {
        return view('nuevo/periodo_academicos');
    }
    public function nuevo_personal_administrativos()
    {
        return view('nuevo/personal_administrativos');
    }
    public function nuevo_personals()
    {
        return view('nuevo/personals');
    }
    public function nuevo_posee_becas()
    {
        return view('nuevo/posee_becas');
    }
    public function nuevo_practica_estudiantes()
    {
        return view('nuevo/practica_estudiantes');
    }
    public function nuevo_practica_preprofecionales()
    {
        return view('nuevo/practica_preprofecionales');
    }
    public function nuevo_primera_razon_becas()
    {
        return view('nuevo/primera_razon_becas');
    }
    public function nuevo_provincias()
    {
        return view('nuevo/provincias');
    }
    public function nuevo_proyectos_investigacions()
    {
        return view('nuevo/proyectos_investigacions');
    }
    public function nuevo_proyectos_macros()
    {
        return view('nuevo/proyectos_macros');
    }
    public function nuevo_pub_revista_cienin_indexadas()
    {
        return view('nuevo/pub_revista_cienin_indexadas');
    }
    public function nuevo_pueblo_nacionalidads()
    {
        return view('nuevo/pueblo_nacionalidads');
    }
    public function nuevo_quinta_razon_becas()
    {
        return view('nuevo/quinta_razon_becas');
    }
    public function nuevo_recibe_pension_diferenciadas()
    {
        return view('nuevo/recibe_pension_diferenciadas');
    }
    public function nuevo_relacion_laboral_ies()
    {
        return view('nuevo/relacion_laboral_ies');
    }
    public function nuevo_residencia_estudiantes()
    {
        return view('nuevo/residencia_estudiantes');
    }
    public function nuevo_sector_economicos()
    {
        return view('nuevo/sector_economicos');
    }
    public function nuevo_segunda_razon_becas()
    {
        return view('nuevo/segunda_razon_becas');
    }
    public function nuevo_segunda_tercera_matriculas()
    {
        return view('nuevo/segunda_tercera_matriculas');
    }
    public function nuevo_sete_condicion_laborals()
    {
        return view('nuevo/sete_condicion_laborals');
    }
    public function nuevo_setec_aspirantes()
    {
        return view('nuevo/setec_aspirantes');
    }
    public function nuevo_setec_condicion_de_vidas()
    {
        return view('nuevo/setec_condicion_de_vidas');
    }
    public function nuevo_setec_encuestadors()
    {
        return view('nuevo/setec_encuestadors');
    }
    public function nuevo_setec_estado_ocupacionals()
    {
        return view('nuevo/setec_estado_ocupacionals');
    }
    public function nuevo_setec_experiencia_laborals()
    {
        return view('nuevo/setec_experiencia_laborals');
    }
    public function nuevo_setec_ocupacions()
    {
        return view('nuevo/setec_ocupacions');
    }
    public function nuevo_setec_perfils()
    {
        return view('nuevo/setec_perfils');
    }
    public function nuevo_setec_tipo_ocupacions()
    {
        return view('nuevo/setec_tipo_ocupacions');
    }
    public function nuevo_setecs()
    {
        return view('nuevo/setecs');
    }
    public function nuevo_sexos()
    {
        $menuprincipal = 'App\Models\AccesoDepartamento'::all();
        $departamentos = 'App\Models\Departamento'::all();
        $usuario = 0;
        $sex = 'App\Models\Sexo'::all();
        return view('nuevo/sexos', compact('sex', 'menuprincipal', 'departamentos', 'usuario'));
    }
    public function nuevo_sexta_razon_becas()
    {
        return view('nuevo/sexta_razon_becas');
    }
    public function nuevo_socioempleos()
    {
        return view('nuevo/socioempleos');
    }
    public function nuevo_sostenimientos()
    {
        return view('nuevo/sostenimientos');
    }
    public function nuevo_tercera_razon_becas()
    {
        return view('nuevo/tercera_razon_becas');
    }
    public function nuevo_tiempo_dedicacions()
    {
        return view('nuevo/tiempo_dedicacions');
    }
    public function nuevo_tipo_alcance_proyecto_vinculacions()
    {
        return view('nuevo/tipo_alcance_proyecto_vinculacions');
    }
    public function nuevo_tipo_asistencia_estudiantes()
    {
        return view('nuevo/tipo_asistencia_estudiantes');
    }
    public function nuevo_tipo_becas()
    {
        return view('nuevo/tipo_becas');
    }
    public function nuevo_tipo_carreras()
    {
        return view('nuevo/tipo_carreras');
    }
    public function nuevo_tipo_colegios()
    {
        return view('nuevo/tipo_colegios');
    }
    public function nuevo_tipo_discapacidads()
    {
        return view('nuevo/tipo_discapacidads');
    }
    public function nuevo_tipo_enfermedad_catastroficas()
    {
        return view('nuevo/tipo_enfermedad_catastroficas');
    }
    public function nuevo_tipo_matriculas()
    {
        return view('nuevo/tipo_matriculas');
    }
    public function nuevo_tipo_retiro_estudiantes()
    {
        return view('nuevo/tipo_retiro_estudiantes');
    }
    public function nuevo_tipo_usuarios()
    {
        return view('nuevo/tipo_usuarios');
    }
    public function nuevo_tipos_bacilleratos()
    {
        return view('nuevo/tipos_bacilleratos');
    }
    public function nuevo_tipos_documentos()
    {
        return view('nuevo/tipos_documentos');
    }
    public function nuevo_tipos_sangres()
    {
        return view('nuevo/tipos_sangres');
    }
    public function nuevo_titulo_tercer_nivels()
    {
        return view('nuevo/titulo_tercer_nivels');
    }
    public function nuevo_titulos_profecionales()
    {
        return view('nuevo/titulos_profecionales');
    }
    public function nuevo_vinculacion_sociedads()
    {
        return view('nuevo/vinculacion_sociedads');
    }
    /**
     * seccion de edicion
     */
    public function editar_acceso_departamentos()
    {
        return view('actualizar/acceso_departamentos');
    }
    public function editar_asignaturas()
    {
        return view('actualizar/asignaturas');
    }
    public function editar_asistencia_estudiantes()
    {
        return view('actualizar/asistencia_estudiantes');
    }
    public function editar_bachilleratos()
    {
        return view('actualizar/bachilleratos');
    }
    public function editar_becas_docentes()
    {
        return view('actualizar/becas_docentes');
    }
    public function editar_bimestres()
    {
        return view('actualizar/bimestres');
    }
    public function editar_bono_desarrollos()
    {
        return view('actualizar/bono_desarrollos');
    }
    public function editar_calendarios()
    {
        return view('actualizar/calendarios');
    }
    public function editar_cantons()
    {
        return view('actualizar/cantons');
    }
    public function editar_cargo_directivos()
    {
        return view('actualizar/cargo_directivos');
    }
    public function editar_cargo_gestion_direccion_academicos()
    {
        return view('actualizar/cargo_gestion_direccion_academicos');
    }
    public function editar_carreras()
    {
        return view('actualizar/carreras');
    }
    public function editar_categoria_migratorias()
    {
        return view('actualizar/categoria_migratorias');
    }
    public function editar_ciclo_periodos()
    {
        return view('actualizar/ciclo_periodos');
    }
    public function editar_colegios()
    {
        return view('actualizar/colegios');
    }
    public function editar_contactos_emergencias()
    {
        return view('actualizar/contactos_emergencias');
    }
    public function editar_cuarta_razon_becas()
    {
        return view('actualizar/cuarta_razon_becas');
    }
    public function editar_curso_periodo_academicos()
    {
        return view('actualizar/curso_periodo_academicos');
    }
    public function editar_cursos()
    {
        return view('actualizar/cursos');
    }
    public function editar_departamentos()
    {
        return view('actualizar/departamentos');
    }
    public function editar_desertore_retirados()
    {
        return view('actualizar/desertore_retirados');
    }
    public function editar_dias()
    {
        return view('actualizar/dias');
    }
    public function editar_discapacidad_docentes()
    {
        return view('actualizar/discapacidad_docentes');
    }
    public function editar_discapacidad_estudiantes()
    {
        return view('actualizar/discapacidad_estudiantes');
    }
    public function editar_discapacidads()
    {
        return view('actualizar/discapacidads');
    }
    public function editar_distributivo_curso_asignaturas()
    {
        return view('actualizar/distributivo_curso_asignaturas');
    }
    public function editar_distributivos()
    {
        return view('actualizar/distributivos');
    }
    public function editar_docencia_tecnico_superiors()
    {
        return view('actualizar/docencia_tecnico_superiors');
    }
    public function editar_docencia_tecnologicos()
    {
        return view('actualizar/docencia_tecnologicos');
    }
    public function editar_docentes()
    {
        return view('actualizar/docentes');
    }
    public function editar_empresas()
    {
        return view('actualizar/empresas');
    }
    public function editar_entorno_institucional_practica_profesionals()
    {
        return view('actualizar/entorno_institucional_practica_profesionals');
    }
    public function editar_escalafon_docentes()
    {
        return view('actualizar/escalafon_docentes');
    }
    public function editar_esta_cursando_estudios()
    {
        return view('actualizar/esta_cursando_estudios');
    }
    public function editar_esta_en_periodo_sabaticos()
    {
        return view('actualizar/esta_en_periodo_sabaticos');
    }
    public function editar_estado_civiles()
    {
        return view('actualizar/estado_civiles');
    }
    public function editar_estados_procesos()
    {
        return view('actualizar/estados_procesos');
    }
    public function editar_estudiante_ocupacions()
    {
        return view('actualizar/estudiante_ocupacions');
    }
    public function editar_estudiante_titulados()
    {
        return view('actualizar/estudiante_titulados');
    }
    public function editar_estudiante_titulo_tercer_nivels()
    {
        return view('actualizar/estudiante_titulo_tercer_nivels');
    }
    public function editar_estudiantes()
    {
        return view('actualizar/estudiantes');
    }
    public function editar_estudinate_trabajos()
    {
        return view('actualizar/estudinate_trabajos');
    }
    public function editar_etnias()
    {
        return view('actualizar/etnias');
    }
    public function editar_financiamiento_beca_docentes()
    {
        return view('actualizar/financiamiento_beca_docentes');
    }
    public function editar_financiamiento_becas()
    {
        return view('actualizar/financiamiento_becas');
    }
    public function editar_forma_calificacions()
    {
        return view('actualizar/forma_calificacions');
    }
    public function editar_formacion_artesanos()
    {
        return view('actualizar/formacion_artesanos');
    }
    public function editar_generos()
    {
        return view('actualizar/generos');
    }
    public function editar_grado_ocupacionals()
    {
        return view('actualizar/grado_ocupacionals');
    }
    public function editar_ha_perdido_la_gratuidads()
    {
        return view('actualizar/ha_perdido_la_gratuidads');
    }
    public function editar_ha_realizado_practica_preprofesionals()
    {
        return view('actualizar/ha_realizado_practica_preprofesionals');
    }
    public function editar_ha_repetido_almenos_una_materias()
    {
        return view('actualizar/ha_repetido_almenos_una_materias');
    }
    public function editar_horario_docentes()
    {
        return view('actualizar/horario_docentes');
    }
    public function editar_horas()
    {
        return view('actualizar/horas');
    }
    public function editar_idioma_ancestrals()
    {
        return view('actualizar/idioma_ancestrals');
    }
    public function editar_ingreso_con_concurso_meritos()
    {
        return view('actualizar/ingreso_con_concurso_meritos');
    }
    public function editar_ingresos_estudiantes()
    {
        return view('actualizar/ingresos_estudiantes');
    }
    public function editar_institucion_donde_cursa_estudios()
    {
        return view('actualizar/institucion_donde_cursa_estudios');
    }
    public function editar_institutos()
    {
        return view('actualizar/institutos');
    }
    public function editar_jornada_academicas()
    {
        return view('actualizar/jornada_academicas');
    }
    public function editar_malla_curriculars()
    {
        return view('actualizar/malla_curriculars');
    }
    public function editar_matriculas()
    {
        return view('actualizar/matriculas');
    }
    public function editar_modalidad_carreras()
    {
        return view('actualizar/modalidad_carreras');
    }
    public function editar_nivel_academicos()
    {
        return view('actualizar/nivel_academicos');
    }
    public function editar_nivel_formacions()
    {
        return view('actualizar/nivel_formacions');
    }
    public function editar_notas()
    {
        return view('actualizar/notas');
    }
    public function editar_num_pub_revistas_cientif_indexadas()
    {
        return view('actualizar/num_pub_revistas_cientif_indexadas');
    }
    public function editar_numeracion_documentos()
    {
        return view('actualizar/numeracion_documentos');
    }
    public function editar_numero_matriculas()
    {
        return view('actualizar/numero_matriculas');
    }
    public function editar_obra_publicacions()
    {
        return view('actualizar/obra_publicacions');
    }
    public function editar_pais()
    {
        return view('actualizar/pais');
    }
    public function editar_paralelos()
    {
        return view('actualizar/paralelos');
    }
    public function editar_parentescos()
    {
        return view('actualizar/parentescos');
    }
    public function editar_parroquias()
    {
        return view('actualizar/parroquias');
    }
    public function editar_participa_proyecto_vinculacion_sociedads()
    {
        return view('actualizar/participa_proyecto_vinculacion_sociedads');
    }
    public function editar_periodo_academicos()
    {
        return view('actualizar/periodo_academicos');
    }
    public function editar_personal_administrativos()
    {
        return view('actualizar/personal_administrativos');
    }
    public function editar_personals()
    {
        return view('actualizar/personals');
    }
    public function editar_posee_becas()
    {
        return view('actualizar/posee_becas');
    }
    public function editar_practica_estudiantes()
    {
        return view('actualizar/practica_estudiantes');
    }
    public function editar_practica_preprofecionales()
    {
        return view('actualizar/practica_preprofecionales');
    }
    public function editar_primera_razon_becas()
    {
        return view('actualizar/primera_razon_becas');
    }
    public function editar_provincias()
    {
        return view('actualizar/provincias');
    }
    public function editar_proyectos_investigacions()
    {
        return view('actualizar/proyectos_investigacions');
    }
    public function editar_proyectos_macros()
    {
        return view('actualizar/proyectos_macros');
    }
    public function editar_pub_revista_cienin_indexadas()
    {
        return view('actualizar/pub_revista_cienin_indexadas');
    }
    public function editar_pueblo_nacionalidads()
    {
        return view('actualizar/pueblo_nacionalidads');
    }
    public function editar_quinta_razon_becas()
    {
        return view('actualizar/quinta_razon_becas');
    }
    public function editar_recibe_pension_diferenciadas()
    {
        return view('actualizar/recibe_pension_diferenciadas');
    }
    public function editar_relacion_laboral_ies()
    {
        return view('actualizar/relacion_laboral_ies');
    }
    public function editar_residencia_estudiantes()
    {
        return view('actualizar/residencia_estudiantes');
    }
    public function editar_sector_economicos()
    {
        return view('actualizar/sector_economicos');
    }
    public function editar_segunda_razon_becas()
    {
        return view('actualizar/segunda_razon_becas');
    }
    public function editar_segunda_tercera_matriculas()
    {
        return view('actualizar/segunda_tercera_matriculas');
    }
    public function editar_sete_condicion_laborals()
    {
        return view('actualizar/sete_condicion_laborals');
    }
    public function editar_setec_aspirantes()
    {
        return view('actualizar/setec_aspirantes');
    }
    public function editar_setec_condicion_de_vidas()
    {
        return view('actualizar/setec_condicion_de_vidas');
    }
    public function editar_setec_encuestadors()
    {
        return view('actualizar/setec_encuestadors');
    }
    public function editar_setec_estado_ocupacionals()
    {
        return view('actualizar/setec_estado_ocupacionals');
    }
    public function editar_setec_experiencia_laborals()
    {
        return view('actualizar/setec_experiencia_laborals');
    }
    public function editar_setec_ocupacions()
    {
        return view('actualizar/setec_ocupacions');
    }
    public function editar_setec_perfils()
    {
        return view('actualizar/setec_perfils');
    }
    public function editar_setec_tipo_ocupacions()
    {
        return view('actualizar/setec_tipo_ocupacions');
    }
    public function editar_setecs()
    {
        return view('actualizar/setecs');
    }
    public function editar_sexos()
    {
        $menuprincipal = 'App\Models\AccesoDepartamento'::all();
        $departamentos = 'App\Models\Departamento'::all();
        $usuario = 0;
        $sex = 'App\Models\Sexo'::all();
        return view('actualizar/sexos', compact('sex', 'menuprincipal', 'departamentos', 'usuario'));
    }
    public function editar_sexta_razon_becas()
    {
        return view('actualizar/sexta_razon_becas');
    }
    public function editar_socioempleos()
    {
        return view('actualizar/socioempleos');
    }
    public function editar_sostenimientos()
    {
        return view('actualizar/sostenimientos');
    }
    public function editar_tercera_razon_becas()
    {
        return view('actualizar/tercera_razon_becas');
    }
    public function editar_tiempo_dedicacions()
    {
        return view('actualizar/tiempo_dedicacions');
    }
    public function editar_tipo_alcance_proyecto_vinculacions()
    {
        return view('actualizar/tipo_alcance_proyecto_vinculacions');
    }
    public function editar_tipo_asistencia_estudiantes()
    {
        return view('actualizar/tipo_asistencia_estudiantes');
    }
    public function editar_tipo_becas()
    {
        return view('actualizar/tipo_becas');
    }
    public function editar_tipo_carreras()
    {
        return view('actualizar/tipo_carreras');
    }
    public function editar_tipo_colegios()
    {
        return view('actualizar/tipo_colegios');
    }
    public function editar_tipo_discapacidads()
    {
        return view('actualizar/tipo_discapacidads');
    }
    public function editar_tipo_enfermedad_catastroficas()
    {
        return view('actualizar/tipo_enfermedad_catastroficas');
    }
    public function editar_tipo_matriculas()
    {
        return view('actualizar/tipo_matriculas');
    }
    public function editar_tipo_retiro_estudiantes()
    {
        return view('actualizar/tipo_retiro_estudiantes');
    }
    public function editar_tipo_usuarios()
    {
        return view('actualizar/tipo_usuarios');
    }
    public function editar_tipos_bacilleratos()
    {
        return view('actualizar/tipos_bacilleratos');
    }
    public function editar_tipos_documentos()
    {
        return view('actualizar/tipos_documentos');
    }
    public function editar_tipos_sangres()
    {
        return view('actualizar/tipos_sangres');
    }
    public function editar_titulo_tercer_nivels()
    {
        return view('actualizar/titulo_tercer_nivels');
    }
    public function editar_titulos_profecionales()
    {
        return view('actualizar/titulos_profecionales');
    }
    public function editar_vinculacion_sociedads()
    {
        return view('actualizar/vinculacion_sociedads');
    }
}
