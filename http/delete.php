<?php 
header('Content-Type: application/json');

$arr = [
    [
        "id" => 1,
        "name" => "Pablo"
    ],
    [
        "id" => 2,
        "name" => "Pedro"
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    extract($_GET);
    
    if (isset($id)) {
        $index = get($id, $arr);

        if($index >= 0){
            unset($arr[$index]);
            $arr = array_values($arr);

            http_response_code(200);
            echo json_encode([
                "message" => "Datos eliminados en servidor",
                "data" => json_encode($arr)
            ]);
        }else{
            http_response_code(404);
            echo json_encode(['error' => 'No existe el identificador '.$id]);
        }

    }else{
        http_response_code(400);
        echo json_encode(['error' => 'información erronea']);
    }
}else {
    http_response_code(405);
    echo json_encode(['error' => 'La solicitud no es de tipo DELETE']);
}



function get(int $id, array $arr){
    for($i=0; $i<count($arr); $i++) {
        if ($arr[$i]['id'] === $id) {
            return $i;
        }
    }

    return -1;
}