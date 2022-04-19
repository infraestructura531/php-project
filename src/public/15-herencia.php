<?php
function mi_autocargador($clase)
{
    include '../app/clases/' . $clase . '.php';
}
spl_autoload_register('mi_autocargador');

$titulo = "herencia.php";
include_once "../app/templates/header.php";
?>

<?php
$obj = new Hija();
$obj->funcion1();
?>
<?php
include_once "../app/templates/footer.php";
?>