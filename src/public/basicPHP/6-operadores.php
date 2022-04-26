<?php
//header("location:error.php");
include_once $_SERVER['DOCUMENT_ROOT'].'/dirs.php';
$titulo = "operadores.php";
include_once TEMPLATES_PATH."header.php";
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
include_once(TEMPLATES_PATH.'boton_back.php');
include_once TEMPLATES_PATH."footer.php";
?>