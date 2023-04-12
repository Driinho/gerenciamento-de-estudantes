<?php

    header("Access-Control-Allow-Origin: *");
    // header("Content-type: application/json");

    require __DIR__ . '/../vendor/autoload.php';

    use app\controllers\StudentController;

    $obj = new StudentController();

    $data = $obj->monitor();
    print_r($data);