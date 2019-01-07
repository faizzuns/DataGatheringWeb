<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/17/2018
 * Time: 12:52 PM
 */
$idprov = $_GET['prov'];
require 'connect.php';
$sql = "SELECT * FROM `district` WHERE `district`.id_province = $idprov";
$result = $conn->query($sql);
$list = array();
while ($row = $result->fetch_assoc()) {
    $item = array("id"=>$row['id'], "name"=>$row['name']);
    array_push($list, $item);
}
$conn->close();
echo json_encode($list);

?>