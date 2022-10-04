<?php 

$conn=mysqli_connect("localhost","patrick","musanze");
if($conn){
    echo "connected successfully";

    
}else{
    echo " oop connection failed!";
}


mysqli_select_db($conn,"photography");



$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$message=$_POST["message"];


$query="INSERT INTO contacts(fname,lname,phone,email,messagee) VALUES('$fname','$lname','$phone','$email','$message')";

mysqli_query($conn,$query);
header('LOCATION:index.php#contact');

?>