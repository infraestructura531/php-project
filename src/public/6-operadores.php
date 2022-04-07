<?php
//header("location:error.php");
$titulo = "operadores.php";
include_once "../app/templates/header.php";
?>
<?php
$a = 5+15-10;
$b= -$a;
echo $a."<br/>";
echo $b."<br>";
$c = ($b=4) + 5;
$c += 6; //es similar a $c = $c + 6
$d = "Hola ";
$d .= "mundo!";
echo $c."<br>";
echo $d."<br>";

$a= 6;
$b = &$a;
$b = 4;
echo $a."<br>";
echo $b."<br>";
echo $a==$b||$a>$b;
?>
<?php
include_once "../app/templates/footer.php";
?>