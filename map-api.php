<?php

header('Content-Type: application/json');

$conn = mysqli_connect("127.0.0.1", "root", "", "dms");
if ($conn) {
  // echo "connected";
}else{
  die(json_encode(array()));
}

$sql="SELECT `reporter`, `headlines`, `description`, `image`, `long`, `lat` from `add_alert`";
$result = $conn->query($sql);

$result_array = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($result_array,$row);
    }
}
$conn->close();

die(json_encode($result_array));

?>
