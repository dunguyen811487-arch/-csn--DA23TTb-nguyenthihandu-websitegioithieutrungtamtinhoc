<?php
$file = "../data/center.json";
$data = json_decode(file_get_contents($file), true);

$action = $_POST['action'];

if ($action == "get") {
    echo json_encode($data);
}

if ($action == "add") {
    $data[] = $_POST['item'];
}

if ($action == "update") {
    $data[$_POST['index']] = $_POST['item'];
}

if ($action == "delete") {
    array_splice($data, $_POST['index'], 1);
}

file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));