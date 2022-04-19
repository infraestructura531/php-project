<?php
//header("location:error.php");
$titulo = "estructuras-de-control.php";
include_once "../app/templates/header.php";
?>


<h4>IF</h4>

<p>
    <code>
        <pre>
    $a = 26;
    if ($a % 2 == 0)
        echo "el valor de la variable es par";
    else 
        echo "el valor de la variable no es par";
        </pre>
    </code>
</p>
<?php
$a = 26;
if ($a % 2 == 0)
    echo "el valor de la variable es par";

else
    echo "el valor de la variable no es par";
?>
<br>
<h4>SWITCH</h4>
<code>
    <pre>
    $i = 4;
    switch ($i) {
        case 0:
            echo "el valor de i es 0";
            break;
        case 1:
            echo "el valor de i es 1";
            break;
        case 4:
            echo "el valor de i es 4";
            break;
        default:
            echo "se ha terminado la sentencia switch";
            break;
    }
    </pre>
</code>
<?php
$i = 4;
switch ($i) {
    case 0:
        echo "el valor de i es 0" . "<br>";
        break;
    case 1:
        echo "el valor de i es 1" . "<br>";
        break;
    case 4:
        echo "el valor de i es 4" . "<br>";
        break;
    default:
        echo "se ha terminado la sentencia switch" . "<br>";
        break;
}
?>

<?php
include_once "../app/templates/footer.php";
?>