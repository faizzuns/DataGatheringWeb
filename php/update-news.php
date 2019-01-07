<?php

require 'connect.php';
if ($tend < 5) $sql = "SELECT `fill`.id_news, COUNT(*) AS total FROM `fill` WHERE `fill`.tendency_1 >= 0 AND `fill`.tendency_1 < 5 AND `fill`.id_news is not NULL GROUP BY `fill`.id_news ORDER BY total ASC";
else if ($tend == 5) $sql = "SELECT `fill`.id_news, COUNT(*) AS total FROM `fill` WHERE `fill`.tendency_1 = 5 AND `fill`.id_news is not NULL GROUP BY `fill`.id_news ORDER BY total ASC";
else $sql = "SELECT `fill`.id_news, COUNT(*) AS total FROM `fill` WHERE `fill`.tendency_1 > 5 AND `fill`.id_news is not NULL GROUP BY `fill`.id_news ORDER BY total ASC";
$result = $conn->query($sql);
if ($result->num_rows < 3) {
    $check = array(false, false, false);
    while ($row = $result->fetch_assoc()) $check[$row['id_news'] - 1] = true;
    $idx = 0;
    foreach ($check as $item) {
        $idx++;
        if (!$item) $min = $idx;
    }
} else {
    $row = $result->fetch_assoc();
    $min = $row['id_news'];
}

$sql = "UPDATE `fill` SET `fill`.id_news = $min WHERE `fill`.id = " . $_COOKIE['fill'];
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}
$conn->close();

?>