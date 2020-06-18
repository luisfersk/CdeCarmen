<?php

$goSeed = "../../";

require_once $goSeed.'service/usuarioService.php';
require_once $goSeed.'controller/usuarioController.php';
require_once $goSeed.'models/usuario.php';
require_once $goSeed.'php/database.php';

$conn = connect();

$usuarioService = new UsuarioService($conn);

$usuario = new Usuario();

$correo = $_POST['username'];
$password = sha1(md5($_POST['password']));

$usuario = $usuarioService->login($correo,$password);

