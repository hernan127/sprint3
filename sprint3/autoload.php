<?php
require_once("helpers.php");
require_once("classes/user.php");
require_once("classes/validator.php");
require_once("classes/userfactory.php");
require_once("classes/database.php");
require_once("classes/json.php");
require_once("classes/hasher.php");
require_once("classes/authenticator.php");

$validar = new Validador();
$registro = new UserFactory();
$json = new BaseJSON("usuarios.json");
Autenticador::iniciarSession();
