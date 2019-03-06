<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['principal'] = 'Welcome/index';
$route['comercializacion'] = 'Welcome/comercializacion';
$route['consultas'] = 'welcome/consultas';
$route['informacionCont'] = 'consultas_controller/informacionCont';
$route['productos'] = 'welcome/productos';
$route['quienesSomos'] = 'welcome/quienesSomos';
$route['terminos'] = 'welcome/terminos';

$route['login'] = 'usuario_controller/login';
$route['registro'] = 'cliente_controller/registro';
$route['cerrar_sesion'] = 'usuario_controller/cerrar_sesion';

$route['gestionar_productos'] = 'producto_controller/gestionar_productos';
$route['agregar_producto'] = 'producto_controller/agregar_producto';
$route['ver_productos'] = 'producto_controller/ver_productos';
$route['ver_productos/([0-9]+)'] = 'producto_controller/ver_productos';
$route['editar_producto/([0-9]+)'] = 'producto_controller/editar_producto/$1';
$route['activar_producto/([0-9]+)'] = 'producto_controller/activar_producto/$1';
$route['eliminar_producto/([0-9]+)'] = 'producto_controller/eliminar_producto/$1';

$route['registrar_producto'] = 'producto_controller/registrar_producto';
$route['validar_mensaje'] = 'consultas_controller/validar_mensaje';
$route['mensajes'] = 'consultas_controller/listar_mensajes';
$route['mensajes/([0-9]+)'] = 'consultas_controller/listar_mensajes';
$route['mensajes/nombre'] = 'consultas_controller/listar_mensajes_nombre';
$route['ver_usuarios'] = 'usuario_controller/ver_usuarios';
$route['ver_usuarios/([0-9]+)'] = 'usuario_controller/ver_usuarios';

$route['editar_usuario/([0-9]+)'] = 'usuario_controller/editar_usuario/$1';
$route['activar_usuario/([0-9]+)'] = 'usuario_controller/activar_usuario/$1';
$route['eliminar_usuario/([0-9]+)'] = 'usuario_controller/eliminar_usuario/$1';


$route['modificar_stock/([0-9]+)/([0-9]+)'] = 'producto_controller/modificar_stock/$1/$2';
$route['cantidad/([0-9]+)'] = 'producto_controller/cantidad_producto/$1';

$route['efecto/([0-9]+)'] = 'producto_controller/index/$1';
$route['efecto/([0-9]+)/([0-9]+)'] = 'producto_controller/index/$1';
$route['agregar-carrito/([0-9]+)'] = 'carrito_controller/add/$1';
$route['carrito'] = 'carrito_controller';
$route['carrito/eliminar/([a-z0-9]+)'] = 'carrito_controller/remove/$1';
$route['carrito/eliminar'] = 'carrito_controller/remove';
$route['carrito/compra'] = 'carrito_controller/muestra_compra';
$route['carrito/confirma_compra'] = 'carrito_controller/guarda_compra';
$route['carrito/actualizar/([a-z0-9]+)/([0-9]+)'] = 'carrito_controller/actualizar_carrito/$1/$2';

$route['factura/([0-9]+)'] = 'venta_controller/mostrar_factura/$1';
$route['pedidos/fecha'] = 'producto_controller/pedidos_fecha';
$route['ver_usuarios/nombre'] = 'usuario_controller/ver_usuarios_nombre';
$route['ver_productos/nombre'] = 'producto_controller/ver_productos_nombre';
$route['gestionar_productos/nombre'] = 'producto_controller/gestionar_productos_nombre';
$route['pedidos'] = 'producto_controller/pedidos';
$route['pedidos/([0-9]+)'] = 'producto_controller/pedidos';
