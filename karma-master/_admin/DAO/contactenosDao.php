<?php
function daoGuardarMensaje($datos = array()){
    $mensajes = daoObtenerMensajes(); 
    $id = date('Ymdhisu');
    $mensajes[$id] = array(
        'id' => $id,
        'Nombre' => $datos['Nombre'],
        'Email' => $datos['Email'],
        'Telefono'  => $datos["Telefono"],
        'Reclamo' => $datos['Reclamo'],
        'Comentario' => $datos['Comentario']
    ); 
    $fp = fopen('datos/mensajes.json','w');
    fwrite($fp, json_encode($mensajes));
    fclose($fp);

}

function daoObtenerMensajes(){
    
    if(file_exists('datos/mensajes.json')){ 
        $mensajes = json_decode(file_get_contents('datos/mensajes.json'),TRUE);	
    }else{
        $mensajes = array();
    }
    return $mensajes;

}

function daoObtenerMensaje($id){
    $mensajes = daoObtenerMensajes();  
    return $mensajes[$id];

}

function daoModificarMensaje($datos = array(), $id){
    $mensajes = daoObtenerComentarios(); 
    $mensajes[$id] = array(
        'id' => $id,
        'Nombre' => $datos['Nombre'],
        'Email' => $datos['Email'],
        'Telefono'  => $datos["Telefono"],
        'Reclamo' => $datos['Reclamo'],
        'Comentario' => $datos['Comentario']
    ); 
    $fp = fopen('datos/mensajes.json','w');
    fwrite($fp, json_encode($mensajes));
    fclose($fp);
}

function daoBorrarComentario($id){
    $mensajes = daoObtenerMensajes(); 
    unset($mensajes[$id]);
    $fp = fopen('datos/mensajes.json','w');
    fwrite($fp, json_encode($mensajes));
    fclose($fp);
}

?>
