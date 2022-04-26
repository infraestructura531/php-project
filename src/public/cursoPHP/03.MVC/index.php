<?php
#link https://www.youtube.com/watch?v=vgsLhG3VDCA
#El INDEX: En el mosstraremos la salida de las vistas al usuario
# y tambien a traves de el enviaremos las distintas acciones que el usuario envie al controlador
require_once "controllers/controller.php";

$mvc = new MvcController();
$mvc ->plantilla();

?>