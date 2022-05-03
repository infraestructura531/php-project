<?php
class ControladorFormularios{
    /*--=====================================
	registro
	======================================--*/
   static public function ctrRegistro(){

        if(isset($_POST["registroNombre"])){
           
            $tabla = "registros";

            $datos = array("nombre" => $_POST["registroNombre"],
            "email" => $_POST["registroEmail"],
            "password" => $_POST["registroPassword"]);

            /* return $_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPassword"]."<br>"; */
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
        
            return $respuesta;
        }

    }
    /*--=====================================
	seleccionar registros
	======================================--*/
    static public function ctrSeleccionarRegistros(){
        $tabla = "registros";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla);

        return $respuesta;
    }

}
?>