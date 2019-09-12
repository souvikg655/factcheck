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
			<a href="javascript:void(0)" class="custom-popup-close close_popup">x</a>
			<h4>Search your home</h4>
			<ul>
				<!-- <li>
					<select name="country" id="country" disabled="">
						<option value="" class="searchform">Canada</option>
					</select>
				</li> -->
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
					<div class="autocomplete">
						<input class="searchform" name="postal_code" id="postal_code" placeholder="Postal Code (Max 2 characters)">
					</div>
				</li>
				<li>
					<input type="text" class="searchform" name="house_no" id="house_no" placeholder="House Number">
				</li>
				<li>
					<input type="text" class="searchform" name="municipality_name" id="municipality_name" placeholder="Municipality Name">
				</li>
				<li>
					<input type="text" class="searchform" name="street_name" id="street_name" placeholder="Street Name">
				</li>
				<li>
					<input type="text" class="searchform" name="street_no" id="street_no" placeholder="Street No.">
				</li>
				
				<li>
					<input type="hidden" id="payment_popup" value="Search" class="btn btn-blue trigger-popup" data-target="payment_popup">
					
					<input type="button" value="Search" class="btn btn-blue btn_search">
				</li>
			</ul>
		</div>
	</div>

	<script>
		function autocomplete(inp, arr) {
			var currentFocus;
			inp.addEventListener("input", function(e) {
				var a, b, i, val = this.value;
				closeAllLists();
				if (!val) { return false;}
				currentFocus = -1;
				a = document.createElement("DIV");
				a.setAttribute("id", this.id + "autocomplete-list");
				a.setAttribute("class", "autocomplete-items");
				this.parentNode.appendChild(a);
				for (i = 0; i < arr.length; i++) {
					if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
						b = document.createElement("DIV");
						b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
						b.innerHTML += arr[i].substr(val.length);
						b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
						b.addEventListener("click", function(e) {
							inp.value = this.getElementsByTagName("input")[0].value;
							closeAllLists();
						});
						a.appendChild(b);
					}
				}
			});
			inp.addEventListener("keydown", function(e) {
				var x = document.getElementById(this.id + "autocomplete-list");
				if (x) x = x.getElementsByTagName("div");
				if (e.keyCode == 40) {
					currentFocus++;
					addActive(x);
				} else if (e.keyCode == 38) {
					currentFocus--;
					addActive(x);
				} else if (e.keyCode == 13) {
					e.preventDefault();
					if (currentFocus > -1) {
						if (x) x[currentFocus].click();
					}
				}
			});
			function addActive(x) {
				if (!x) return false;
				removeActive(x);
				if (currentFocus >= x.length) currentFocus = 0;
				if (currentFocus < 0) currentFocus = (x.length - 1);
				x[currentFocus].classList.add("autocomplete-active");
			}
			function removeActive(x) {
				for (var i = 0; i < x.length; i++) {
					x[i].classList.remove("autocomplete-active");
				}
			}
			function closeAllLists(elmnt) {
				var x = document.getElementsByClassName("autocomplete-items");
				for (var i = 0; i < x.length; i++) {
					if (elmnt != x[i] && elmnt != inp) {
						x[i].parentNode.removeChild(x[i]);
					}
				}
			}
			document.addEventListener("click", function (e) {
				closeAllLists(e.target);
			});
		}

		$(document).ready(function(){
			$("#postal_code").keyup(function(){
				var text = $('input:text[name=postal_code]').val();

				if(text != ''){

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

							if(obj != ''){

								var postal_code_arr = [];
								for(var i=0; i<obj.length; i++){
									postal_code_arr.push(obj[i]);
								}

								autocomplete(document.getElementById("postal_code"), postal_code_arr);
							}
						},		
					});
				}

			});
		});
	</script>
	

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
			$(".btn_search").click(function(){
				var province =  $("#province").val();
				var city =  $("#city").val();
				var postal_code =  $("#postal_code").val();;
				var house_no =  $("#house_no").val();
				var municipality_name =  $("#municipality_name").val();
				var street_name =  $("#street_name").val();
				var street_no =  $("#street_no").val();


				var formdata = new FormData();
				formdata.append("province", province);
				formdata.append("city", city);
				formdata.append("postal_code", postal_code);
				formdata.append("house_no", house_no);
				formdata.append("municipality_name", municipality_name);
				formdata.append("street_name", street_name);
				formdata.append("street_no", street_no);
				

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
							$(".close_popup").click();
							//console.log(obj[0].id);
							$("#payment_popup").click();
							
						}else{
							alert("Not Found");
						}
					}
				});
			});
		});
		$(document).ready(function(){
			$(".mail_id_send").click(function(){
				var email_id =  $("#email_id").val();
				var home_id =  $("#home_id").val();
				var email_regex = new RegExp('^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+');
				home_id = 21;

				if(email_id == ''){
					toastr["error"]("Email Id NULL");
					return false;
				}
				if(email_regex.test(email_id)){
					var formdata = new FormData();
					formdata.append("email_id", email_id);
					formdata.append("home_id", home_id);

					var ajaxReq = $.ajax({
						url: '<?php echo base_url()?>email/send_email',
						type: 'POST',
						processData: false,
						contentType: false,
						data: formdata,
						beforeSend: function (xhr) {
						},
						success: function (data) {
							var obj = jQuery.parseJSON(data);
							if(obj['status']){
								$(".close_popup").click();
								toastr["success"](obj['message']);
							}else{
								toastr["error"](obj['message']);
							}
						},		
					});
				}else{
					toastr["error"]("Send valid email id");
					return false;
				}

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
	<div class="custom-popup payment_popup"  id="payment_option" role="alert">
		<div class="custom-popup-container">
			<a href="javascript:void(0)" class="custom-popup-close">x</a>
			<h5>Send your email id</h5>
			<input type="email" name="email_id" id="email_id">
			<a type="button" href="javascript:void(0);" class="btn mail_id_send">Send</a>
		</div>
	</div>

	

