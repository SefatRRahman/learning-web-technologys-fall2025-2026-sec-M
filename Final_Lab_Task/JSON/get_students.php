<?php
header('Content-Type: application/json');

$filename = 'students.json';

if (!file_exists($filename)) {
    echo json_encode(["error" => "JSON file not found."]);
    exit();
}

$jsonData = file_get_contents($filename);

$data = json_decode($jsonData, true);

if ($data === null) {
    echo json_encode(["error" => "Error decoding JSON."]);
    exit();
}

echo json_encode($data);
?>
