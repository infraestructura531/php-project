<?php
//header("location:error.php");
$titulo = "arreglos.php";
include_once "../app/templates/header.php";
?>

<?php
$arreglo = array(5,5,10,21,"mia","ramos");
$arreglo2 = array(0=>100,5=>8,10=>"miafate");
$arreglo3[] = "alex";
$arreglo3[] = "mca";
$arreglo3[3] = 120;
array_push($arreglo3, "nuevo_elemento");
print_r($arreglo);
echo "<br>";
print_r($arreglo2);
echo "<br>";
print_r($arreglo3);
echo "<br>";
for ($i=0; $i < sizeof($arreglo) ; $i++) { 
   echo $arreglo[$i]."<br>";
};
$arreglo3 = array_reverse($arreglo3);
print_r($arreglo3);
?>


<?php
include_once "../app/templates/footer.php";
?>