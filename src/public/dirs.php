<?php
//incluir este rchivo con include_once $_SERVER['DOCUMENT_ROOT'].'/dirs.php'; en el index del proyecto para acceder a las rutas de clases y templates
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
define('APP_PATH', ROOT_PATH . '../app/');
define('TEMPLATES_PATH', APP_PATH.'templates/');
?>