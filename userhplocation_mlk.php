<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";
?>

<!DOCTYPE html>
	<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TPGS || Malacca</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<link rel="stylesheet" href="css/userlocationdetail.css">
	<link rel="stylesheet" href="css/userlocation.css">
	<link rel="stylesheet" href="swiper-bundle.min.css" >
	<link rel="stylesheet" href="sw.css" >


	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	</head>
  <body>
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/image.gif); ">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Itinerary Planner</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Start Date</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">End date</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Class:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>Economy</option>
														<option value="economy">Economy</option>
														<option value="first">First</option>
														<option value="business">Business</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Flight">
											</div>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="hotels">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">City:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Return:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Check Out:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Rooms:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="economy">1</option>
														<option value="first">2</option>
														<option value="business">3</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
											</div>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="packages">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">City:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Destination:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Departs:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Return:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Rooms:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="economy">1</option>
														<option value="first">2</option>
														<option value="business">3</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
											</div>
										</div>
									 </div>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p>
									<h2>Exclusive Limited Time Offer</h2>
									<h3>Fly to Hong Kong via Los Angeles, USA</h3>
									<span class="price">$599</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


        <div class="place_detail">
            <div class="container_placedetail">
                <div class="placedetail_title">
                    <h1>Malacca</h1>
                    <p>Malacca is a state in Malaysia located in the southern region of the Malay Peninsula, facing the Strait of Malacca.</p>

                </div>

            <div class="placedetail_img">
                <video  controls autoplay loop >
                    <source src="images/Malacca.mp4">
                </video>
            </div>

           

        </div>

    </div>

	<div class="introduction">
		<h1 >What to know before visiting Malacca</h1>
		<div class="introduction-description">
			<h2 >about Malacca</h2>
			<p>Malacca City  is the capital city of the Malaysian state of Malacca, in Melaka Tengah District. As of 2019 it has a population of 579,000. Malacca City is one of the cleanest cities in South East Asia, being awarded as National Winner of Asean Clean Tourist City Standard Award 2018–2020 recently. It is the oldest Malaysian city on the Straits of Malacca, having become a successful entrepôt in the era of the Malacca Sultanate. The present-day city was founded by Parameswara, a Sumatran prince who escaped to the Malay Peninsula when Srivijaya fell to the Majapahit. </p>
			
		</div>
	</div>
	<div class="container-1">

		<h1 class="heading">Top sights in Malacca</h1>
	 
		<div class="box-container">
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/MELAKA/POPULAR DESTINATION/melaka_shore_sky.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>shore_sky</h3>
				 <p></p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i> </span>
					
				 </div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/MELAKA/POPULAR DESTINATION/melaka_sultanate.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>melaka_sultanate</h3>
				 <p>Pavilion Kuala Lumpur is a shopping centre  in Kuala Lumpur, Malaysia.</p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons"></div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/MELAKA/POPULAR DESTINATION/MENARAjpg.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>MENARA</h3>
				 <p> </p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i> </span>
					<span> <i class="fas fa-user"></i> </span>
				 </div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/MELAKA/POPULAR DESTINATION/mlk_jonker street.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>jonker street</h3>
				 <p></p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i>  </span>
					<span> <i class="fas fa-user"></i> </span>
				 </div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/MELAKA/POPULAR DESTINATION/St. Paul's Church.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>St. Paul's Church</h3>
				 <p></p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i>  </span>
					<span> <i class="fas fa-user"></i></span>
				 </div>
			  </div>
		   </div>
	 
		   
	 
		  
	 
		</div>
	 
		<div id="load-more"> load more </div>
	 
	 </div>


    

	
	<div class="container-2 swiper">
		<h2>Popular food</h2>
		<div class="slide-container">
		  <div class="card-wrapper swiper-wrapper">
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/MELAKA/FOOD/food_melaka_Hard Rock Cafe.jpeg" alt="" />
			  </div>
			  <div class="food-details">
	
				<div class="title-description">
				  <h3 class="title">Hard Rock Cafe</h3>
				  <h4 class="description"></h4>
				</div>
			  </div>
			</div>
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/MELAKA/FOOD/food_melaka_Pak Putra Restaurant.jpg" alt="" />
			  </div>
			  <div class="food-details">
			
				<div class="title-description">
				  <h3 class="title">Pak Putra Restaurant</h3>
				  <h4 class="description"></h4>
				</div>
			  </div>
			</div>
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/MELAKA/FOOD/food_melaka_Restaurant Ming Huat.jpg" alt="" />
			  </div>
			  <div class="food-details">
			
				<div class="title-description">
				  <h3 class="title">Restaurant Ming Huat</h3>
				  <h4 class="description"></h4>
				</div>
			  </div>
			</div>
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/MELAKA/FOOD/food_melaka_wild coriander.jpg" alt="" />
			  </div>
			  <div class="food-details">
		
				<div class="title-description">
				  <h3 class="title">melaka_wild coriander</h3>
				  <h4 class="description"></h4>
				</div>
			  </div>
			</div>
			
		  </div>
		</div>
		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	  </div>
  


	  <script src="userlocation.js"></script>
	<script src="loadmore.js"></script>
	<script src="swiper-bundle.min.js"></script>
    <script src="sw.js"></script>
  </body>
</html>
