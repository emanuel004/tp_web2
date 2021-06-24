<?php

include_once('DAO/contactenosDao.php');


function businessGuardarMensaje($datos = array()){
    daoGuardarMensaje($datos);
}

function businessObtenerMensajes(){
    return daoObtenerMensajes();
}

function businessObtenerMensaje($id){
    return daoObtenerMensajes();   

}

function businessModificarMensaje($datos = array(), $id){
    daoModificarMensaje($datos, $id);
}

function businessBorrarMensaje($id){
    daoBorrarMensaje($id);
}

?>