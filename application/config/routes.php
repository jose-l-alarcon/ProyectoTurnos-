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
$route['AgregarSecretaria'] = 'Administrador/Secretaria/agregarSecretaria';
$route['view'] = 'Administrador/Secretaria/view';






// Rutas destindas al usuario Paciente

$route['paciente'] = 'registrado/Paciente/index';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['ejemplo'] = 'RegistroPacientes/index';
// $route['registro'] = 'registroPacientes/index';


// agregar las rutas nombre / controlador/metodo 