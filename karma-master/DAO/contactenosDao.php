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
        'Comentario' => $datos['Comentario'],
        'Estado' => $datos['Estado'],
        'Respuesta' => $datos['Respuesta']
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

?>