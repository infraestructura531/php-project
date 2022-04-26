<?php
//header("location:error.php");
$titulo = "funciones-en-php.php";
include_once "../app/templates/header.php";
?>

<p>
    <code>
        <pre>
        $var = true;
        funcion3();
        funcion1();

        if($var==true){
        function funcion2(){
            echo "existo solo si var == true";
            }
        }

        funcion2();
        funcion4();

        function funcion1(){
            echo "estoy definida desde que comienza el programa";
        }

        function funcion3(){
            function funcion4(){
                echo "no existo hasta que se llame a funcion3";
            };
        };
        </pre>
    </code>
</p>
<H4>RESULTADO</H4>
<?php

$var = true;
funcion3();
funcion1();


if($var==true){
    function funcion2(){
        echo "<br>existo solo si var == true";
    }
}
funcion2();

funcion4();
function funcion1(){
    echo "estoy definida desde que comienza el programa";
}

function funcion3(){
    function funcion4(){
        echo "<br>no existo hasta que se llame a funcion3";
    };
};

?>

<?php
include_once('../app/templates/boton_back.php');
include_once "../app/templates/footer.php";
?>