<?php
//header("location:error.php");
$titulo = "arreglos.php";
include_once "../app/templates/header.php";
?>
<p>
   <code>
      <pre class="codigo">
   -no es necesario definir el tipo de datos que almacenan
   -tampoco es necesario definir el tamaño del arreglo al definirlo
   -los indices pueden ser numericos o alfanumericos

   -podemos declararlo vacio.  

         $arreglo = array();

   -podemos declararlo con valores.

         $arreglo = array(5,5,10,21,"mia","ramos");

   -podemos tambien indicar en que posiciones estaran los valores al crearlo.

         $arreglo2 = array(0=>100,5=>8,10=>"mia ramos");

   -al declarar con [] vacios no pisaremos valores, sino que agregaremos un valor al indice siguiente.
         $arreglo3[] = "alex";
         $arreglo3[] = "mca";

   -tambien podemos agregar valores indicando el indice entre [].

         $arreglo3[3] = 120;
         
   -o podemos agregar elementos con la funcion array_push() pasandole como argumento el arrayy el elemento a agregar.

         array_push($arreglo3, "nuevo_elemento");
      </pre>
   </code>
</p>
<?php
$arreglo = array(5, 5, 10, 21, "mia", "ramos");
$arreglo2 = array(0 => 100, 5 => 8, 10 => "mia ramos");
$arreglo3[] = "alex";
$arreglo3[] = "mca";
$arreglo3[3] = 120;
array_push($arreglo3, "nuevo_elemento");
?>
<p>
   <code>
      <pre class="codigo">
   -con print_r() podemos mostrar por pantalla el contenido de una variable para que lo entienda un humano.

         print_r($arreglo);
      </pre>
   </code>
</p>
<?php
print_r($arreglo);
?>
<p>
   <code>
      <pre class="codigo">
         print_r($arreglo2);
      </pre>
   </code>
</p>
<?php
print_r($arreglo2);
?>
<p>
   <code>
      <pre class="codigo">
         print_r($arreglo3);
      </pre>
   </code>
</p>
<?php
print_r($arreglo3);
?>
<p>
   <code>
      <pre class="codigo">
   -con la funcion sizeof() podemos ver el tamaño del arreglo.

         for ($i=0; $i < sizeof($arreglo) ; $i++) { 
            echo $arreglo[$i];
         };
      </pre>
   </code>
</p>
<?php
for ($i = 0; $i < sizeof($arreglo); $i++) {
   echo $arreglo[$i] . "<br>";
};
?>
<p>
   <code>
      <pre class="codigo">
   -podemos invertir el orden de un arreglo con la funcion array_reverse() pasandole el arreglo en cuestion como parametro.

         $arreglo3 = array_reverse($arreglo3);
         print_r($arreglo3);
      </pre>
   </code>
</p>
<?php
$arreglo3 = array_reverse($arreglo3);
print_r($arreglo3);
?>


<?php
include_once('../app/templates/boton_back.php');
include_once "../app/templates/footer.php";
?>