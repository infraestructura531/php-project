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

    static public function mdlSeleccionarRegistros($tabla, $item, $valor){
        if($item == null && $valor == null){
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y')AS fecha FROM $tabla ORDER BY id DESC");

            $stmt->execute();
    
            return $stmt->fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y')AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC");

            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }

        

        unset($stmt);

    }
}

?>