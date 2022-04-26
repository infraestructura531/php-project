<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/dirs.php';
$titulo = 'codigo imperativo.php';
include_once TEMPLATES_PATH . 'header.php';
#-codigo imperativo o espagueti

$automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];
$automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent Vision"];

function mostrar($automovil){
    echo "<p>Hola! soy un $automovil->marca, modelo $automovil->modelo</p>";
}
mostrar($automovil1);
mostrar($automovil2);
include_once TEMPLATES_PATH . 'boton_back.php';
include_once TEMPLATES_PATH . 'footer.php';
?>