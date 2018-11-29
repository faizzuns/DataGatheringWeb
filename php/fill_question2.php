<?php

require 'connect.php';

$cook = $_COOKIE['fill'];

$sql = "SELECT * FROM `question` WHERE `id_fill` = $cook AND `number` > 4";
$result = $conn->query($sql);
$check = false;
while ($row = $result->fetch_assoc()) $check = true;

if (!$check) {
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 5, $option1)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 6, $option2)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 7, $option3)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 8, $option4)";
    $conn->query($sql);
}

$conn->close();

?>