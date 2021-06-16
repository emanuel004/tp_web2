<?php
$categoria = array( 
    "1" => array(
            "Id" => 1,
            "nombre" => "Running",
            ),
    "2" => array(
            "Id" => 2,
            "nombre" => "Training",
            )
);

echo json_encode($categoria);
?>