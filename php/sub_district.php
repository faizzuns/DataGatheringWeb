<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/17/2018
 * Time: 12:52 PM
 */
$iddistrict = $_GET['district'];
require 'connect.php';
$sql = "SELECT * FROM `sub_district` WHERE `sub_district`.id_district = $iddistrict";
$result = $conn->query($sql);
$list = array();
while ($row = $result->fetch_assoc()) {
    $item = array("id"=>$row['id'], "name"=>$row['name']);
    array_push($list, $item);
}
$conn->close();
echo json_encode($list);
?>