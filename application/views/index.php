	<?php include 'include/header.php' ?>
	<!-- Banner -->
	<div class="banner">
		<div class="owl-carousel owl-loaded banner-slide">
			<div class="item">
				<img src="assets/images/slider-1.jpg" alt="">
				<div class="caption">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<button type="button" class="trigger-popup" data-target="search_home">search home</button>
				</div>
			</div>
			<div class="item">
				<img src="assets/images/slider-1.jpg" alt="">
				<div class="caption">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<button type="button" class="trigger-popup" data-target="search_home">search home</button>
				</div>
			</div>
			<div class="item">
				<img src="assets/images/slider-1.jpg" alt="">
				<div class="caption">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<button type="button" class="trigger-popup" data-target="search_home">search home</button>
				</div>
			</div>
		</div>
	</di

	<!-- Looking For -->
	<div class="looking-for">
		<div class="container">
			<h3>WHAT ARE YOU LOOKING FOR?</h3>
			<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
			<div class="row">
				<div class="block">
					<div class="image-block">
						<img src="assets/images/icon-apartment.png" alt="">
						<figure></figure>
					</div>
					<h4>apartments</h4>
					<p>Consectetur adipisicing elit. Ex provident, aut modi quidem enim ipsam veritatis maxime est.</p>
				</div>
				<div class="block">
					<div class="image-block">
						<img src="assets/images/icon-house.png" alt="">
						<figure></figure>
					</div>
					<h4>houses</h4>
					<p>Consectetur adipisicing elit. Ex provident, aut modi quidem enim ipsam veritatis maxime est.</p>
				</div>
				<div class="block">
					<div class="image-block">
						<img src="assets/images/icon-office.png" alt="">
						<figure></figure>
					</div>
					<h4>offices</h4>
					<p>Consectetur adipisicing elit. Ex provident, aut modi quidem enim ipsam veritatis maxime est.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- About Us -->
	<div class="about-us">
		<div class="row">
			<div class="aside image-aside">
				<img src="assets/images/about-image.jpg" alt="">
			</div>
			<div class="aside text-aside">
				<div class="block">
					<h2>Get the valid information of Building, Properties and Projects for <span>BUY</span> or <span>RENT</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quasi dolorum similique porro recusandae ipsam a minima accusamus suscipit at. Enim recusandae doloremque nostrum obcaecati beatae. Quam ipsam, voluptate esse. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repudiandae beatae, rem sed nam aut, ex facilis numquam dicta delectus modi quos, animi quia consequuntur maxime sunt quae ducimus autem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde provident quisquam adipisci numquam hic excepturi ex facere natus sit illum atque, debitis ullam aut repudiandae dolores tempora tenetur quae sapiente.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- What We Do -->
	<div class="what-we-do">
		<div class="container">
			<h3>What We Do</h3>
			<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
			<div class="row">
				<div class="block">
					<img src="assets/images/icon-home-search.png" alt="">
					<h5>Search Your Home</h5>
					<p>Consectetur adipisicing elit. Ex provident, aut modi quidem enim ipsam veritatis maxime est.</p>
				</div>
				<div class="block">
					<img src="assets/images/icon-make-contact.png" alt="">
					<h5>Let's Contact With Us</h5>
					<p>Consectetur adipisicing elit. Ex provident, aut modi quidem enim ipsam veritatis maxime est.</p>
				</div>
				<div class="block">
					<img src="assets/images/icon-deal-payment.png" alt="">
					<h5>Make a Deal and Payment</h5>
					<p>Consectetur adipisicing elit. Ex provident, aut modi quidem enim ipsam veritatis maxime est.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-us">
		<div class="container">
			<h4>Do you have any question?</h4>
			<h5>please leave us a message by <a href="mailto:support@factchech.com">support@factchech.com</a> or call us on <span>+1 0945675647</span></h5>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'include/footer.php' ?>
	
	<!-- Login Popup -->
	
<!-- Search Home Popup -->
	<div class="custom-popup search_home" role="alert">
		<div class="custom-popup-container">
			<a href="javascript:void(0)" class="custom-popup-close">x</a>
			<h4>Search your home</h4>
			<form action="#" method="POST" name="search">
				<ul>
					<li>
						<select name="country" id="country" disabled="">
							<option value="">Canada</option>
						</select>
					</li>
					<li>
						<select name="province" id="province">
							<option value="">Alberta (AB)</option>
							<option value="">British Columbia (BC)</option>
							<option value="">Prince Edward Island (PE)</option>
							<option value="">Manitoba (MB)</option>
							<option value="">New Brunswick (NB)</option>
							<option value="">Nova Scotia (NS)</option>
							<option value="">Ontario (ON)</option>
							<option value="">Quebec (QC)</option>
							<option value="">Saskatchewan (SK)</option>
							<option value="">Newfoundland and Labrador (NL)	</option>
							<option value="">Nunavut (NU)	</option>
							<option value="">Yukon (YT)	</option>
							<option value="">Northwest Territories (NT)	</option>
						</select>
					</li>
					<li>
						<input type="text" name="postal_code" id="postal_code" placeholder="Postal Code">
					</li>
					<li>
						<input type="text" name="house_no" id="house_no" placeholder="House Number">
					</li>
					<li>
						<textarea name="address" id="address" placeholder="Address"></textarea>
					</li>
					<li>
						<input type="submit" value="Search" class="btn btn-blue">
					</li>
				</ul>
			</form>
		</div>
	</div>
	