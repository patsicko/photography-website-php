<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Galery</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
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




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/image1.png" style="height:400px; width:350px; " alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/travel2.jpeg" style="height:400px; width:350px; " alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/arch2.jpeg" style="height:400px; width:350px; " alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a  id="nature">
<section class="my-4">
    <section class="py-4">
         <h2 class="text-center">Nature</h2>
    </section>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
               <img src="./images/th.jpeg" alt=""  style="height:300px; width:550px;" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
               <img src="./images/image2.jpg"  style="height:300px; width:550px;" alt=""  class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/nature.jpeg"  style="height:300px; width:550px;" alt=""  class="img-fluid pb-3">
        </div>
    </div>
</section>
</a>

<a  id="travel">
<section class="my-4">
    <section class="py-4">
         <h2 class="text-center">Travel</h2>
    </section>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
               <img src="./images/travel1.jpeg"  style="height:300px; width:550px; " alt=""  class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
               <img src="./images/travel2.jpeg"  style="height:300px; width:550px; " alt=""  class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/travel3.jpeg"  style="height:300px; width:550px;"  alt=""  class="img-fluid pb-3">
        </div>
    </div>
</section>
</a>

<a  id="archtecture">
<section class="my-4">
    <section class="py-4">
         <h2 class="text-center">Archtecture</h2>
    </section>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
               <img src="./images/arch1.jpeg" alt=""  style="height:300px; width:550px;"  class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
               <img src="./images/arch2.jpeg" style="height:300px; width:550px; " alt=""  class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/arch3.jpeg" alt=""  style="height:300px; width:550px;" class="img-fluid pb-3">
        </div>
    </div>
</section>
</a>


<a  id="about">
<section class="my-4 text-center">
    <h2>About us</h2>
<div class="py-4">
    <h3 class="text-center">
        INES  -Ruhengeri <br>
        <p class="text-center">
            we are passionate photographers <br> interested in working with nature, <br> archtecture and travel photpgraphy.
        </p>
    </h3>
</div>
</a>

<a  id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">
            Contact us
        </h2>
    </div>
   <div class="w-50 m-auto">
   <form action="contactUs.php" method="POST">
        <div class="form-group"><label for="">First name</label><input class="form-control required" type="text" name="fname" id=""></div>
        <div class="form-group"><label for="">Last name</label><input type="text" class="form-control required"  name="lname" id=""></div>
        <div class="form-group"><label for="">Phone</label><input type="text" class="form-control required"  name="phone" id=""></div>
        <div class="form-group"><label for="">Email</label><input type="text" class="form-control required"  name="email" id=""></div>

        <div class="form-group">
            <label for="">Message:</label>
        <textarea name="message" id="" rows="3" class="form-control" required>

        </textarea>
       </div>

       <button type="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
</section>
</a>


</section>











<!-- 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootrap/4.5.2/bootstrap.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


