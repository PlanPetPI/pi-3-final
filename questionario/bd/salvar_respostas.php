<?php
include("conectar.php");

$data = json_decode(file_get_contents("php://input"), true);

$q1 = $data['q1'] ?? '';
$q2 = $data['q2'] ?? '';
$q3 = $data['q3'] ?? '';
$q4 = $data['q4'] ?? '';
$q5 = implode(", ", $data['q5'] ?? []);
$q6 = $data['q6'] ?? '';
$q7 = $data['q7'] ?? '';
$q8 = $data['q8'] ?? '';
$q9 = $data['q9'] ?? '';
$q10 = $data['q10'] ?? '';

$stmt = $conexao->prepare("INSERT INTO respostas_questionario (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);

if ($stmt->execute()) {
    echo json_encode(["status" => "ok", "msg" => "Respostas salvas com sucesso"]);
} else {
    echo json_encode(["status" => "erro", "msg" => $stmt->error]);
}
?>