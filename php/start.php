<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/26/2018
 * Time: 1:40 PM
 */

    require 'connect.php';
    $sql = 'INSERT INTO gather.`transaction` (gather.`transaction`.name, gather.`transaction`.age, gather.`transaction`.profesi, gather.`transaction`.pendidikan, gather.`transaction`.from) VALUES ("' . $_POST["name"] . '",' . $_POST["age"] . ',"' . $_POST["profesi"] . '","' . $_POST["pendidikan"] . '","' . $_POST["from"] . '")';
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;

        setcookie('trans', $last_id, time() + 3600, '/');
        header('Location: ../pages/tendency.php');
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>