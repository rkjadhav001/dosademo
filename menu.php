
<?php
include "header.php";
?>

<div class="page-content bg-white">
		<!-- Banner  -->
		<div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image: url(&quot;assets/images/banner/bnr3.jpg&quot;); background-size: cover; background-position: center 0px;">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Our Menu</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Our Menu</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Our Menu-->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-xl-10 col-lg-9 col-md-12">
						<div class="site-filters style-1 clearfix">
							<ul class="filters" data-bs-toggle="buttons">
								<li data-filter=".All" class="btn active"><a href="javascript:void(0);"><span><i class="flaticon-fast-food"></i></span>ALL</a></li>
								<li data-filter=".beverage" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-cocktail"></i></span>BEVERAGES</a></li>
								<li data-filter=".idli" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-pizza-slice"></i></span>IDLI / VADA</a></li>
								<li data-filter=".dosa" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-salad"></i></span>DOSA & UTTAPAM</a></li>
								<li data-filter=".ragi" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-cupcake"></i></span>RAGI & RAVA DOSA</a></li>
								<li data-filter=".rice" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-chili-pepper"></i></span>RICE</a></li>
								<li data-filter=".pavbhaji" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-hamburger-1"></i></span>PAV BHAJI</a></li>
								<li data-filter=".sandwich" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-hamburger-1"></i></span>SANDWICHES</a></li>
								<li data-filter=".juice" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-hamburger-1"></i></span>JUICES (SEASONAL)</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-xl-2 col-lg-3 col-md-12 text-lg-end mb-lg-0 m-b30 d-flex d-lg-block align-items-center justify-content-between">
						<strong class="filter-item-show d-lg-none">51,740 items</strong>
						<a data-bs-toggle="offcanvas" href="#offcanvasFilter" role="button" aria-controls="offcanvasFilter" class="btn btn-primary filter-btn btn-hover-2">
							Filter <span><i class="icon-filter m-l5"></i></span>
						</a>
					</div> -->
					<div class="offcanvas offcanvas-end filter-category-sidebar" tabindex="-1" id="offcanvasFilter">
						<button type="button" class="btn-close style-1" data-bs-dismiss="offcanvas" aria-label="Close"><i class="la la-close"></i></button>
						<div class="offcanvas-body">
							<!--<div class="widget">-->
							<!--	<div class="widget-title">-->
							<!--		<h4 class="title">Refine By Categories</h4>-->
							<!--	</div>-->
       <!--                         <div class="category-check-list">-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-01">-->
							<!--			<label class="form-check-label" for="productCheckBox-01">-->
							<!--				Pizza-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-02">-->
							<!--			<label class="form-check-label" for="productCheckBox-02">-->
							<!--				Hamburger-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-03">-->
							<!--			<label class="form-check-label" for="productCheckBox-03">-->
							<!--				Cold Drink-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-04">-->
							<!--			<label class="form-check-label" for="productCheckBox-04">-->
							<!--				Sandwich-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-05">-->
							<!--			<label class="form-check-label" for="productCheckBox-05">-->
							<!--				Muffin-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-06">-->
							<!--			<label class="form-check-label" for="productCheckBox-06">-->
							<!--				Burrito-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-07">-->
							<!--			<label class="form-check-label" for="productCheckBox-07">-->
							<!--				Taco-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-08">-->
							<!--			<label class="form-check-label" for="productCheckBox-08">-->
							<!--				Hot Dog-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-09">-->
							<!--			<label class="form-check-label" for="productCheckBox-09">-->
							<!--				Noodles-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-10">-->
							<!--			<label class="form-check-label" for="productCheckBox-10">-->
							<!--				Macrony-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-11">-->
							<!--			<label class="form-check-label" for="productCheckBox-11">-->
							<!--				Cheese Pasta-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-12">-->
							<!--			<label class="form-check-label" for="productCheckBox-12">-->
							<!--				Fish Fry-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-13">-->
							<!--			<label class="form-check-label" for="productCheckBox-13">-->
							<!--				Cold Coffee-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-14">-->
							<!--			<label class="form-check-label" for="productCheckBox-14">-->
							<!--				Manchurian-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-15">-->
							<!--			<label class="form-check-label" for="productCheckBox-15">-->
							<!--				Dosa-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-16">-->
							<!--			<label class="form-check-label" for="productCheckBox-16">-->
							<!--				Momos-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-17">-->
							<!--			<label class="form-check-label" for="productCheckBox-17">-->
							<!--				Soup-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-18">-->
							<!--			<label class="form-check-label" for="productCheckBox-18">-->
							<!--				Chicken Burger-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-19">-->
							<!--			<label class="form-check-label" for="productCheckBox-19">-->
							<!--				Beverages-->
							<!--			</label>-->
							<!--		</div>-->
							<!--		<div class="form-check">-->
							<!--			<input class="form-check-input" type="checkbox" value="" id="productCheckBox-20">-->
							<!--			<label class="form-check-label" for="productCheckBox-20">-->
							<!--				Lemon Lime Soda-->
							<!--			</label>-->
							<!--		</div>-->
							<!--	</div>-->
       <!--                     </div>-->
							<div class="widget">
								<div class="widget-title">
									<h4 class="title">Near Me</h4>
								</div>
                                <div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="productCheckBox-21">
									<label class="form-check-label" for="productCheckBox-21">
										Ortus Restaurant
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="productCheckBox-22">
									<label class="form-check-label" for="productCheckBox-22">
										Amar Punjabi Restaurant
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="productCheckBox-23">
									<label class="form-check-label" for="productCheckBox-23">
										Other
									</label>
								</div>
                            </div>
							<div class="widget rating-filter">
								<div class="widget-title">
									<h4 class="title">Rating</h4>
								</div>
                                <ul>
									<li><span>5 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>4 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>3 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>2 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>1 Star</span></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
                            </div>
							<div class="widget">
								<div class="widget-title">
									<h4 class="title">Price Range</h4>
								</div>
								<div class="range-slider style-1">
									<div id="slider-tooltips" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(10%, 0px) scale(0.6, 1);"></div></div><div class="noUi-origin" style="transform: translate(-90%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="70.0" aria-valuenow="10.0" aria-valuetext="10.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">10.0</div></div></div><div class="noUi-origin" style="transform: translate(-30%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="10.0" aria-valuemax="100.0" aria-valuenow="70.0" aria-valuetext="70.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">70.00</div></div></div></div></div>
								</div>
                            </div>
						</div>
					</div>
				</div>
				<ul id="masonry" class="row" style="position: relative; height: 6679.68px;">
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 0px; top: 0px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic1.jpg" alt="/">
								<div class="dz-meta">
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Tea</a></h5>
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 399.984px; top: 0px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic2.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Mineral Water</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 799.968px; top: 0px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic3.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 3.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ice Tea</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$24.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 0px; top: 333.984px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic4.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 5.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Lemon Tea</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$11.02</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 399.984px; top: 333.984px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic5.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Soft Drink</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 799.968px; top: 333.984px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic6.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Plain Buttermilk</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$12.20</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 0px; top: 667.968px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic7.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.1</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Fresh Lime Water</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$10.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 399.984px; top: 667.968px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic8.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Fresh Lime Soda</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 799.968px; top: 667.968px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic9.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Coffee</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 0px; top: 1001.95px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic10.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Masala Buttermilk</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 399.984px; top: 1001.95px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic11.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Hot Milk</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 799.968px; top: 1001.95px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic12.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 3.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Filter Coffee</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$24.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 0px; top: 1335.94px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic13.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 5.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Lassi</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$11.02</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All beverage" style="position: absolute; left: 399.984px; top: 1335.94px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic14.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Cold Coffee</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All idli" style="position: absolute; left: 799.968px; top: 1335.94px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic15.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Idli</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$12.20</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All idli" style="position: absolute; left: 0px; top: 1669.92px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic16.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.1</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Idli</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$10.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All idli" style="position: absolute; left: 399.984px; top: 1669.92px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic17.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Pudi Idli</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All idli" style="position: absolute; left: 799.968px; top: 1669.92px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic18.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Pudi Tatte Idli</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All idli" style="position: absolute; left: 0px; top: 2003.9px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic19.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
										<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Medu Vada</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All idli" style="position: absolute; left: 399.984px; top: 2003.9px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic20.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Upma</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All dosa" style="position: absolute; left: 799.968px; top: 2003.9px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic21.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 3.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Plain Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$24.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All dosa" style="position: absolute; left: 0px; top: 2337.89px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic22.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 5.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Pudi Plain Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$11.02</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All dosa" style="position: absolute; left: 399.984px; top: 2337.89px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic23.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Pudi Masala Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All dosa" style="position: absolute; left: 799.968px; top: 2337.89px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic24.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Garlic Roast Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$12.20</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All dosa" style="position: absolute; left: 0px; top: 2671.87px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic25.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.1</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Onion Uttapam</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$10.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All dosa" style="position: absolute; left: 399.984px; top: 2671.87px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic26.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Tomato Uttapam</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All dosa" style="position: absolute; left: 799.968px; top: 2671.87px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic27.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Tomato Onion Uttapam</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All ragi" style="position: absolute; left: 0px; top: 3005.86px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic28.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
										 	<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ragi Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sweet" style="position: absolute; left: 399.984px; top: 3005.86px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic29.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ragi Onion Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sweet" style="position: absolute; left: 799.968px; top: 3005.86px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic30.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 3.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Rava Plain Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$24.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sweet" style="position: absolute; left: 0px; top: 3339.84px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic31.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 5.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Rava Masala Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$11.02</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sweet" style="position: absolute; left: 399.984px; top: 3339.84px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic32.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Rava Onion</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sweet" style="position: absolute; left: 799.968px; top: 3339.84px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic33.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Masala Dosa</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$12.20</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All rice" style="position: absolute; left: 0px; top: 3673.82px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic34.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.1</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ghee Pudi Rice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$10.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All spicy" style="position: absolute; left: 399.984px; top: 3673.82px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic35.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Tomato Rice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All spicy" style="position: absolute; left: 799.968px; top: 3673.82px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic36.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Lemon Rice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All spicy" style="position: absolute; left: 0px; top: 4007.81px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic37.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
										<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Curd Rice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All pavbhaji" style="position: absolute; left: 399.984px; top: 4007.81px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic38.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Butter Pav Bhaji</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All burger" style="position: absolute; left: 799.968px; top: 4007.81px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic39.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 3.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Cheese Pav Bhaji</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$24.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 0px; top: 4341.79px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic40.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 5.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Bread Butter</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$11.02</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 399.984px; top: 4341.79px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic41.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Bread Butter Toast</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 799.968px; top: 4341.79px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic42.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Bread Butter Jam</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$12.20</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 0px; top: 4675.78px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic43.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.1</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Veg Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$10.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 399.984px; top: 4675.78px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic44.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Veg Grilled Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 799.968px; top: 4675.78px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic45.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Plain Cheese Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 0px; top: 5009.76px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic46.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
									 	<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.5</li> --> 
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Veg Grilled Cheese Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 399.984px; top: 5009.76px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic47.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Aloo Cheese Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 799.968px; top: 5009.76px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic48.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 3.5</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Grill Club Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$24.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 0px; top: 5343.74px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic49.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 5.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Paneer Tikka Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$11.02</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 399.984px; top: 5343.74px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic50.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Mexican Panini Sandwich</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 799.968px; top: 5343.74px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic51.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Cheese Burst Corn Panini</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$12.20</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 0px; top: 5677.73px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic52.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.1</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Paneer Tikka Panini</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$10.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All sandwich" style="position: absolute; left: 399.984px; top: 5677.73px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic53.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Cheese Mushroom Panini</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All juice" style="position: absolute; left: 799.968px; top: 5677.73px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic54.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Orange Juice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All juice" style="position: absolute; left: 0px; top: 6011.71px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic55.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Pineapple Juice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All juice" style="position: absolute; left: 399.984px; top: 6011.71px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic56.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Mosambi Juice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$12.20</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All juice" style="position: absolute; left: 799.968px; top: 6011.71px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic57.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!--<li class="rating"><i class="fa-solid fa-star"></i> 4.1</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Watermelon Juice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$10.50</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All juice" style="position: absolute; left: 0px; top: 6345.7px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic58.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Mango Juice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$4.56</span>-->
							</div>
						</div>
					</li>
					<li class="card-container col-lg-4 col-md-6 m-b30 All juice" style="position: absolute; left: 399.984px; top: 6345.7px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic59.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Ganga Jamuna</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
						<li class="card-container col-lg-4 col-md-6 m-b30 All juice" style="position: absolute; left: 799.968px; top: 6345.7px;">
						<div class="dz-img-box style-7">
							<div class="dz-media">
								<img src="assets/images/gallery/grid6/pic60.jpg" alt="/">
								<div class="dz-meta">
									<ul>
											<!-- <li class="seller">Top Seller</li> -->
											<!-- <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li> -->
									</ul>
								</div>
							</div>
							<div class="dz-content">
								<h5 class="title"><a>Apple Juice</a></h5>
								<!--<p>It is a long established fact that a reader will be distracted by the readable.</p>-->
								<!--<span class="price">$17.56</span>-->
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<!-- Our Menu-->
		
	</div>
	<?php
include "footer.php";
?>