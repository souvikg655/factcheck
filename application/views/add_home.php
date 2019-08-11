<head><title>Add Home</title></head>

<?php include 'include/realter_header.php' ?>

<div class="main-panel">
	<div class="white-box add-home">
		<h3>field the details of your home</h3>

		


		<form action="javaScript:Void(0)" method="POST" enctype='multipart/form-data'>
			<ul>
				<li>
					<label for="">title</label>
					<input type="text" name="title" id="title">
				</li>
				<li>
					<div class="col-3">
						<label for="">numbers of bedroom(s)</label>
						<input type="number" name="bedroom" id="bedroom">
					</div>
					<div class="col-3">
						<label for="">numbers of bathroom(s)</label>
						<input type="number" name="bathroom" id="bathroom">
					</div>
					<div class="col-3">
						<label for="">property type</label>
						<select name="property" id="property">
							<option value="House">house</option>
							<option value="Appertment">appertment</option>
						</select>
					</div>
				</li>
				<li>
					<div class="col-3">
						<label for="">age of house</label>
						<input type="text" name="house_age" id="house_age">
					</div>
					<div class="col-3">
						<label for="">Area (Sq Ft)</label>
						<input type="text" name="area" id="area">
					</div>
					<div class="col-3">
						<label for="">beside road</label>
						<fieldset>
							<input type="radio" name="beside_road" value="YES" checked> <span>Yes</span>
							<input type="radio" name="beside_road" value="NO"> <span>No</span>
						</fieldset>
					</div>
				</li>
				<li class="address">
					<div class="col-2">
						<label for="">country</label>
						<select name="country" id="country">
							<option value="canada">Canada</option>
						</select>
					</div>
					
					<div class="col-2">
						<label for="">province/territories</label>
						<select name="province" id="province">
							<option value="Alberta">Alberta (AB)</option>
							<option value="British Columbia">British Columbia (BC)</option>
							<option value="Prince Edward Island">Prince Edward Island (PE)</option>
							<option value="Manitoba">Manitoba (MB)</option>
							<option value="New Brunswick">New Brunswick (NB)</option>
							<option value="Nova Scotia">Nova Scotia (NS)</option>
							<option value="Ontario">Ontario (ON)</option>
							<option value="Quebec">Quebec (QC)</option>
							<option value="Saskatchewan">Saskatchewan (SK)</option>
							<option value="Newfoundland and Labrador">Newfoundland and Labrador (NL)	</option>
							<option value="Nunavut">Nunavut (NU)	</option>
							<option value="Yukon">Yukon (YT)	</option>
							<option value="Northwest Territories">Northwest Territories (NT)	</option>
						</select>
					</div>
				</li>
				<li>
					<div class="col-2">
						<label for="">Postal Code</label>
						<input type="text" name="postal" id="postal">
					</div>
					<div class="col-2">
						<label for="">house number</label>
						<input type="text" name="house_no" id="house_no">
					</div>
				</li>
				<li>
					<label for="">address</label>
					<input type="text" name="address" id="address">
				</li>
				<li>
					<!-- <label for="">Do you have municipality paper?</label>
					<fieldset>
						<input type="radio" name="municipality_paper_check" value="YES" checked> <span>Yes</span>
						<input type="radio" name="municipality_paper_check" value="NO"> <span>No</span>
					</fieldset> -->
				</li>
				<li class="first-hide">
					<label for="">upload municipality paper (one image only)</label>
					<input type="file" name="municipality_paper" id="municipality_paper">
				</li>
				<li>
					<input type="file" name="municipality_paper" id="municipality_paper">
				</li>
<!-- 				<li>
					<label for="">Do you have property image?</label>
					<fieldset>
						<input type="radio" name="property_image_ckeck" value="YES" checked> <span>Yes</span>
						<input type="radio" name="property_image_ckeck" value="NO"> <span>No</span>
					</fieldset>
				</li>
				<li class="first-hide">
					<label for="">upload property image (maximum 6 images)</label>
					<input type="file" name="property_image" id="property_image">
				</li> -->
				<li>
					<input type="button" id="btn_add_home" value="save">
				</li>
			</ul>
		</form>
	</div>
</div>
</div>

<?php include 'include/realter_footer.php' ?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#btn_add_home").click(function(){
			var title =  $("#title").val();
			var bedroom =  $("#bedroom").val();
			var bathroom =  $("#bathroom").val();
			
			var property_type =  $("#property").val();
			var house_age =  $("#house_age").val();
			var area =  $("#area").val();

			var beside_road = $("input[name='beside_road']:checked").val();
			var country =  $("#country").val();
			var province =  $("#province").val();
			
			var postal =  $("#postal").val();
			var house_no =  $("#house_no").val();
			var address =  $("#address").val();
			
			//var municipality_paper_check = $("input[name='municipality_paper_check']:checked").val();
			//var municipality_paper =  $("#municipality_paper").val();

			// var property_image_ckeck = $("input[name='property_image_ckeck']:checked").val();
			//var property_image =  $("#property_image").val();

			if(title == ''){
				toastr["error"]("Please enter title");
				return false;
			}
			if(bedroom == ''){
				toastr["error"]("Please enter number of bedroom");
				return false;
			}
			if(bathroom == ''){
				toastr["error"]("Please enter number of bathroom");
				return false;
			}
			if(property_type == ''){
				toastr["error"]("Please enter property");
				return false;
			}
			if(house_age == ''){
				toastr["error"]("Please enter house age");
				return false;
			}
			if(area == ''){
				toastr["error"]("Please enter area");
				return false;
			}
			if(beside_road == ''){
				toastr["error"]("Please enter beside road");
				return false;
			}
			if(country == ''){
				toastr["error"]("Please enter country");
				return false;
			}
			if(province == ''){
				toastr["error"]("Please enter province");
				return false;
			}
			if(postal == ''){
				toastr["error"]("Please enter postal code");
				return false;
			}
			if(house_no == ''){
				toastr["error"]("Please enter postal house no");
				return false;
			}
			if(address == ''){
				toastr["error"]("Please enter address");
				return false;
			}
			// if(municipality_paper_check == ''){
			// 	toastr["error"]("Please enter municipality paper check (change message)");
			// 	return false;
			// }
			// if(municipality_paper == ''){
			// 	toastr["error"]("Please enter mmunicipality paper (change message)");
			// 	return false;
			// }

			// if(property_image_ckeck == ''){
			// 	toastr["error"]("Please enter property image ckeck (change message)");
			// 	return false;
			// }
			// if(property_image == ''){
			// 	toastr["error"]("Please enter property image (change message)");
			// 	return false;
			// }

			var formdata = new FormData();
			formdata.append("realtor_id", 2);
			formdata.append("title", title);
			formdata.append("bedroom", bedroom);
			formdata.append("bathroom", bathroom);
			formdata.append("property_type", property_type);
			formdata.append("house_age", house_age);
			formdata.append("area", area);
			formdata.append("beside_road", beside_road);
			formdata.append("country", country);
			formdata.append("province", province);
			formdata.append("postal", postal);
			formdata.append("house_no", house_no);
			formdata.append("address", address);

			var ajaxReq = $.ajax({
				url: '<?php echo base_url()?>home/insert_home',
				type: 'POST',
				processData: false,
				contentType: false,
				data: formdata,
				beforeSend: function (xhr) {
				},
				success: function (data) {

				}
			});
		});
	});
</script>