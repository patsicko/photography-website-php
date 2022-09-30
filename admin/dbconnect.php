<?php
$conn=mysqli_connect("localhost","patrick","musanze");
if($conn){
    echo "connected successfully";

    
}else{
    echo "oop connection failed!";
}


mysqli_select_db($conn,"photography");


?>