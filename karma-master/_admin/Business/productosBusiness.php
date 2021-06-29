<?php
include_once('DAO/productosDao.php');
include_once('../helpers/image.php');

function businessGuardarProducto($datos = array()){

    $id = daoGuardarProducto($datos);
    if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'],$id);
    } 


}

function businessObtenerProductos(){
 
    return daoObtenerProductos();

}

function businessObtenerProducto($id){
    return daoObtenerProducto($id);

}

function businessModificarProducto($datos = array(), $id){
   
    daoModificarProducto($datos,$id);

    if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'],$id);
    }

//die();   
}

function saveImage($datos,$id){
    
        $ruta= '../images/'.$id.'/';
        if(!is_dir($ruta)){
            mkdir($ruta,0777,true);
        }
        $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'100','alto'=>'200'),
        1 => array('nombre'=>'small','ancho'=>'50','alto'=>'100'));
        redimensionar($ruta,$datos['name'],$datos['tmp_name'],0,$tamanhos);
        //move_uploaded_file($_FILES['imagen']['tmp_name'],'../images/'.$id.'/'.$_FILES['imagen']['name']);
       /* if(file_exists('../images/'.$id.'/'.$datos['old_imagen'])){
            unlink('../images/'.$id.'/'.$datos['old_imagen']);

        }*/ 
}
function businessBorrarProducto($ID){
    daoBorrarProducto($ID);

     
}