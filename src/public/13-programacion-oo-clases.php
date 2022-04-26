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
<p>al inicio del archivo cargamos las clases por medio de la funcion php spl_autoload_register el cual hara el include de todas las clases que contiene la carpeta seleccionada</p>
<p>
    <code >
        <pre class='codigo'>

        function mi_autocargador($clase)
        {
            include '../app/clases/' . $clase . '.php';
        }

        spl_autoload_register('mi_autocargador');
        </pre>
    </code>
<!-- <p>para declarar una clase en php usamos la palabra reservada 'class' y el nombre que le daremos a la clase</p> -->
<p>gracias a esto es que podemos instanciar las clases: clase1(), clase2() y MiClase()</p>
<p>
    <code>
        <pre class="codigo">

        $obj = new clase1();
        $obj2 = new clase2();
        $obj3 = new MiClase();
        </pre>
    </code>
</p>
<p>clase1() y clase2() en el constructor tienen un "echo", el resultado de instanciarlas es:</p>
<?php
$obj = new clase1();
$obj2 = new clase2();
$obj3 = new MiClase();
?>
<p>con la variable $obj3 donde guardamos la instancia de MiClase() podemos llamar a nuestra funcion DisplayVar la cual recibe dos parametros</p>
<p>
    <code>
        <pre class="codigo">

        $obj3->DisplayVar('2022', 'mia Ramos');
        </pre>
    </code>
</p>
<p>lo cual nos da como resulado:</p>
<?php
$obj3->DisplayVar('2022', 'mia Ramos');
?>
<?php
include_once('../app/templates/boton_back.php');
include_once "../app/templates/footer.php";
?>