<?php
class ControladorFormularios{
    /*--=====================================
	registro
	======================================--*/
    public function ctrRegistro(){

        if(isset($_POST["registroNombre"])){

            echo $_POST["registroNombre"];

        }

    }

}
?>