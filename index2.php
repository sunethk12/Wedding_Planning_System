<?php
include("navbar.php");

?>



<!DOCTYPE html>

<html lang="en">

<head>
	<title>Home</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css">
	<link href="stylef.css" rel="stylesheet" media="all">
	

	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>



	<!--carousel-->

	<div class="container-fluid mb-5">
		<div class="carousel slide carousel-fade" data-ride="carousel" id="indicator">
			<ol class="carousel-indicators">
				<li data-target="#indicator" data-slide-to="0"></li>
				<li data-target="#indicator" data-slide-to="1"></li>
				<li data-target="#indicator" data-slide-to="2"></li>
				<li data-target="#indicator" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/cover2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First Slide Label</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

					</div>
				</div>
				<div class="carousel-item">
					<img src="images/cover3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second Slide Label</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/cover5.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third Slide Label</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/cover4.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Forth Slide Label</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
			<a href="#indicator" class="carousel-control-prev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a href="#indicator" class="carousel-control-next" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>


	<!--sign up cards-->

	<div class="container-fluid mb-5">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">Are you looking for plan your wedding?</h2>
						<p class="card-text">If yes, here's the solution. We offer you hundreds of wedding vendors of all categories
							 enabling you to conveniently find the perfect match that will make your dream wedding a reality.
							
                            </p>
						<a href="customer_reg.php" class="btn" style="margin-left:550px;background-color:#FB550C;color:white;font-weight:bold;">Sign Up</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">Are you a wedding vendor? </h2>
						<p class="card-text">Get maximum exposure for your business with Sri Lanka’s No. 1 Wedding Website to grow bigger.
							 You can easily communicate with customers and easily get your orders through our web site.
							</p>
						<a href="vendor_reg.php" class="btn" style="margin-left:550px;background-color:#FB550C;color:white;font-weight:bold;">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--end sign up cards-->



<!--search box-->
	<div class="container-fluid ">

	<div class="header2 s-box">
        <form action="">
            <h2>Find your vendors with budget & location</h2>
            <div class="form-box">
                <input type="text" class="search-field business" placeholder="Enter your budget">

                <select name="" class="search-field location">
                    <option>Colombo</option>
                    <option>Galle</option>
                    <option>Badulla</option>
                    <option>Jafna</option>
                    <option>Kandy</option>
                </select>



                <button class="search-btn" type="button">Search</button>

            </div>

        </form>
    </div>


	</div>

<!--end of search box-->




	<div class="container-fluid">
		<div class="jumbotron mb-5">

			<h1 class="display-4">We make your dream wedding a reality...!</h1>
			<p class="lead">Before two hearts unite in celebration, a lot goes into preparations. Before the love is
				declared in public, there are many defining moments of choosing and picking. We at Laksiri Wedding
				Planner, as one of the reputed wedding planners in Sri Lanka will create the dream wedding you have
				always wished for, without a single detail missing. We offer you hundreds of wedding vendors of all categories enabling you to 
				find the perfect match that
			will make your dream wedding a reality.</p>
			

		</div>
	</div>



	
				
<!-- categories-->

<div class="container-fluid">


<div class="row text-center" id="heading">
<div class="col-md-12 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h3>Our Wedding Vendor Categories</h3>
					<p>Start to find your wedding vendors</p>
					<hr class="full">
					<br />
				</div>
</div>

<div class="card-deck">
<div class="card" style="width: 18rem;height: 19rem;">
  <img src="images/bridal2.jpg" class="card-img-top simg-categories" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Bridal Saloons</h5>
    
    <a href="#" class="btn" style="margin-left:55px;background-color:#FB550C;color:white;font-weight:bold;">View Vendors</a>
  </div>
</div>
<div class="card" style="width: 18rem;height: 19rem;">
  <img src="images/dj.jpg" class="card-img-top simg-categories" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">DJ & Entertainment</h5>
    
    <a href="#" class="btn" style="margin-left:55px;background-color:#FB550C;color:white;font-weight:bold;">View Vendors</a>
  </div>
</div><div class="card" style="width: 18rem;height: 19rem;">
  <img src="images/florists2.jpg" class="card-img-top simg-categories" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Florists & Decorations</h5>
    
    <a href="#" class="btn" style="margin-left:55px;background-color:#FB550C;color:white;font-weight:bold;">View Vendors</a>
  </div>
</div><div class="card" style="width: 18rem;height: 19rem;">
  <img src="images/hotels.jpg" class="card-img-top simg-categories" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Hotels</h5>
    
    <a href="#" class="btn" style="margin-left:55px;background-color:#FB550C;color:white;font-weight:bold;">View Vendors</a>
  </div>
