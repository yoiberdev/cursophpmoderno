<?php 
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo file_get_contents('php://input');
    $json = file_get_contents('php://input');

    $data = json_decode($json);

    //$name = $data->name;
    //$age = $data->age;
    extract((array)$data);
   // echo $name." ".$age;

    http_response_code(201);
    echo json_encode([
        "message" => "Datos recibidos correctamente: $name"
    ]);
}else {
     http_response_code(404);
     echo json_encode(['error' => 'La solicitud no es de tipo POST']); 
}
 