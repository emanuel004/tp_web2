<?php
$producto = array( 
    "1" => array(
            "ID" => 1,	    
            "Nombre" => "Zapatillas Ultraboost 21",
            "Precio" =>"$149.99",
            "Idcategoria" =>"1",    
            "IdMarca" => 1,
            "imagen" => "hra1.jpg"	    
            ),
    "2" => array(
            "ID" => 2,	    
            "Nombre" => "Zapatillas Galaxy 5",
            "Precio" =>"$149.99",
            "Idcategoria" =>"1",	    
            "IdMarca" => 1,
            "imagen" => "hra2.jpg"	    
            ),
    "3" => array(
            "ID" => 3,	    
            "Nombre" => "Zapatillas Infinity Run",
            "Precio" =>"$149.99",
            "Idcategoria" =>"1",	    
            "IdMarca" => 2,
            "imagen" => "hrn1.jpg"	    
            ),
    "4" => array(
            "ID" => 4,	    
            "Nombre" => "Zapatillas Joyride",
            "Precio" =>"$149.99",
            "Idcategoria" =>"1",	    
            "IdMarca" => 2,
            "imagen" => "hrn1.jpg"	    
            ),
     "5" => array(
            "ID" => 5,	    
            "Nombre" => "Zapatillas Deviate Nitro",
            "Precio" =>"$149.99",
            "Idcategoria" =>"1",	    
            "IdMarca" => 3,
            "imagen" => "hrp1.jpg"	    
            ),
    "6" => array(
            "ID" => 6,	    
            "Nombre" =>"Zapatillas Calibrate Luxe" ,
            "Precio" =>"$149.99",
            "Idcategoria" =>"1",	    
            "IdMarca" => 3,
            "imagen" => "hrp2.jpg"	    
            ),
     "7" => array(
            "ID" => 7,	    
            "Nombre" => "Zapatillas Novamotion",
            "Precio" =>"$149.99",
            "Idcategoria" =>"2",	    
            "IdMarca" => 1,
            "imagen" => "hta1.jpg"	    
            ),
     "8" => array(
            "ID" => 8,	    
            "Nombre" => "Zapatillas Novamotion +",
            "Precio" =>"$149.99",
            "Idcategoria" =>"2",	    
            "IdMarca" => 1,
            "imagen" => "hta2.jpg"	    
            ),
    "9" => array(
            "ID" => 9,	    
            "Nombre" =>"Zapatillas Air Max Bella" ,
            "Precio" =>"$149.99",
            "Idcategoria" =>"2",	    
            "IdMarca" => 2,
            "imagen" => "htn1.jpg"	    
            ),
    "10" => array(
            "ID" => 10,	    
            "Nombre" =>"Zapatillas Zoom Gravity" ,
            "Precio" =>"$149.99",
            "Idcategoria" =>"2",	    
            "IdMarca" => 2,
            "imagen" => "htn2.jpg"	    
            ),
    "11" => array(
            "ID" => 11,	    
            "Nombre" => "Zapatillas Provoke XT Untamed Floral",
            "Precio" =>"$149.99",
            "Idcategoria" =>"2",	    
            "IdMarca" => 3,
            "imagen" => "htp1.jpg"	    
            ),
     "12" => array(
            "ID" => 12,	    
            "Nombre" => "Zapatillas Provoke XT Untamed",
            "Precio" =>"$149.99",
            "Idcategoria" =>"2",	    
            "IdMarca" => 3,
            "imagen" => "htp2.jpg"	    
            ),
    "13" => array(
            "ID" => 13,	    
            "Nombre" => "Zapatillas",
            "Precio" =>"$500",
            "Idcategoria" =>"",	    
            "IdMarca" => 1,
            "imagen" => "mra1.jpg"	    
            ),
    "14" => array(
            "ID" => 14,	    
            "Nombre" =>"Zapatillas" ,
            "Precio" =>"$3000",
            "Idcategoria" =>"",	    
            "IdMarca" => 3,
            "imagen" => "mrp1.jpg"	    
            ),
    "15" => array(
            "ID" => 15,	    
            "Nombre" => "Zapatillas",
            "Precio" =>"$5300",
            "Idcategoria" =>"",	    
            "IdMarca" => 2,
            "imagen" => "mrn1.jpg"	    
            ),
    "16" => array(
            "ID" => 16,	    
            "Nombre" => "Zapatillas",
            "Precio" =>"$10547",
            "Idcategoria" =>"",	    
            "IdMarca" => 2,
            "imagen" => "mrn2.jpg"	    
            ),
);
echo json_encode($producto);
?>