<?php
    
    require "connect.php";

    $sql = "SELECT id,latitude,longitude,name,TO_BASE64(icon) as icon FROM mapseditor";
    $result = mysqli_query($con,$sql);  

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $location[]=$row;
        }     
    } else {
       $location ="error";
    }    
    
    echo json_encode($location);

    $con->close();      

?>