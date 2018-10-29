
<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/26/2018
 * Time: 9:41 PM
 */

require 'connect.php';
$sql = "UPDATE gather.`transaction` SET gather.`transaction`.tendency = " . $_POST['tendency'] . " WHERE gather.`transaction`.id = " . $_COOKIE['trans'];
if ($conn->query($sql) === TRUE) {
    setcookie('tendency', $_POST['tendency'], time()+3600, '/');
    header('Location: ../pages/news.php');
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>