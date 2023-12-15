<?php
require_once 'controller/AuthController.php';
require_once 'controller/Controller.php';
require_once 'controller/IndexController.php';
require_once 'controller/PerfilController.php';
require_once 'controller/UserController.php';
require_once 'controller/CarritoController.php';




// require_once 'autoload.php';
require_once 'Router.php';

session_start();

$route = new Router();
$route->get('/',[IndexController::class,'index'])

      ->get('/login', [AuthController::class, 'login'])
      ->get('/register', [AuthController::class, 'register'])
      ->post('/doRegister', [AuthController::class, 'doRegister'])
      ->post('/doLogin', [AuthController::class, 'doLogin'])
      ->get('/home', [AuthController::class, 'home'])
      ->get('/dashboard', [AuthController::class, 'dashboard'])
      ->get('/logout', [AuthController::class, 'logout'])

      ->get('/edit-perfil', [PerfilController::class, 'edit'])
      ->post('/update-perfil', [PerfilController::class, 'update'])
      ->get('/destroy-perfil', [PerfilController::class, 'destroy'])

      ->get('/index-user', [UserController::class, 'index'])
      ->get('/create-user', [UserController::class, 'create'])
      ->post('/store-user', [UserController::class, 'save'])
      ->get('/edit-user', [UserController::class, 'edit'])
      ->post('/update-user', [UserController::class, 'update'])
      ->get('/destroy-user', [UserController::class, 'destroy'])

      ->get('/carrito', [CarritoController::class,'agregarCarrito']);

$route->resolver_ruta($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
?>