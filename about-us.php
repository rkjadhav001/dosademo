<?php
include "header.php";
?>

<div class="page-content bg-white">
		<!-- Banner  -->
		<div class="dz-bnr-inr style-1 text-center bg-parallax bg-parallax" style="background-image: url(&quot;assets/images/banner/bnr1.jpg&quot;); background-size: cover; background-position: center 0px;">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>About Us</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Visit Restaurant -->
		<section class="content-inner pb-0">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Partner with us @ Dosa Therapy</h2>
					<p class="about-p">Dosa Therapy, is owned by Simran Hospitality Private Limited. The company also owns ‘Manbhavan’ brand, which is a chain of Premium Veg. Thali Restaurants. The uniqueness of The Restaurant is Pure Vegetarian South Indian Cuisine “A way to a person’s heart is through his stomach and our brand serves this motto” </p>
				</div>
			</div>
		</section>
		<!-- Visit Restaurant -->
		<!-- Service Section -->
		<section class="content-inner">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Franchise Inquiry</h2>
				</div>
				<form class="dzForm dezPlaceAni" method="POST" action="https://swigo.dexignzone.com/xhtml/assets/script/contact_smtp.php">
					<div class="dzFormMsg"></div>
					<input type="hidden" class="form-control" name="dzToDo" value="Contact">
					<div class="row">
						<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
							<label class="form-label text-primary">Your Name</label>
							<div class="input-group input-line input-black">
								<input name="dzName" required="" type="text" class="form-control" placeholder="John Doe">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
							<label class="form-label text-primary">Your Email</label>
							<div class="input-group input-line input-black">
								<input name="dzEmail" required="" type="text" class="form-control" placeholder="info@example.com">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
							<label class="form-label text-primary">Your Number</label>
							<div class="input-group input-line input-black">
								<input name="dzPhoneNumber" required="" type="text" class="form-control dz-number" placeholder="9876543210">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
							<label class="form-label text-primary">Your Branch location</label>
							<div class="input-group input-line input-black">
								<input name="dzOther[Person]" required="" type="text" class="form-control" placeholder="Mahatma Nagar, Nashik">
							</div>
						</div>
						<div class="col-sm-12 m-b40">
							<label class="form-label text-primary">Message</label>
							<div class="input-group input-line input-black">
								<textarea name="dzMessage" required="" class="form-control" placeholder="Hi, do you Have a moment to talk About !"></textarea>
							</div>
						</div>
						<div class="col-sm-12 m-b20">
							<div class="input-recaptcha">
								<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
								<input class="form-control d-none" style="display:none;" data-recaptcha="true" required="" data-error="Please complete the Captcha">
							</div>
						</div>
						<div class="col-12 text-center">
							<button name="submit" value="submit" type="submit" class="btn btn-primary btn-hover-1"><span>Send Inquiry</span></button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- Service Section -->
		
	</div>
	<?php
include "footer.php";
?>