<?php
require 'connect.php';
$sql = "INSERT INTO `user` (`name`, `age`, `profession`, `education`, `phone`, `location`) VALUES ('$name', '$age', '$profession', '$education', '$phone', $location)";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $sql = "INSERT INTO `fill` (`id_user`) VALUES ($last_id)";
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        setcookie("fill", $last_id, time() + 3600, "/");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        die();
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}
$conn->close();
?>