</div><div class="card" style="width: 18rem;height: 19rem;">
  <img src="images/photography.jpg" class="card-img-top simg-categories" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Wedding Photographers</h5>
    
    <a href="#" class="btn" style="margin-left:55px;background-color:#FB550C;color:white;font-weight:bold;">View Vendors</a>
  </div>
</div>

</div>

</div>


		<!--feedbacks -->

		<div class="container-fluid mt-5">
		<div class="row text-center" id="heading">
                      <div class="col-md-12 col-md-offset-3 wow animated zoomInDown" id="heading-text">
					<h3>See what customers have to say about Laksiri</h3>
					
					<hr class="full">
					<br />
				</div>
</div>
		</div>
		






		<div class="container mt-1">
			<div class="row">
				<div class="col-md-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    
                  </ol>

				  <div class="carousel-inner">
				  <div class="carousel-item active">
					  <div class="row">
						  <div class="col-md-4">
							  <div class="single-box">
								  <div class="img-area">
									  <img src="images/person1.jpg" alt="">
								  </div>
								  <div class="img-text">
									  <h5 style="text-transform:uppercase;color:#FB550C;">Jayani Jayawardane</h5>
									  <p>"Thanks to Laksiri wedding planners. I have planned everything in my wedding according to my wish. Thank you very much for the super service."</p>
								  </div>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="single-box">
								  <div class="img-area">
									  <img src="images/person5.jpg" alt="">
								  </div>
								  <div class="img-text">
									  <h5 style="text-transform:uppercase;color:#FB550C;">Roshen Silva</h5>
									  <p>"If you want to experience a great wedding plan, Laksiri wedding planners are the best. Say goodbye to traditional planning systems. Thank you again. " </p>
								  </div>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="single-box">
								  <div class="img-area">
									  <img src="images/person3.jpg" alt="">
								  </div>
								  <div class="img-text">
									  <h5 style="text-transform:uppercase;color:#FB550C;">Dulani Upeka</h5>
									  <p>" Highly recommended service web site. If you want to plan your wedding in very nice way, 
										  this is the place to select your wedding vendors."</p>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>


				  <div class="carousel-item">
					  <div class="row">
						  <div class="col-md-4">
							  <div class="single-box">
								  <div class="img-area">
									  <img src="images/person4.jpg" alt="">
								  </div>
								  <div class="img-text">
									  <h5 style="text-transform:uppercase;color:#FB550C;">Chamika Denuwan</h5>
									  <p>"We really appreciate the support of laksiri wedding planners. They make our dream wedding a reality. We really 
										  thankful for the great services provided by them."
									  </p>
								  </div>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="single-box">
								  <div class="img-area">
									  <img src="images/person5.jpg" alt="">
								  </div>
								  <div class="img-text">
									  <h5 style="text-transform:uppercase;color:#FB550C;">Shehan Anuradha</h5>
									  <p>"Big Thank for the laksiri wedding planners for providing best wedding vendors for us. It was very helpful for us to make success 
										  our wedding."
									  </p>
								  </div>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="single-box">
								  <div class="img-area">
									  <img src="images/person1.jpg" alt="">
								  </div>
								  <div class="img-text">
									  <h5 style="text-transform:uppercase;color:#FB550C;">Shehani Perera</h5>
									  <p>"The best place for plan your wedding. Everything was well planned. Thank you for the great service."</p>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>









				  </div>

				</div>

				</div>
			</div>
		</div>
	

<!--end of the feedback part -->


<!--details -->
<div class="container-fluid con-deatils mt-5">

<div class="row">
<div class="col-5" style="margin-top:20px;" >
	<h2>Laksiri wedding planners</h2>
<p style="text-align:justify;">We are well enthusiastic, professional wedding planners who have more than 10 years of experience in the wedding planning process.
You can find the best wedding vendors with prices and their customer feedback and ratings through our web site. As a special
 feature you can enter your expected budget to our web site and then we provide a necessary wedding plan for you and we suggest vendors that are around in your budget.
On the other hand, this web site is a greate opportunity for wedding vendors to expand their business. So join with us.  </P>
</div>


<div class="col-3">
<img src="images/laksiri.jpg" alt="" width="300px" heigth="150px" style="margin-top:40px;margin-left:40px;">




</div>
<div class="col-4">
<div style="margin-left:50px;margin-top:40px;">
<h5>Contact Us</h5><br>
<p>Email : laksiriweddings@gmail.com</p>

<p>Tel : +94 764567349</p>
<a href="about_us.php" class="btn" style="margin-left:100px;background-color:#FB550C;color:white;font-weight:bold;">More</a>
</div>
</div>




</div>




</div>







	




	<!--js-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
		integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
		integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
		crossorigin="anonymous"></script>



</body>

</html>




<?php
include("footer.php");

?>
