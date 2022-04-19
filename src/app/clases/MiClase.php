<?php
class MiClase
{
    public $var = "mia ramos";
    function __construct()
    {
    }
    function DisplayVar($parametro1, $parametro2)
    {
        $var = $parametro2;
        echo $var . ", " . $parametro1;
    }
}
