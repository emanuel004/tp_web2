<?php
include_once('DAO/productosDao.php');
include_once('../helpers/image.php');


function businessGuardarProducto($datos = array()){

    /*if(!empty($_FILES['imagen'])){
        $datos['imagen'] = $_FILES['imagen']['name'];
    }*/
    $id = daoGuardarProducto($datos);
    
    if(!empty($_FILES['imagen'])){
        /*if(!is_dir('../img/product-details/')){
            mkdir('../img/product-details/');
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'],'../img/product-details/'.$_FILES['imagen']['name']);
        if(file_exists('../img/product-details/'.$id.'/'.$datos['old_imagen'])){
            unlink('../img/product-details/'.$id.'/'.$datos['old_imagen']);
        } */
        saveImage($_FILES['imagen'], $id);
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
        /*if(!is_dir('../img/product-details/')){
            mkdir('../img/product-details/');
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'],'../img/product-details/'.$_FILES['imagen']['name']);
        if(file_exists('../img/product-details/'.$id.'/'.$datos['old_imagen'])){
            unlink('../img/product-details/'.$id.'/'.$datos['old_imagen']);
        }*/
        
        saveImage($_FILES['imagen'], $id);
    }

//die();   
}

function saveImage($datos,$id){
    
    $ruta= '../img/product-details/';
    if(!is_dir($ruta)){
        mkdir($ruta,0777,true);
    }
    $tamanhos = array(0 => array('nombre'=>'small','ancho'=>'1200','alto'=>'1200'));
    
    redimensionar($ruta,$datos['name'][0],$datos['tmp_name'][0],0,$tamanhos);
}

function businessBorrarProducto($id){
    daoBorrarProducto($id);
     
}