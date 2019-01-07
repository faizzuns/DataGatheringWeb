<?php

require 'connect.php';

$cook = $_COOKIE['fill'];

$sql = "SELECT * FROM `question` WHERE `id_fill` = $cook AND `number` > 7";
$result = $conn->query($sql);
$check = false;
while ($row = $result->fetch_assoc()) $check = true;

if (!$check) {
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 8, $option1)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 9, $option2)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 10, $option3)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 11, $option4)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 12, $option5)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 13, $option6)";
    $conn->query($sql);
    $sql = "INSERT INTO `question` (`id_fill`, `number`, `value`) VALUES ($cook, 14, $option7)";
    $conn->query($sql);
}

$conn->close();

?>