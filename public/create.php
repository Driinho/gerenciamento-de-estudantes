<?php

    header("Content-type: application/json");

    require __DIR__ . '/../vendor/autoload.php';

    use app\controllers\StudentController;

    $obj = new StudentController();

    $json = file_get_contents('php://input');

    $dadosEnviados = json_decode($json, true);

    $data = $obj->create($dadosEnviados);
    print_r($data);

    
