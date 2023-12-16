
<?php
include "header.php";
?>
	<!-- Header -->
	
	<!-- Offcanvas Form Start -->
	<!--<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogin" >-->
	<!--	<div class="offcanvas-body">-->
	<!--		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
	<!--		<div class="offcanvas-form">-->
	<!--			<div class="login-head">-->
	<!--				<h4 class="title">Welcome Back</h4>-->
	<!--				<p>We’d love have you join our 100% remote network of creatord & freelance.</p>-->
	<!--				<button name="submit" value="submit" type="submit" class="btn google-btn w-100 d-block">-->
	<!--					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">-->
	<!--					<g clip-path="url(#clip0_1381_2836)">-->
	<!--					<path d="M5.76215 15.7122L4.85713 19.0908L1.54929 19.1607C0.560727 17.3272 0 15.2294 0 13.0001C0 10.8443 0.524266 8.81147 1.45356 7.02148H1.45427L4.39918 7.56139L5.68923 10.4886C5.41922 11.2758 5.27206 12.1208 5.27206 13.0001C5.27216 13.9543 5.44502 14.8687 5.76215 15.7122Z" fill="#FBBB00"/>-->
	<!--					<path d="M25.7722 10.5715C25.9215 11.3579 25.9994 12.1701 25.9994 13.0001C25.9994 13.9308 25.9015 14.8387 25.7151 15.7144C25.0823 18.6944 23.4287 21.2965 21.138 23.138L21.1373 23.1373L17.428 22.948L16.903 19.6708C18.423 18.7794 19.6109 17.3844 20.2366 15.7144H13.2852V10.5715H20.338H25.7722Z" fill="#518EF8"/>-->
	<!--					<path d="M21.1374 23.1371L21.1381 23.1378C18.9103 24.9285 16.0802 26 12.9995 26C8.04883 26 3.74456 23.2329 1.54883 19.1607L5.76169 15.7122C6.85953 18.6421 9.68596 20.7279 12.9995 20.7279C14.4238 20.7279 15.7581 20.3428 16.9031 19.6707L21.1374 23.1371Z" fill="#28B446"/>-->
	<!--					<path d="M21.2974 2.99284L17.086 6.44069C15.901 5.69999 14.5003 5.27211 12.9996 5.27211C9.61098 5.27211 6.73168 7.45352 5.68884 10.4886L1.45384 7.02142H1.45312C3.61671 2.85 7.97527 0 12.9996 0C16.1538 0 19.046 1.12359 21.2974 2.99284Z" fill="#F14336"/>-->
	<!--					</g>-->
	<!--					<defs>-->
	<!--					<clipPath id="clip0_1382_2836">-->
	<!--					<rect width="26" height="26" fill="white"/>-->
	<!--					</clipPath>-->
	<!--					</defs>-->
	<!--					</svg> Sign Up with Google-->
	<!--				</button>-->
	<!--				<h6 class="login-title"><span>OR</span></h6>-->
	<!--			</div>-->
	<!--				<div class="form-group m-b15">-->
	<!--					<label class="form-label">Email*</label>-->
	<!--					<div class="input-group">-->
	<!--						<input name="dzEmail" required type="text" class="form-control" placeholder="Enter Your Email">-->
	<!--					</div>-->
	<!--				</div>-->
	<!--				<div class="form-group m-b30">-->
	<!--					<label class="form-label">Password*</label>-->
	<!--					<div class="input-group search-input">-->
	<!--						<input name="password" type="password" class="form-control dz-password" placeholder="Enter a Password">-->
	<!--						<div class="show-pass">-->
	<!--							<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path></svg>-->
	<!--							<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path></svg>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--				<button name="submit" value="submit" type="submit" class="btn btn-primary w-100 d-block">-->
	<!--					 Sign In-->
	<!--				</button>-->
	<!--				<p class="text-center m-t30">Not registered?  -->
	<!--					<a class="register text-primary font-weight-500" data-bs-toggle="offcanvas" href="#offcanvasRegister" role="button" aria-controls="offcanvasRegister">Register here</a>-->
	<!--				</p>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRegister">
		<div class="offcanvas-body">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			<div class="offcanvas-form">
				<div class="login-head">
					<h4 class="title">Join Our Network</h4>
					<p>We’d love have you join our 100% remote network of creatord & freelance.</p>
					<button name="submit" value="submit" type="submit" class="btn google-btn w-100 d-block">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1383_2836)">
						<path d="M5.76215 15.7122L4.85713 19.0908L1.54929 19.1607C0.560727 17.3272 0 15.2294 0 13.0001C0 10.8443 0.524266 8.81147 1.45356 7.02148H1.45427L4.39918 7.56139L5.68923 10.4886C5.41922 11.2758 5.27206 12.1208 5.27206 13.0001C5.27216 13.9543 5.44502 14.8687 5.76215 15.7122Z" fill="#FBBB00"/>
						<path d="M25.7722 10.5715C25.9215 11.3579 25.9994 12.1701 25.9994 13.0001C25.9994 13.9308 25.9015 14.8387 25.7151 15.7144C25.0823 18.6944 23.4287 21.2965 21.138 23.138L21.1373 23.1373L17.428 22.948L16.903 19.6708C18.423 18.7794 19.6109 17.3844 20.2366 15.7144H13.2852V10.5715H20.338H25.7722Z" fill="#518EF8"/>
						<path d="M21.1374 23.1371L21.1381 23.1378C18.9103 24.9285 16.0802 26 12.9995 26C8.04883 26 3.74456 23.2329 1.54883 19.1607L5.76169 15.7122C6.85953 18.6421 9.68596 20.7279 12.9995 20.7279C14.4238 20.7279 15.7581 20.3428 16.9031 19.6707L21.1374 23.1371Z" fill="#28B446"/>
						<path d="M21.2974 2.99284L17.086 6.44069C15.901 5.69999 14.5003 5.27211 12.9996 5.27211C9.61098 5.27211 6.73168 7.45352 5.68884 10.4886L1.45384 7.02142H1.45312C3.61671 2.85 7.97527 0 12.9996 0C16.1538 0 19.046 1.12359 21.2974 2.99284Z" fill="#F14336"/>
						</g>
						<defs>
						<clipPath id="clip0_138_536">
						<rect width="26" height="26" fill="white"/>
						</clipPath>
						</defs>
						</svg> Sign Up with Google
					</button>
					<h6 class="login-title"><span>OR</span></h6>
				</div>
					<div class="form-group m-b15">
						<label class="form-label">Name*</label>
						<div class="input-group">
							<input name="dzName" required type="text" class="form-control" placeholder="Enter Your Name">
						</div>
					</div>
					<div class="form-group m-b15">
						<label class="form-label">Email*</label>
						<div class="input-group">
							<input name="dzEmail" required type="text" class="form-control" placeholder="Enter Your Email">
						</div>
					</div>
					<div class="form-group m-b30">
						<label class="form-label">Password*</label>
						<div class="input-group search-input">
							<input name="password" type="password" class="form-control dz-password" placeholder="Create a Password">
							<div class="show-pass">
								<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path></svg>
								<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path></svg>
							</div>
						</div>
					</div>
					<button name="submit" value="submit" type="submit" class="btn btn-primary w-100 d-block">
						Sign Up
					</button>
					<p class="text-center m-t30">Already have an account?
						<a class="text-primary font-weight-500" data-bs-toggle="offcanvas" href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin" >Login</a>
					</p>
			</div>
		</div>
	</div>
	<!-- Offcanvas Form End -->
	<div class="page-content bg-white">
		
		<!-- Banner -->
		<div class="main-bnr-two">
			<div class="main-slider-2">
				<div class="banner-inner">
					<div class="primary-box"></div>
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xl-6 col-lg-7 col-md-7">
								<div class="banner-content">
									<h1 class="title wow fadeInUp" data-wow-delay="0.2s">Savor the Legacy of Authentic<span class="text-primary"></span>  Dosa Delights!</h1>
									<p class="wow fadeInUp" data-wow-delay="0.4s">the home of authentic dosas! At Dosa Theorapy, we bring you a taste of India with our delectable dosa offerings crafted from traditional recipes passed down through generations.
									</p>
									
									<!--<div class="banner-btn d-flex align-items-center wow fadeInUp" data-wow-delay="0.6s">-->
									<!--	<a href="contact-us.html" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-3"><span class="btn-text" data-text="Book a Table">Book a Table</span></a>-->
									<!--	<a href="about-us.html" class="btn btn-outline-primary btn-md shadow-primary btn-hover-3"><span class="btn-text" data-text="View More">View More</span></a>-->
									<!--</div>-->
								</div>
								<div class="main-thumb2-area">
									<!--<a href="our-menu-1.html" class="food-card wow fadeInUp" data-wow-delay="0.2s">-->
									<!--	<div class="icon">-->
									<!--		<i class="flaticon-juice"></i>										-->
									<!--	</div>-->
									<!--</a>-->
									<!--<a href="our-menu-1.html" class="food-card wow fadeInUp" data-wow-delay="0.3s">-->
									<!--	<div class="icon">-->
									<!--		<i class="flaticon-hamburger"></i>								-->
									<!--	</div>-->
									<!--</a>-->
									<!--<a href="our-menu-1.html" class="food-card wow fadeInUp" data-wow-delay="0.4s">-->
									<!--	<div class="icon">-->
									<!--		<i class="flaticon-pizza"></i>									-->
									<!--	</div>-->
									<!--</a>-->
									<!--<a href="our-menu-1.html" class="food-card wow fadeInUp" data-wow-delay="0.5s">-->
									<!--	<div class="icon">-->
									<!--		<i class="flaticon-cake-slice"></i>									-->
									<!--	</div>-->
									<!--</a>-->
									<!--<a href="our-menu-1.html" class="food-card wow fadeInUp" data-wow-delay="0.6s">-->
									<!--	<div class="icon">-->
									<!--		<i class="flaticon-room-service"></i>										-->
									<!--	</div>-->
									<!--</a>-->
								</div>
							</div>
							<div class="col-xl-6 col-lg-5 col-md-5">
								<div class="banner-media">
									<img src="assets/images/main-slider/slider3/bg.png" class="item-bg" alt="/">									
									<div class="item-media wow fadeInRight dz-move-down" data-wow-delay="1s" data-speed-x="-2" data-speed-scale="-1">
										<!--<img src="assets/images/main-slider/slider3/offer.png" class="offer dz-move" alt="/">-->
										<!--<img src="assets/images/main-slider/slider3/crown.png" class="crown" alt="/">-->
										<img src="assets/images/main-slider/slider3/Main dosa.png" class="img2" alt="/">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="primary-box style-1"></div>
				</div>
			</div>
		</div>	
		<!--Banner-->
		
		<!-- Advertisement Box -->
		<section class="content-inner overflow-hidden pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 m-b30 wow fadeInUp" data-wow-delay="0.2s">
						<div class="adv-box style-1" style="background-image:url('assets/images/adv/pic2.png'); background-repeat:no-repeat; background-position:center; background-size:cover;">
							<div class="adv-content">
								<span class="special">OUR SPECIAL</span>
								<h4 class="title">TASTY Idli Vada</h4>
							</div>
							<div class="adv-media">
								<img class="main-media" src="assets/images/adv/pic1.png" alt="/">
								<div class="item-media offer-label">
									<img src="assets/images/adv/label.png" alt="/">
									<span class="">Inquire<br>Now</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="adv-box style-2">
									<div class="adv-media">
										<img src="assets/images/adv/pic3.png" alt="/" style="height:277px;">
									</div>
									<div class="adv-content">
										<span class="special text-white">TODAY SPECIAL</span>
										<h4 class="title text-white">Dosa</h4>
										<!-- <span class="price">60% OFF</span> -->
										<!-- <a href="shop-cart.html" class="btn btn-white btn-hover-3"><span class="btn-text" data-text="Add To Cart">Add To Cart</span></a> -->
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.6s">
								<div class="adv-box style-3" style="background-image:url('assets/images/background/pic15.png'); background-size:cover; background-position:center;">
									<!--<div class="adv-content">-->
									<!--	<span class="special text-white">MUSHROOM</span>-->
									<!--	<h4 class="title">BURGER</h4>-->
									<!--	<a href="shop-cart.html" class="btn btn-white btn-hover-3"><span class="btn-text" data-text="Add To Cart">Add To Cart</span></a>-->
									<!--</div>-->
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.8s">
								<div class="adv-box style-4" style="background-image:url('assets/images/background/pic16.png'); background-repeat:no-repeat; background-size:cover;">
									<div class="adv-media">
										
										<img src="assets/images/adv/pic4.png" alt="/">
										
									</div>
									
									<div class="adv-content">
										<span class="special text-white">FOR LIMITED TIME ONLY</span>
										<h4 class="special text-white">Get Our Franchise</h4>
									</div>
									<a href="shop-cart.html" class="btn btn-white btn-hover-3"><span class="btn-text" data-text="Inquire Now">Inquire Now</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Advertisement Box -->
		
		<!-- Image Box-2  -->
		<section class="content-inner bg-white overflow-hidden">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Our Featured Food</h2>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
						<div class="dz-img-box style-2 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic1.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="#">Dosa</a></h4>
								<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>-->
								<!--<h5 class="dz-price text-primary">$55.00</h5>-->
								<!--<a href="our-menu-3.html" class="btn btn-primary btn-hover-2">View More</a>-->
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="dz-img-box style-2 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic2.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="#">idli</a></h4>
								<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>-->
								<!--<h5 class="dz-price text-primary">$50.00</h5>-->
								<!--<a href="our-menu-3.html" class="btn btn-primary btn-hover-2">View More</a>-->
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.6s">
						<div class="dz-img-box style-2 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic3.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="#">Butter Povbhaji</a></h4>
								<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>-->
								<!--<h5 class="dz-price text-primary">$45.00</h5>-->
								<!--<a href="our-menu-3.html" class="btn btn-primary btn-hover-2">View More</a>-->
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.8s">
						<div class="dz-img-box style-2 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic4.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="#">Sandwish</a></h4>
								<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>-->
								<!--<h5 class="dz-price text-primary">$35.00</h5>-->
								<!--<a href="our-menu-3.html" class="btn btn-primary btn-hover-2">View More</a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Image Box-2 -->
		
		<!-- Service Section -->
		<section class="section-wrapper-4 content-inner overflow-hidden bg-parallax" style="background-image:url('assets/images/background/pic10.png'); background-attachment: fixed;">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Why Choose Us ?</h2>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-4">
							<div class="icon-bx">
								<div class="icon-cell">
									<i class="flaticon-fast-delivery"></i>
								</div>
							</div>
							<div class="icon-content">
								<p>Home Delivery Available</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-4">
							<div class="icon-bx">
								<div class="icon-cell">
									<i class="flaticon-clock-1"></i>
								</div>
							</div>
							<div class="icon-content">
								<p>Fast Orders</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
						<div class="icon-bx-wraper style-4">
							<div class="icon-bx">
								<div class="icon-cell">
									<i class="flaticon-chef"></i>
								</div>
							</div>
							<div class="icon-content">
								<p>Best Chef</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
						<div class="icon-bx-wraper style-4">
							<div class="icon-bx">
								<div class="icon-cell">
									<i class="flaticon-cuisine"></i>
								</div>
							</div>
							<div class="icon-content">
								<p>We have the Freshest Product</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Service Section -->	
		
		<!-- Are Menu-->
		<section class="content-inner section-wrapper-6 p-b40">
			<div class="container inner-section-wrapper">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">From Our Menu</h2>
				</div>
				<div class="row">
					<div class="col-xl-10 col-lg-9 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="site-filters style-1 clearfix">
							<!--<ul class="filters" data-bs-toggle="buttons">-->
							<!--	<li data-filter=".All" class="btn active"><a href="javascript:void(0);"><i class="flaticon-fast-food"></i>ALL</a></li>-->
							<!--	<li data-filter=".Tea" class="btn"><a href="javascript:void(0);"><i class="flaticon-cocktail"></i>COLD DRINK</a></li>-->
							<!--	<li data-filter=".pizza" class="btn"><a href="javascript:void(0);"><i class="flaticon-pizza-slice"></i>PIZZA</a></li>-->
							<!--	<li data-filter=".salad" class="btn active"><a href="javascript:void(0);"><i class="flaticon-salad"></i>SALAD</a></li>-->
							<!--	<li data-filter=".sweet" class="btn active"><a href="javascript:void(0);"><i class="flaticon-cupcake"></i>SWEETS</a></li>-->
							<!--	<li data-filter=".spicy" class="btn active"><a href="javascript:void(0);"><i class="flaticon-chili-pepper"></i>SPICY</a></li>-->
							<!--	<li data-filter=".burger" class="btn active"><a href="javascript:void(0);"><i class="flaticon-hamburger-1"></i>BURGER</a></li>-->
							<!--</ul>-->
						</div>
					</div>
					<!--<div class="col-xl-2 col-lg-3 col-md-12 text-lg-end d-lg-block d-none wow fadeInUp" data-wow-delay="0.4s">-->
					<!--	<a href="our-menu-3.html" class="btn btn-outline-primary btn-hover-3"><span class="btn-text" data-text="View All">View All</span></a>-->
					<!--</div>-->
				</div>
				<div class="clearfix">
					<ul id="masonry" class="row dlab-gallery-listing gallery">
						<li class="card-container col-lg-4 col-md-6 m-b30 All drink pizza burger wow fadeInUp" data-wow-delay="0.2s">
							<div class="dz-img-box style-7">
								<div class="dz-media">
									<img src="assets/images/gallery/grid4/pic1.jpg" alt="/">
									<div class="dz-meta">
										<ul>
											
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> --> 
										</ul>
									</div>
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="menu.php">Tea</a></h5>
									<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
									<!--<span class="price">$4.56</span>-->
								</div>
							</div>
						</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All pizza sweet wow fadeInUp" data-wow-delay="0.2s">
							<div class="dz-img-box style-7">
								<div class="dz-media">
									<img src="assets/images/gallery/grid4/pic2.jpg" alt="/">
									<div class="dz-meta">
										<ul>
											
												<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
										</ul>
									</div>
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="menu.php">Dosa</a></h5>
									<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
									<!--<span class="price">$17.56</span>-->
								</div>
							</div>
						</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All salad spicy burger wow fadeInUp" data-wow-delay="0.2s">
							<div class="dz-img-box style-7">
								<div class="dz-media">
									<img src="assets/images/gallery/grid4/pic3.jpg" alt="/">
									<div class="dz-meta">
										<ul>
											
												<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
										</ul>
									</div>
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="menu.php">Idli</a></h5>
									<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
									<!--<span class="price">$24.50</span>-->
								</div>
							</div>
						</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All drink sweet salad wow fadeInUp" data-wow-delay="0.4s">
							<div class="dz-img-box style-7">
								<div class="dz-media">
									<img src="assets/images/gallery/grid4/pic4.jpg" alt="/">
									<div class="dz-meta">
										<ul>
											
												<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
										</ul>
									</div>
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="menu.php">Butter Pav Bhaji</a></h5>
									<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
									<!--<span class="price">$11.02</span>-->
								</div>
							</div>
						</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All pizza spicy burger wow fadeInUp" data-wow-delay="0.4s">
							<div class="dz-img-box style-7">
								<div class="dz-media">
									<img src="assets/images/gallery/grid4/pic5.jpg" alt="/">
									<div class="dz-meta">
										<ul>
											
												<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
										</ul>
									</div>
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="menu.php">Veg Grilled Cheese Sandwich</a></h5>
									<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
									<!--<span class="price">$4.56</span>-->
								</div>
							</div>
						</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All drink salad spicy sweet burger wow fadeInUp" data-wow-delay="0.4s">
							<div class="dz-img-box style-7">
								<div class="dz-media">
									<img src="assets/images/gallery/grid4/pic6.jpg" alt="/">
									<div class="dz-meta">
										<ul>
											
												<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
										</ul>
									</div>
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="menu.php">Ghee Pudi Rice</a></h5>
									<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
									<!--<span class="price">$12.20</span>-->
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="container contact-area bg-parallax" style="background-image:url('assets/images/background/pic13.png'); background-attachment: fixed;">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-12 m-b30">
						<div class="contact-head">
							<h4 class="title text-white wow fadeInUp" data-wow-delay="0.2s">Book a Franchise</h4>
							<p class="text-white opacity-75 wow fadeInUp" data-wow-delay="0.4s">Join Our Flavorful Family, Spread Dosa Love and Share South India's Authenticity!
							</p>
						</div>
						<form action="#" method="post">
							<div class="row">
								<div class="col-lg-6 col-md-6 m-b30 m-xl-b50 wow fadeInUp" data-wow-delay="0.2s">
									<div class="input-group input-line">
										<div class="input-group-prepand">
											<i class="flaticon-user"></i>
										</div>
										<input name="FirstName" required type="text" class="form-control" placeholder="Your Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
									<div class="input-group input-line">
										<div class="input-group-prepand">
											<i class="flaticon-phone-call"></i>
										</div>
										<input name="PhoneNumber" required type="text" class="form-control dz-number" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 m-b30 m-xl-b50 wow fadeInUp" data-wow-delay="0.2s">
									<div class="input-group input-line">
										<div class="input-group-prepand">
											<i class="flaticon-placeholder"></i>
										</div>
										<input name="BranchLocation" required type="text" class="form-control" placeholder="Your Branch location">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
									<div class="input-group input-line">
										<div class="input-group-prepand">
											<i class="flaticon-email-1"></i>
										</div>
										<input name="email" required type="text" class="form-control" placeholder="Your Email">
									</div>
								</div>
								<div class="col-sm-12 m-b40" data-wow-delay="0.6s">
									<div class="input-group input-line">
										<div class="input-group-prepand">
											<i class="flaticon-email-1"></i>
										</div>
										<textarea name="Message" required class="form-control" placeholder="Your Message"></textarea>
									</div>
								</div>
								
						<!--		<div class="col-sm-12 m-b40" data-wow-delay="0.6s">-->
						<!--	<label class="form-label text-primary">Message</label>-->
						<!--	<div class="input-group input-line input-black">-->
						<!--		<textarea name="dzMessage" required class="form-control" placeholder="Hi, do you Have a moment to talk About !"></textarea>-->
						<!--	</div>-->
						<!--</div>-->
								<div class="col-lg-12 col-md-12">
									<button type="submit" name="submitcart1" class="btn btn-md btn-primary btn-hover-3 mt-3">
										<span class="btn-text" data-text="Send Inquiry">Send Inquiry</span>
									</button>

								</div>
							</div>
						</form>
						<?php 
                            if (isset($_POST['submitcart1'])) 
                            {
                                date_default_timezone_set('Asia/Kolkata');
                             

                                $to1 = 'dosatherapy@gmail.com';

        $subject1 = "Inquiry Send Successfully";
        $message1 = '<html>
    <body style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f8f8f9;">
    <table bgcolor="#f8f8f9" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9; width: 100%;" valign="top" width="100%">
    <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top;" valign="top">
                  <div style="background-color:#e30016;">
                  <div style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #e30016;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#e30016;">
                  <div style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                  <div style="width:100% !important;">
                  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                  <table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 4px solid #e30016; width: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div style="background-color:#fff;">
                  <div style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #fff;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">
                  <div style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                  <div style="width:100% !important;">
                  <!--[if (!mso)&(!IE)]><!-->
                  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                  <div align="center" style="padding-right: 22px;padding-left: 22px; display: flex;justify-content: center;">
                  <div style="font-size:1px;line-height:22px"> </div>
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">

                          <tbody><tr>

                            <td align="center" valign="top" style="padding:27px 10px 27px 10px">

                              <a href="#m_-7818066713900076196_" class=""><img alt="" src="assets/images/logo.png" style="display:block;font-family:Lato,Helvetica,Arial,sans-serif;color:#ffffff;width:35%; border-radius:8%;" border="0" class="CToWUd"> </a>

                            </td>

                          </tr>

                        </tbody></table>
                  <div style="font-size:1px;line-height:22px"> </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div style="background-color:transparent;">
                  <div style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #f8f8f9;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#f8f8f9;">
                  <div style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                  <div style="width:100% !important;">
                  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                  <table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 20px; padding-right: 20px; padding-bottom: 20px; padding-left: 20px;" valign="top">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div style="background-color:transparent;">
                  <div style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #fff;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">
                  <div style="min-width: 320px; max-width: 840px; display: table-cell; vertical-align: top; width: 840px;">
                  <div style="width:100% !important;">
                  <!--[if (!mso)&(!IE)]><!-->
                  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                  <!--<![endif]-->
                  <table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 0px; padding-bottom: 12px; padding-left: 0px;" valign="top">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>

                  <div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
                  <div style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;">
                  <p style="font-size: 16px; line-height: 1.2; text-align: center; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="color: #e30016;"><strong><span style="font-size: 30px;">Inquiry send from '.$_REQUEST['FirstName'].'</span></strong></span></p>
                  </div>
                  </div>

                  <div align="left" style="padding-top:15px;padding-right:40px;padding-bottom:0px;padding-left:40px;line-height: 32px;">
                  <div>
                  <p style="font-size: 14px; font-weight: 400;"><b>Phone Number : </b>'.$_REQUEST['PhoneNumber'].'</p>
                  <p style="font-size: 14px; font-weight: 400;"><b>Email ID : </b> '.$_REQUEST['email'].'</p>
                  <p style="font-size: 14px;font-weight: 400;"><b>Branch Location : </b>'.$_REQUEST['BranchLocation'].'</p>
                  <p style="font-size: 14px; font-weight: 400;"><b>Message : </b>'.$_REQUEST['Message'].'</p>
                 
                  <p style="font-weight: 600;">Team Dosa Therapy,</p>
                  </div>
                  </div>


                  <table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 60px; padding-right: 0px; padding-bottom: 12px; padding-left: 0px;" valign="top">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div style="background-color:transparent;">
                  <div style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #f8f8f9;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#f8f8f9;">
                  <div style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
                  <div style="width:100% !important;">
                  <!--[if (!mso)&(!IE)]><!-->
                  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                  <!--<![endif]-->
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div style="background-color:transparent;">
                  <div style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #2b303a;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#2b303a;">
                  <div style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
                  <div style="width:100% !important;">
                  <!--[if (!mso)&(!IE)]><!-->
                  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                  <!--<![endif]-->
                  <table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 4px solid #e30016; width: 100%;" valign="top" width="100%">
                  <tbody>
                  <tr style="vertical-align: top;" valign="top">
                  <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>

                  <div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:20px;padding-right:40px;padding-bottom:30px;padding-left:40px;">
                  <div style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                  <p style="font-size: 12px; line-height: 1.2; word-break: break-word; text-align: left; font-family: inherit; mso-line-height-alt: 14px; margin: 0;"><span style="color: #95979c; font-size: 12px;">© Copyright 2023 dhosa therapy</p>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </body>
                  </html>';

                    $headers1 = "MIME-Version: 1.0" . "\r\n";
                    $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";


                    $headers1 .= 'From: dosatherapy@gmail.com' . "\r\n";
                    $headers1 .= 'Cc: ' . "\r\n";

                    $sendmail = mail($to1,$subject1,$message1,$headers1);
        
                                echo "<script>alert('Inquiry Send Successfully.');</script>";
                            }
?>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="widget widget_working bg-primary wow fadeInUp" data-wow-delay="0.4s">
							<div class="head">
								<h5 class="title text-white">Contact Info</h5>
							</div>
							<ul>
								<li>
									<i class="flaticon-placeholder"></i>
									<p>Above Manbhavan Thali, Opp. Titan Watches, Mahatma Nagar, Nashik</p>
								</li>
								<li>
									<i class="flaticon-telephone"></i>
									<p>+91 920 917 7099</p>
								</li>
								<li>
									<i class="flaticon-email-1"></i>
									<p>dosatherapy@gmail.com</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Are Menu-->
		
	</div>
	<!--Footer-->
<?php
include "footer.php";
?>
	