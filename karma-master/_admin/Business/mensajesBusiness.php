<?php

include_once('DAO/mensajesDao.php');


function businessGuardarMensaje($datos = array()){
    daoGuardarMensaje($datos);
}

function businessObtenerMensajes(){
    return daoObtenerMensajes();
}

function businessObtenerMensaje($id){
    return daoObtenerMensaje($id);   

}

function businessModificarMensaje($datos = array(), $id){
    daoModificarMensaje($datos, $id);
}

function businessBorrarMensaje($id){
    daoBorrarMensaje($id);
}

?>