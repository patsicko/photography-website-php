

<?php 
include 'dbconnect.php';
error_reporting(0);

session_start();








if(isset($_POST['submit'])){


    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    $cpassword=md5($_POST["cpassword"]);
    // date_default_timezone_set('Africa/Kigali');

    // $date=date('Y-m-d h:i:s, time()');

    if($password==$cpassword){                                                                                                                                                                                  

        $sql="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn,$sql);

if(!$result->num_rows>0){
    $sql="INSERT INTO users(fname,lname,email,pwd)  VALUES('$fname','$lname','$email','$password')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "<script> alert('woe ! successfullty registered')</script>";
    }
    
    else{
        echo "<script> alert('something went wrong')</script>";
    }
}else{
    echo "<script> alert('user already exist')</script>";
}
       

}else{
    echo "<script> alert('password doesn'nt match')</script>";
}
    
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Photo gallery</title>
    <style>

        .w-50{
            background-color:black;
            padding:20px;
            border-radius:10px;
            color:white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#travel">Travel</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#archtecture">Archtecture</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#about">ABOUT US <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact us</a>
      </li>
      
    </ul>

   
  </div>


</nav>






<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">
            Register below
        </h2>
    </div>
   <div class="w-50 m-auto ">
   <form action="" method="POST">
   <div class="form-group"><label for="">First name</label><input class="form-control required" type="text" name="fname" id=""></div>
        <div class="form-group"><label for="">Last name</label><input type="text" class="form-control required"  name="lname" id=""></div>
        <div class="form-group"><label for="">Email</label><input type="text" class="form-control required"  name="email" id=""></div>

        <div class="form-group"><label for="">Password</label><input type="password" class="form-control required"  name="password" id=""></div>
        <div class="form-group"><label for=""> Confirm Password</label><input type="password" class="form-control required"  name="cpassword" id=""></div>

       <button type="submit" name="submit" class="btn btn-success">Register</button>
       <p>Have account ? <a href="index.php">Login</a></p>
    </form>
   </div>
</section>

   






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>