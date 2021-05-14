<?php
$marcas = array( 
    "1" => array(
        "Id" => 1,
        "nombre" => "Adidas"
    ),
    "2" => array(
        "Id" => 2,
        "nombre" => "Nike"
    ),
    "3" => array(
        "Id" => 3,
        "nombre" => "Puma"
    )
);
echo json_encode($marcas);
?>