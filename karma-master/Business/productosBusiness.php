<?php
include_once('DAO/productosDao.php');


function businessGuardarProducto($datos = array()){

    if(!empty($_FILES['imagen'])){
        $datos['imagen'] = $_FILES['imagen']['name'];
    }
    $id = daoGuardarProducto($datos);
    
    if(!empty($_FILES['imagen'])){
        if(!is_dir(DIR_BASE.'images/'.$id)){
            mkdir(DIR_BASE.'images/'.$id);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'images/'.$id.'/'.$_FILES['imagen']['name']);
        if(file_exists(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen'])){
            unlink(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen']);
        } 
    } 


}

function businessObtenerProductos(){
 
    return daoObtenerProductos();

}

function businessObtenerProducto($id){
    return daoObtenerProducto($id);

}

function businessModificarProducto($datos = array(), $id){
    if(!empty($_FILES['imagen'])){
        $datos['imagen'] = $_FILES['imagen']['name'];
    }
    daoModificarProducto($datos,$id);

    if(!empty($_FILES['imagen'])){
        if(!is_dir(DIR_BASE.'images/'.$id)){
            mkdir(DIR_BASE.'images/'.$id);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'images/'.$id.'/'.$_FILES['imagen']['name']);
        if(file_exists(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen'])){
            unlink(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen']);
        }
    }

//die();   
}

function businessBorrarProducto($id){
    daoBorrarProducto($id);
     
}