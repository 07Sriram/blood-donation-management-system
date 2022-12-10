
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-bbms</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
  button {
    
    height: 134px;
    padding: 0;
    margin: 0;
    vertical-align: top;
    width: 104px;
    border: none;
}

#close-image img {
    display: block;
    height: 130px;  
    width: 100px;
}

button:hover{
  background-color: red;
}

img
{
    max-width: 100%;
}

.image-left, .image-right
{
    margin: 1em 0;
}

@media (min-width: 20em)
{
    .image-left, .image-right
    {
        display: flex;
        align-items: center;
    }

    .image-left img
    {
        margin-right: 1em;
        float: left; /* fallback */
    }

    .image-right img
    {
        order: 1;
        margin-left: 1em;
        float: right; /* fallback */
    }
    
    /* clearfix for fallback */
    .image-left::after,
    .image-right::after
    {
        content: "";
    display: block;
        clear: both;
    }
}

@media (min-width: 30em)
{
    .image-left img, .image-right img
    {
        flex-shrink: 0;
    }
}



</style>
</head>
<body">

<script src="js/bootstrap.min.js"></script>
    <!-- header -->
   <?php include('header.php')?>
<!-- Slider -->
<section class="slider-section">
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol> <!-- End of Indicators -->

		<!-- Carousel Content -->
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="background-image: url('images/bnr-img-3.jpg');">
				<div class="carousel-caption d-none d-md-block">
	
				</div>
			</div> <!-- End of Carousel Item -->

			<div class="carousel-item" style="background-image: url('images/image.png');">
				<div class="carousel-caption d-none d-md-block">
				
				</div>
			</div> <!-- End of Carousel Item -->

			<div class="carousel-item" style="background-image: url('images/bnr-img-9.jpg');">
				<div class="carousel-caption d-none d-md-block">
					
				</div>
			</div> <!-- End of Carousel Item -->
		</div> <!-- End of Carousel Content -->

		<!-- Previous & Next -->
		<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
		<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
	</div> <!-- End of Carousel -->
</section> <!-- End of Slider -->



<!-- card -->
<section>

   <div class="supporting">
    <div class="container">
        <h1 style="text-align: center; font-family:fantasy;">DONATION PROCESS</h1>
        <br>
        <p style="text-align: center;font-size: 16px;font-weight: 300;">The donation process from the time you arrive center until the time you leave</p>
        <!-- card-1 -->
      <div class="col">
       
        <div class="card" style="width: 18rem;"><img class="card-img-top" src="images/card-img-1.jpeg" alt="Card image cap" height="250px" style="height: 250px;">  
            <div class="card-body">
    <h5 class="card-title">Registration</h5>
    <p class="card-text">You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
    
   </div>
    </div>
        
    </div>

          <!-- card-2 -->

         <div class="col">
       
        <div class="card" style="width: 18rem;"><img class="card-img-top" src="images/card-img-2.jpeg" alt="Card image cap" height="250px" style="height: 250px;">  
            <div class="card-body">
    <h5 class="card-title">SCREENING</h5>
    <p class="card-text" style="margin-bottom:19px;">A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
    
   </div>
    </div>
        
    </div>

      <!-- card-3 -->
   <div class="col">
       
        <div class="card" style="width: 18rem;"><img class="card-img-top" src="images/card-img-3.png" alt="Card image cap" height="250px" style="height: 250px;">  
            <div class="card-body">
    <h5 class="card-title">DONATION</h5>
    <p class="card-text" style="margin-bottom:19px;">After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
    
   </div>
    </div>
        
    </div>

    </div>
    <div class="clearfix"></div>
  </div>
</section>


      <!-- container  -->
      <div class="container">
          <div class="image-left">
    <img src="images/home-cnt-img.jpeg" alt="Human Rights Logo" style="width: 11rem;" />
    <div>
        <p>It is said that blood is one of the most priceless gifts one can give to another. Blood is essential for a person to stay alive. Many times due to accidents or any other serious ailments, a person might require blood. And in those times, people who step up to donate their blood are real-life superheroes.</p>
        
    </div>
</div>

<div class="image-right">
    <img src="images/home-cnt-img-2.jpg" alt="Human Rights Logo" style="width: 11rem;"/>
    <div>
        <p>Your blood donation can give a precious smile to someone's face. Donate blood and be the reason for the smile on many faces. Blood donation will cost you nothing, but it will save a life! Your blood is precious: Donate, save a life & make it Divine.</p>
       
    </div>
</div>
      </div>

     <!-- footer -->
     <?php include('footer.php')?>
    
</body>
</html>