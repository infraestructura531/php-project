<?php
class ControladorFormularios{
    /*--=====================================
	registro
	======================================--*/
   static public function ctrRegistro(){

        if(isset($_POST["registroNombre"])){
            return "ok";

            /* return $_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPassword"]."<br>"; */

        }

    }

}
?>