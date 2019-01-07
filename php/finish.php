<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/26/2018
 * Time: 11:33 AM
 */

if (!isset($_COOKIE['fill']) || !isset($_POST['op1'])) {
    die();
}

require 'connect.php';
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$sql = "UPDATE `fill` SET `fill`.dbrief1 = $op1, `fill`.dbrief2 = $op2 WHERE `fill`.id = " . $_COOKIE['fill'];
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}
$conn->close();
setcookie("fill", 0, time() - 3600, "/");
header('Location: ../pages/home.php');
die();

?>