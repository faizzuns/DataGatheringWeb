<?php

require 'connect.php';

$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op3 = $_POST['op3'];
$op4 = $_POST['op4'];

$transid = $_COOKIE['trans'];

$que1 = "INSERT INTO question (number, value) VALUE (`1`,".$_POST['op1'].")";
$que2 = "INSERT INTO question (number, value) VALUE (`2`,".$_POST['op2'].")";
$que3 = "INSERT INTO question (number, value) VALUE (`3`,".$_POST['op3'].")";
$que4 = "INSERT INTO question (number, value) VALUE (`4`,".$_POST['op4'].")";

try {

    $stmt = $conn->prepare($que1);
    $stmt->execute();

    $stmt2 = $conn->prepare($que2);
    $stmt2->execute();

    $stmt3 = $conn->prepare($que3);
    $stmt3->execute();

    $stmt4 = $conn->prepare($que4);
    $stmt4->execute();

    header("Location: thank-you.php");
    die();
}
catch(PDOException $e)
{
    echo "<title> ERROR </title>Connection failed: " . $e->getMessage();
}
?>