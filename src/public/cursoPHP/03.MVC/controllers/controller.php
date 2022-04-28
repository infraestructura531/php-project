<?php
class MvcController{

    #LLAMADA A LA PLANTILLA
    #------------------------------

    public function plantilla(){
        include "views/template.php";
    }

    #INTERACCION DEL USUARIO
    #-------------------------------
    public function enlacesPaginasController(){

        if(isset($_GET['action'])){

            $enlacesController = $_GET['action'];

        }
        else{
            $enlacesController = "index";
        }

        

        $enlacesPaginasModel = new EnlacesPaginas();
        $respuesta = $enlacesPaginasModel->enlacesPaginasModel($enlacesController);

        include $respuesta;
    }
}
?>