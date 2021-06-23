<?php
 

function daoObtenerMarcas(){
    if(file_exists('../datos/marcas.json')){ 
        $data = json_decode(file_get_contents('../datos/marcas.json'),TRUE);	
    }else{
        $data = array();
    }

    return $data;

}
 