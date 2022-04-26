<?php
//header("location:error.php");
include_once $_SERVER['DOCUMENT_ROOT'].'/dirs.php';
$titulo = "arreglos-asociativos.php";
include_once TEMPLATES_PATH."header.php";
?>
<p>Un array asociativo es igual que cualquier array con la diferencia que los indices no seran numeros, 
    sino cadenas que especificaran las claves.</p>
<p>
    <code>
        <pre class="codigo">

        $capitales = array("Inglaterra"=>"Londres", "italia"=>"Roma", "Portugal"=>"Lisboa");
        </pre>
    </code>
</p>
<?php $capitales = array("Inglaterra"=>"Londres", "Italia"=>"Roma", "Portugal"=>"Lisboa"); ?>
<p>Para mostrar el contenido de un indice especifico usamos las " envolviendo al indice</p>
<p>
    <code>
        <pre class="codigo">
            
        echo $capitales["Portugal"];
        </pre>
    </code>
</p>
<p><b>Como resultado obtenemos:</b></p>
<?php
echo $capitales["Portugal"];
echo "<br>";
?>
<p>Pero si necesitamos el valor dentro de una cadena simplemente pasamos el indice sin las comillas:</p>
<p>
    <code>
        <pre class="codigo">

        echo "La capital de Portugal es $capitales[Portugal]";
        </pre>
    </code>
</p>
<p><b>y como resultado obtenemos:</b></p>
<?php
echo "La capital de Portugal es $capitales[Portugal]";
?>
<p>si queremos recorrer el arreglo podemos utilizar un foreach pasando el arreglo como variable</p>
<p>
    <code>
        <pre class="codigo">

        foreach ($capitales as $pais => $valor) {
            echo "La capital de $pais es $valor" . "&lt;br&gt;";
        };
        </pre>
    </code>
</p>
<p><b>Se veria asi:</b></p>
<?php
foreach ($capitales as $pais => $valor) {
    echo "La capital de <b>'$pais'</b> es <b>'$valor'</b>" . "<br>";
};
?>
<p>Podemos utilizar la funcion array_keys() pasandole nuestro arreglo "capitales" para poder ver las claves con la funcion print_r()</p>
<p>
    <code>
        <pre class="codigo">

        print_r(array_keys($capitales));
        </pre>
    </code>
</p>
<?php
print_r(array_keys($capitales));
?>

<?php
include_once(TEMPLATES_PATH.'boton_back.php');
include_once TEMPLATES_PATH."footer.php";
?>