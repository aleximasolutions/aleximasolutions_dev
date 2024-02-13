<?php
session_start();
header('Content-Type: application/json');
$data = array();
include '../../func.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!verifyCSRFToken($_POST["csrf"])) {
      $data = [
        'status' => 'error',
        'message' => 'csrf error'
      ];
      echo json_encode($data);
      exit;
    }
    $mistakes = validate($_POST["name"], $_POST["phone"], $_POST["email"]);
    if ($mistakes['name'] == "" && $mistakes['phone'] == "" && $mistakes['email'] == "") {
      $file = '../../clients.json';
      $data = array(
        "name" => $_POST["name"],
        "phone" => $_POST["phone"],
        "email" => $_POST["email"],
        "created_at" => date("d-m-y H:i")
      );
      $currentData = file_exists($file) ? json_decode(file_get_contents($file), true) : array();
      $currentData[] = $data;
      file_put_contents($file, json_encode($currentData, JSON_PRETTY_PRINT));
      $data = [
        "status" => 'success',
        "message" => 'Thank you! Your form was successfully'
      ]; 
      echo json_encode($data);
      exit;
    } else {
        $data = [
          "status" => 'errors',
          'message' => $mistakes
        ];
        echo json_encode($data);
      exit;
    }
}
