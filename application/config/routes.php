<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// ------------------------------------------------------------
// $route['default_controller'] = 'admin/index';
// $route['principal'] = 'Welcome/index';
$route['prueba'] = 'Probar/index';


// --------------------------------------------------------------------------------------
// Rutas destinadas al frontend
$route['welcome'] = 'invitado/Welcome/index';
$route['obra'] = 'invitado/ObraSocial/index';
$route['quienesSomos'] = 'invitado/Quienessomos/index';
$route['contacto'] = 'invitado/Contacto/index';
$route['mensaje'] = 'invitado/mensajePaciente/index';


// login de usuario
$route['IniciarSesion'] ='invitado/IniciarSesion/index';
$route['registrado'] = 'login/Auth/index';
$route['auth'] = 'login/Auth/login';
$route['cerrar'] = 'login/Auth/cerrar';
$route['Login'] = 'invitado/loginUsuario/index';

// Registro de pacientes
// $route['registroPaciente'] = 'invitado/RegistroPaciente/index';
// $route['verificarRegistro'] = 'invitado/RegistroPaciente/registrarUsuario';
$route['altaPaciente'] = 'invitado/Alta_paciente/index';
$route['registroPaciente'] = 'invitado/Alta_paciente/registrarUsuario';

// Rutas destindas al usuario registrado Medico y secretaria // Paneles Principal 
$route['admin'] = 'registrado/Administrador/index';
$route['adminSec'] = 'registrado/AdministradorSEC/index';
$route['lista'] = 'Administrador/ListaPacientes/index';
$route['listaSecretaria'] = 'Administrador/ListaSecretaria/index';
$route['listaSecretariaInactivos'] = 'Administrador/ListaSecretaria/index2';
$route['AgregarSecretaria'] = 'Administrador/Secretaria/agregarSecretaria';
$route['view'] = 'Administrador/Secretaria/view';
$route['delete'] = 'Administrador/Secretaria/delete';
$route['listaTurnos'] = 'Administrador/ListaTurnos/index';
$route['altaSecretaria'] = 'Administrador/Secretaria/altaSecretaria';






// Rutas usuario Paciente

// $route['paciente'] = 'registrado/Paciente/index';
// $route['solicitarTurno'] = 'registrado/Turno/index';
$route['Turno'] = 'registrado/Turno/index';
$route['Turno'] = 'registrado/Alta_turno/index';
$route['horas'] = 'registrado/Alta_turno/buscarHoras';
$route['confirmar'] = 'registrado/CI_confirmarturno/confirmarTurno';
$route['guardar_turno'] = 'registrado/CI_confirmarturno/resgistrarTurno';
$route['mis_turno'] = 'registrado/Turnos_paciente/index';
$route['turnoCancelado'] = 'registrado/Turnos_paciente/cancelarTurno';
$route['turnoAcancelar'] = 'registrado/Turnos_paciente/delete';

$route['confirmar'] = 'registrado/CI_confirmarturno/confirmarTurno_modificar';
$route['modificarPaciente'] = 'registrado/Modificar_datosPacientes/edit';



// reportes 
$route['reporte_paciente'] = 'reportes/reporte_paciente/index';
$route['reporte_turno'] = 'reportes/reporte_turno/index';
$route['reporte_grafico'] = 'reportes/reporte_grafico/index';
$route['reporte_barras'] = 'reportes/reporte_grafico/getData';








$route['alta_Turno'] = 'registrado/Alta_turno/registrarTurno';
$route['perfil_turno'] = 'registrado/Turno/perfilPaciente';
$route['horas_disponibles'] = 'registrado/Turno/fechasDisponibles';




// Rutas Turno

// $route['guardarTurno'] = 'registrado/Alta_turno/registrarTurno';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['ejemplo'] = 'RegistroPacientes/index';
// $route['registro'] = 'registroPacientes/index';


// agregar las rutas nombre / controlador/metodo 