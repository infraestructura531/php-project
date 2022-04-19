<?php
/* function __autoload($clase){
    include '../app/clases/'.$clase.'.php';
} */
function mi_autocargador($clase)
{
    include '../app/clases/' . $clase . '.php';
}
spl_autoload_register('mi_autocargador');

$titulo = "programacion-oo-clases.php";
include_once "../app/templates/header.php";
?>
<p>para declarar una clase en php usamos la palabra reservada 'class' y el nombre que le daremos a la clase</p>
<?php
$obj = new clase1();
$obj2 = new clase2();
$obj3 = new MiClase();
$obj3->DisplayVar('2022', 'mia Ramos');
?>
<?php
include_once "../app/templates/footer.php";
?>