<?php

function daoGuardarProducto($datos = array()){
     $productos = daoObtenerProductos();
     $ID = date('Ymdhisu');
     $productos[$ID] = array(
        'ID' => $ID,
        'Nombre' => $datos['Nombre'],
        'Precio' => $datos['Precio'],
        'Idcategoria' => $datos['Idcategoria'],
        'IdMarca' => $datos['IdMarca'],
        'imagen' => $datos['imagen'],
        'Descripcion' => $datos['Descripcion']
    ); 
    file_put_contents('datos/productos.json',json_encode($productos));
    return $id;

}

function daoObtenerProductos(){
    if(file_exists('datos/productos.json')){ 
        $productos = json_decode(file_get_contents('datos/productos.json'),TRUE);	
    }else{
        $productos = array();
    }

    return $productos;

}

function daoObtenerProducto($id){
    $productos = daoObtenerProductos();  
    return $productos[$id];

}

function daoModificarProducto($datos = array(), $ID){
    $productos = daoObtenerProductos();
    $productos[$ID] = array(
        'ID' => $ID,
        'Nombre' => $datos['Nombre'],
        'Precio' => $datos['Precio'],
        'Idcategoria' => $datos['Idcategoria'],
        'IdMarca' => $datos['IdMarca'],
        'imagen' => $datos['imagen'],
        'Descripcion' => $datos['Descripcion']
   ); 
   file_put_contents('datos/productos.json',json_encode($productos));
}

function daoBorrarProducto($id){
     $productos = daoObtenerProductos();
     if(isset($productos[$id])){
        unset($productos[$id]); 
        /* $fp = fopen(DIR_BASE.'datos/productos.json','w');
            fwrite($fp, json_encode($productos));
            fclose($fp);
        */
        file_put_contents('datos/productos.json',json_encode($productos));
     }
     
}