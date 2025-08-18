<?php
$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare("INSERT INTO videos (vid_id, title, duration, path) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $data['vid_id'], $data['vid_title'], $data['duration'], $data['path']);
$stmt->execute();
echo json_encode(["status" => "video_added"]);
