<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel == "servicios" ||
        $enlacesModel == "nosotros" ||
        $enlacesModel == "contacto"){

            $module = "views/modules/".$enlacesModel.".php";
        }
        else if($enlacesModel == "index"){
            $module = "views/modules/inicio.php";
        }
        else{
            $module = "views/modules/inicio.php"; 
        }

        return $module;
    }

}

?>