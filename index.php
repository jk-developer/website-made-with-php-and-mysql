
<?php
      include('header.php');
?>

<?php

    $link = mysqli_connect("localhost", "root", "jk4559843", "rcg_furniture");
    if(mysqli_connect_error())
    {
        die ("There was an error connecting to the database");
    } 

   

  

?>
      
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
    
        
  </ol>
  <div class="carousel-inner">
      
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/b1.jpg" alt="First Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/bed2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ch3.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/b2.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/b4.jpg" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/tb2.jpeg" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/kit3.jpeg" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/s1.jpg" alt="Eighth slide">
    </div>
      <div class="carousel-item active">
      <img class="d-block w-100" src="images/s3.jpg" alt="Nineth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/sofa3.jpeg" alt="Tenth slide">
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
      
      
        
         <!-- Jumbotron -->
  <div class="container">
     <div class="jumbotron" id="jumbotron-landing">
    
    <h1 class="caption"><span></span>RCG FURNITURE WORKS </h1>
    <p>Specialist in: Wood Coating
       (Poly Urethane, PU) Hammer Tone
        Polyster, <br> Mettalic, Finishes
        & Special Effect etc.
    </p>
    <a href="#" class="btn btn-danger btn-lg">View All Products</a>
  </div>
    


  </div>
      
   
    

<?php
      include('footer.php');
?>