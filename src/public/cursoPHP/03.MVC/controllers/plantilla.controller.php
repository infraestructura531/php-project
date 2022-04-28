<?php

class ControladorPlantlla
{
    /*--=====================================
	llamada a la plantilla
	======================================--*/
    public function ctrTraerPlantilla(){

        #include() se utiliza para invocar elarchivo que contiene codigo html-php.
        include "views/plantilla.php";
    }
    
}
