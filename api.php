<?php
header("Content-Type:application/json");

$data=(object) [];
$data->nombre =(string) "Andres Jair Soto Rodriguez";
$data->edad =(int) 34;
$data->altura =(float)1.85;
$data->estudiante =(bool)true;
$data->pasatiempos= (array)[
    (string)"jugar footbal",
    (string)"ver peliculas",
    (string)"Compartir con mi familia"
];
$data->informacion=(array)[
    (object)[
        "Nombre"=>(string) "Perseo",
        "Especie"=>(string) "Canino"
    ],
    (object)[
        "Nombre"=>(string) "Minino",
        "Especie"=>(string)"Gato",
        "Raza"=>(bool) true
    ],
    (object)[
        "Nombre"=>(string) "Pepe",
        "Especie"=>(string)"Raton"
    ],
];
$codificar=json_encode($data, JSON_PRETTY_PRINT);
$file=fopen("datos.json","w+");
fwrite($file,$codificar);
fclose($file);

$datos=file_get_contents("datos.json");
echo $datos;
?>