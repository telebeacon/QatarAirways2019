<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "raghav33", "ioneeds");

$result = $conn->query("SELECT name, flight, sex FROM output_images ORDER BY imageId DESC");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["name"] . '",';
    $outp .= '"flight":"'   . $rs["flight"]        . '",';
    $outp .= '"sex":"'. $rs["sex"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);
?>