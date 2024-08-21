<?php
include("db.php");

$dt = array();
if(!isset($_POST['action'])){
    $sql = "SELECT fan, window, light FROM Iot_data WHERE id =1";
    $query_select = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($query_select)){
        $dt[0]["fan"] = $row["fan"];
        $dt[0]["window"] = $row["window"];
        $dt[0]["light"] = $row["light"];
    }

    echo json_encode($dt, JSON_PRETTY_PRINT);
}

?>