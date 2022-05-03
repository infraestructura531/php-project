<?php

require_once "conexion.php";

class ModeloFormularios{

    /*--=====================================
	registro
	======================================--*/

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( nombre, email, password) VALUES 
        (:nombre, :email, :password)");
        #bindParam() Vincula una variable de PHP a un parametro de sustitucion con nombre 
        #o de signo de interrrogacion correspondiente de la sentenca SQL que fue usada para preparar la sentencia.
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        unset($stmt);
        //print_r($stmt);
        
    }
    /*--=====================================
	seleccionar sregistros
	======================================--*/

    static public function mdlSeleccionarRegistros($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();
        return $stmt->fetchAll();

        unset($stmt);

    }
}

?>