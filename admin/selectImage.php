<?php
include 'dbconnect.php';


$counter="";
$records=array();
$sql="SELECT * FROM images";

$result=mysqli_query ($con,$sql);

if($result->num_rows){
    while($rows=$result->fetch_object(){
        $records[]=$rows;
    })
}
?>