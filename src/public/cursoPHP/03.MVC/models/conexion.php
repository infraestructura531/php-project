<?php

Class Conexion{

    static function conectar(){

        #PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")
        $link = new PDO("mysql:host=db;dbname=cursophp", "root", "test");

        $link->exec("set names utf8");

        return $link;
    }
}

?>