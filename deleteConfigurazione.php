<?php

header('Content-Type: application/json');

list($title) = [
    $_POST['title']
];

if (!$title) {

    echo json_encode(-2);
    return;
}

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "hoteldb";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_errno) {

    echo json_encode(-1);
    return;
}

$sql = "

      DELETE FROM configurazioni WHERE title=?

  ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$title);

$res = $stmt->execute();
echo json_encode($res);
