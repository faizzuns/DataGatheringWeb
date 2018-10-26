<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/26/2018
 * Time: 8:03 PM
 */

    if (isset($_COOKIE['trans'])) {
        require 'connect.php';
        $sql = "SELECT * FROM gather.`transaction` WHERE id = " .$_COOKIE['trans'];
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($row['name'] == null) {
                header('Location : ../pages/identity.php');
            } else if ($row['tendency'] == null) {
                header('Location : ../pages/tendency.php');
            } else if ($row['id_news'] == null) {
                header('Location : ../pages/news.php');
            }
            die();
        }
        $conn->close();
        echo 'Not Found';
        die();
    } else {
        header('Location: ../pages/home.php');
    }

?>