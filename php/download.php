<?php
require 'connect.php';
$sql = "SELECT *,`user`.name AS 'nama', `fill`.id AS 'main_id', `province`.name AS 'province', `district`.name AS 'district', `sub_district`.name AS 'sub_district' FROM `user` INNER JOIN fill ON `user`.id = `fill`.id_user"
        . " INNER JOIN `sub_district` ON `user`.location = `sub_district`.id"
        . " INNER JOIN `district` ON `sub_district`.id_district = `district`.id"
        . " INNER JOIN `province` ON `district`.id_province = `province`.id"
        . " INNER JOIN `question` ON `question`.id_fill = `fill`.id WHERE `fill`.dbrief2 is not null";
$result = $conn->query($sql);
if ($result === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}
/*******Start of Formatting for Excel*******/
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
//for ($i = 0; $i < mysql_num_fields($result); $i++) {
//    echo mysql_field_name($result,$i) . "\t";
//}
//print("\n");
//end of printing column names
//start while loop to get data

$filename = "download";
$file_ending = "xls";
$arr = array("main_id", "nama", "age", "profession", "education", "phone", "province", "district", "sub_district", "tendency_1", "tendency_2", "id_news", "number", "value", "dbrief1", "dbrief2");


while($row = $result->fetch_assoc())
{
    $schema_insert = "";
    foreach ($arr as $value) {
        $schema_insert = $schema_insert . $row[$value].$sep;
    }

    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";
}

//header info for browser
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$filename.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>