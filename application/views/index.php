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
	</div>

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
					<h2>Get the valid information of Building, Properties and Projects for <a href="javascript:void(0);">enquiry</a></h2>
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
			<ul>
				<li>
					<select name="country" id="country" disabled="">
						<option value="" class="searchform">Canada</option>
					</select>
				</li>
				<li>
					<select name="province" id="province">
						<?php 
						foreach ($province as $prov){
							?>
							<option class="searchform" value="<?=$prov->province;?>"><?=$prov->province;?></option>
						<?php } ?>
					</select>
				</li>
				<li>
					<select name="city" id="city" class="searchform"></select>
				</li>
				<li>
					<input type="text" class="searchform" name="postal_code" id="postal_code" placeholder="Postal Code">
				</li>
				<h6 id="postal_code_results"></h6>
				<li>
					<input type="text" class="searchform" name="house_no" id="house_no" placeholder="House Number">
				</li>
				<li>
					<textarea name="address" class="searchform" id="address" placeholder="Address"></textarea>
				</li>
				<li>
					<input type="submit" value="Search" class="btn btn-blue btn_search">
				</li>
			</ul>
		</div>
	</div>
	

	<script type="text/javascript">
		$(".searchform").keyup(function(event) {
			if (event.keyCode === 13) {
				$(".btn_search").click();
			}
		});

		$("#province").change(function() {
			var val = this.value;

			var formdata = new FormData();
			formdata.append("province", val);

			var ajaxReq = $.ajax({
				url: '<?php echo base_url()?>user/get_city',
				type: 'POST',
				processData: false,
				contentType: false,
				data: formdata,
				beforeSend: function (xhr) {
				},
				success: function (data) {
					var obj = jQuery.parseJSON(data);
					st ='';
					for(var i=0; i<obj.length; i++){
						st = st + '<option value="'+obj[i]['city']+'">'+obj[i]['city']+'</option>';
					}
					$("#city").html(st);
				}
			});
		}).change();

		$(document).ready(function(){
			
			$("#postal_code").keyup(function(){
				
				var text = $('input:text[name=postal_code]').val();

				//console.log(text);

				var formdata = new FormData();
				formdata.append("postal_code", text);

				var ajaxReq = $.ajax({
					url: '<?php echo base_url()?>home/is_exist_postal_code',
					type: 'POST',
					processData: false,
					contentType: false,
					data: formdata,
					beforeSend: function (xhr) {
					},
					success: function (data) {
						var obj = jQuery.parseJSON(data);
						var data = '';
						$.each(obj, function(index, val) {
						    data += val.postal+", ";
						    //console.log(val.postal);
						});
						data = data.replace(/,\s*$/, "");

						$("#postal_code_results").text(data);
					},		
				});

			});
		});

		$(document).ready(function(){
			$(".btn_search").click(function(){
				var province =  $("#province").val();
				var city =  $("#city").val();
				var postal_code =  $("#postal_code").val();;
				var house_no =  $("#house_no").val();
				var address =  $("#address").val();

				var formdata = new FormData();
				formdata.append("province", province);
				formdata.append("city", city);
				formdata.append("postal_code", postal_code);
				formdata.append("house_no", house_no);
				formdata.append("address", address);
				

				var ajaxReq = $.ajax({
					url: '<?php echo base_url()?>home/search_home',
					type: 'POST',
					processData: false,
					contentType: false,
					data: formdata,
					beforeSend: function (xhr) {
					},
					success: function (data) {
						var obj = jQuery.parseJSON(data);
						if(obj != ''){
							console.log(obj);
							//$(".payment_popup").show();
							// var st = '';
							// st = st + '<div class="custom-popup-container"> <a href="javascript:void(0)" class="custom-popup-close">x</a> <h5>You have to pay $5 for this</h5> <a href="javascript:void(0);" class="btn">start payment</a> </div>';
							var user_mail = prompt("This home found. Send mail id and pay $5 and give full details in your mail.", "");
							if(user_mail != ''){
								var formdata = new FormData();
								formdata.append("user_mail", user_mail);

								var ajaxReq = $.ajax({
									url: '<?php echo base_url()?>home/search_home',
									type: 'POST',
									processData: false,
									contentType: false,
									data: formdata,
									beforeSend: function (xhr) {
									},
									success: function (data) {
									}
								});


							}
						}else{
							alert("Not Found");
						}
						// $("#payment_option").html(st).modal('show');
					},
				});

			}); 
		});
	</script>

	<!-- <div class="custom-popup payment_popup"  id="payment_option" role="alert">
		<div class="custom-popup-container">
			<a href="javascript:void(0)" class="custom-popup-close">x</a>
			<h5>You have to pay $5 for this</h5>
			<a href="javascript:void(0);" class="btn">start payment</a>
		</div>
	</div> -->

