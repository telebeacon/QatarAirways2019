<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "raghav33", "ioneeds");

$result = $conn->query("SELECT * FROM output_images ORDER BY latest DESC");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["name"] . '",';
    $outp .= '"flight":"'   . $rs["flight"]        . '",';
    $outp .= '"sex":"'. $rs["sex"]     . '",'; 
    $outp .= '"imageId":"'. $rs["imageId"]     . '",'; 
    $outp .= '"pnr":"'. $rs["pnr"]     . '"}'; 


}
$outp .="]";

$conn->close();

echo($outp);
?>