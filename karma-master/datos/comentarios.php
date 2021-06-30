<?php
$comentarios = array( 
    "1" => array(
            "id" => 1,	    
            "Nombre" => "Blake Ruiz",
            "Email" => "Jorge@gmial.com",
            "IdProducto" => "mra2",
            "Puntuacion" => "5",
            "Comentario" => "El Producto Llegó Rápido a provincia y cumplió todas mis espectativas. Gracias."      
            ),
    "2" => array(
            "id" => 2,	    
            "Nombre" => "Jorge Perez",
            "Email" => "Jorge@gmial.com",
            "IdProducto" => "hra1" ,
            "Puntuación" => "5",
            "Comentario" => "Si vas a usar este calzado para lifestyle pide tu talla normal. 
            Si es para correr pide media talla arriba para tener suficiente espacio en el toebox." 
            ),
    "3" => array(
            "id" => 3,	    
            "Nombre" => "Carlos Martinez",
            "Email" => "Carlos@gmial.com",
            "IdProducto" => "hra3" ,
            "Puntuación" => "4",
            "Comentario" => "Es un calzado ultra cómodo, no solo para correr sino para andar de diario." 
            ),

);
echo json_encode($comentarios);
?>