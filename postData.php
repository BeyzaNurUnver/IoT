<?php
include("db.php");


$rain_data =$_POST['rain'];  
$temperature_data = $_POST['temperature'];
$lumen_data = $_POST['lumen'];

$sql = "UPDATE Iot_data SET lumen = '$lumen_data', temperature ='$temperature_data', rain ='$rain_data' WHERE id = 1";

if($conn -> query($sql) === TRUE){
    echo"Succesfully updated.";
}
else{
    echo "Error: ". $sql . "<br>" . $conn ->error;
}

mysqli_close($conn);

?>