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
    $fp = fopen('../datos/mensajes.json','w');
    fwrite($fp, json_encode($mensajes));
    fclose($fp);

}

function daoObtenerMensajes(){
    if(file_exists('../datos/mensajes.json')){ 
        $mensajes = json_decode(file_get_contents('../datos/mensajes.json'),TRUE);	
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
    $mensajes = daoObtenerMensajes(); 
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
    $fp = fopen('../datos/mensajes.json','w');
    fwrite($fp, json_encode($mensajes));
    sendMail($datos);

    fclose($fp);
}

function daoBorrarMensaje($id){
    $mensajes = daoObtenerMensajes(); 
    unset($mensajes[$id]);
    $fp = fopen('../datos/mensajes.json','w');
    fwrite($fp, json_encode($mensajes));
    fclose($fp);
}

function sendMail($datos){
    $transport = (new Swift_SmtpTransport($GLOBALS['mail_smtp_addr'],$GLOBALS['mail_smtp_port'],'ssl'))
    ->setUsername($GLOBALS['mail_smtp_user'])
    ->setPAssword($GLOBALS['mail_smtp_pass']);

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Contacto desde el Carrito'))
        ->setFrom([$GLOBALS['mail_smtp_user']=>'Emanuel'])
        ->setTo(['emanuelzetka@davinci.com.ar'=>'Formulario de contacto de Carrito'])
        ->setBody($datos['Respuesta']);
        //->setContentType("text/html");

    var_dump($message);
    //return $mailer->send($message);
}

?>