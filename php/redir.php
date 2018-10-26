<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/26/2018
 * Time: 8:03 PM
 */
require 'connect.php';

if (isset($_COOKIE['trans'])) {
    $sql = "SELECT * FROM gather.`transaction` WHERE gather.`transaction`.id = " .$_COOKIE['trans'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

//    while ($row = $result->fetch_assoc()) {
//        if ($row['tendency'] == null) {
//            header('Location : ../pages/tendency.php');
//        } else if ($row['id_news'] == null) {
////            header('Location : ../pages/news.php');
//        }
//        die();
//    }
//    echo 'Not Found';
//    die();
} else {
    header('Location: ../pages/home.php');
}
$conn->close();

?>