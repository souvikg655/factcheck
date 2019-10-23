<head><title>Add Home</title></head>

<?php include 'include/realter_header.php' ?>

<div class="main-panel">
	<div class="white-box add-home">
		<h4>Location</h4>
		<form action="javaScript:Void(0);">
			<ul>
				<li>
					<div class="col-2">
						<select name="country" id="country" class="select-text" required="" disabled="">
							<option value="" disabled="" selected=""></option>
							<option value="canada">Canada</option>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">Canada</label>
					</div>
					<div class="col-2">
						<input type="text" name="municipality_name" id="municipality_name" required="">
						<span class="highlight"></span>
						<label>Municipality Name</label>
					</div>
				</li>
			</ul>
		</form>
	</div>
	<div class="white-box add-home">
		<h4>Address</h4>
		<form action="javaScript:Void(0);">
			<ul>
				<li>
					<div class="col-3">
						<select name="province" id="province" class="select-text" required="">
							<?php 
							foreach ($province as $prov){
								?>
								<option value="<?=$prov->province;?>"><?=$prov->province;?></option>
							<?php } ?>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">province / territories</label>
					</div>
					<div class="col-3">
						<select name="city" id="city" class="select-text" required="">
							<option value="" disabled="" selected=""></option>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">City</label>
					</div>
					<div class="col-3">
						<input type="text" name="postal" id="postal" required="">
						<span class="highlight"></span>
						<label>Postal Code</label>
					</div>
				</li>
				<li>
					<div class="col-3">
						<input type="number" name="house_no" id="house_no" required="">
						<span class="highlight"></span>
						<label>house number</label>
					</div>
					<div class="col-3">
						<input type="number" name="street_no" id="street_no" required="">
						<span class="highlight"></span>
						<label>Street no.</label>
					</div>

					<div class="col-3">
						<input type="text" name="street_name" id="street_name" required="">
						<span class="highlight"></span>
						<label>Street Name</label>
					</div>
				</li>
			</ul>
		</form>
	</div>
	<div class="white-box add-home">
		<h4>House Details</h4>
		<form action="javaScript:Void(0)" method="POST" enctype='multipart/form-data'>
			<ul>
				<li>
					<div class="col-3">
						<input type="number" name="bedroom" id="bedroom" required="">
						<span class="highlight"></span>
						<label>numbers of bedroom(s)</label>
					</div>
					<div class="col-3">
						<input type="number" name="bathroom" id="bathroom" required="">
						<span class="highlight"></span>
						<label>numbers of bathroom(s)</label>
					</div>
					<div class="col-3">
						<select name="property" id="property" class="select-text" required="">
							<option value="" disabled="" selected=""></option>
							<?php 
							foreach ($proparty as $proparty){
								?>
								<option value="<?=$proparty->name;?>"><?=$proparty->name;?></option>
							<?php } ?>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">Proparty Type</label>
					</div>
				</li>
				<li>
					<div class="col-3">
						<input type="number" name="house_age" id="house_age" required="">
						<span class="highlight"></span>
						<label>age of house</label>
					</div>
					<div class="col-3">
						<select name="area" id="area" class="select-text" required="">
							<option value="" disabled="" selected=""></option>
							<?php 
							foreach ($area as $area){
								?>
								<option value="<?=$area->value;?>"><?=$area->value;?></option>
							<?php } ?>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">Area (square feet)</label>
					</div>
					<div class="col-3">
						<p>beside road</p>
						<fieldset>
							<input type="radio" name="beside_road" value="YES" checked> <span>Yes</span>
							<input type="radio" name="beside_road" value="NO"> <span>No</span>
						</fieldset>
					</div>
				</li>
				<li class="address">
					<div class="col-3">
						<select name="availability" id="availability" class="select-text" required="">
							<option value="" disabled="" selected=""></option>
							<option value="Available">Available</option>
							<option value="Unavaliable">Unavaliable</option>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">Availability</label>
					</div>

					<div class="col-3">
						<select name="sale_lease" id="sale_lease" class="select-text" required="">
							<option value="" disabled="" selected=""></option>
							<option value="Sale">Sale</option>
							<option value="Lease">Lease</option>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">Sale or Lease</label>
					</div>

					<div class="col-3">
						<select name="street_abbr" id="street_abbr" class="select-text" required="">
							<option value="" disabled="" selected=""></option>
							<option value="Abby">Abby</option>
							<option value="Acre">Acre</option>
						</select>
						<span class="select-highlight"></span>
						<label class="select-label">Street Abbr</label>
					</div>
				</li>
			</ul>
		</form>
	</div>
	<div class="white-box add-home">
		<form action="javaScript:Void(0)" method="POST" enctype='multipart/form-data'>
			<ul>
				<li>
					<input type="file" name="municipality_paper" id="municipality_paper">
					<!-- <button class="upload">upload municipality paper</button> -->
					<figure class="pdf"><img src="assets/images/pdf-icon.png" alt=""></figure>
				</li>
				<li>
					<input type="file" name="ca_image[]" accept="image/*" class="form-control uploadmcq_image" 
					id="files" multiple="multiple">
					<label for="">upload home images</label>
				</li>
				<li>
					<div class="addImageList" id="selectedFiles"></div>
				</li>
				
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
	var selDiv = "";
	var storedFiles = [];
	$("#files").on("change", handleFileSelect);
	selDiv = $("#selectedFiles");
	$("body").on("click", ".selFile", removeFile);
	function handleFileSelect(e) {
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function (f) {
			if (!f.type.match("image.*")) {
				return;
			}
			storedFiles.push(f);
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<figure><img style=\"height:50px; width:50px;\" src=\"" + e.target.result + "\" data-file='" + f.name + "' title='" + f.name + "'><span data-file='" + f.name + "' class='selFile'><i class='fa fa-times' aria-hidden='true'></i><span><br clear=\"left\"/></figure>";
				selDiv.append(html);
			}
			reader.readAsDataURL(f);
		});
	}
	function removeFile(e) {
		var file = $(this).data("file");
		for (var i = 0; i < storedFiles.length; i++) {
			if (storedFiles[i].name === file) {
				storedFiles.splice(i, 1);
				break;
			}
		}
		$(this).parent().remove();
	}


	$(document).ready(function(){
		$("#btn_add_home").click(function(){
			var municipality_name =  $("#municipality_name").val();
			var postal =  $("#postal").val();
			var house_no =  $("#house_no").val();
			var street_no =  $("#street_no").val();
			var street_name =  $("#street_name").val();
			var bedroom =  $("#bedroom").val();
			var bathroom =  $("#bathroom").val();
			var property_type =  $("#property").val();
			var house_age =  $("#house_age").val();
			var area =  $("#area").val();
			var beside_road = $("input[name='beside_road']:checked").val();
			var availability =  $("#availability").val();
			var sale_lease =  $("#sale_lease").val();
			var street_abbr =  $("#street_abbr").val();

			var country =  $("#country").val();
			var province =  $("#province").val();
			var city =  $("#city").val();
			
			
			
			var home_image = $("#home_image").val();
			
			var url = window.location.href;
			var live_test_id = url.substring(url.lastIndexOf('/') + 1);
			var formdata = new FormData();
			for (var i = 0; i < storedFiles.length; i++) {
				formdata.append('home_image[]', storedFiles[i]);
			}



			// if(municipality_name == ''){
			// 	toastr["error"]("Please enter municipality name");
			// 	return false;
			// }


			// if(postal == ''){
			// 	toastr["error"]("Please enter postal code");
			// 	return false;
			// }
			// if(house_no == ''){
			// 	toastr["error"]("Please enter house no");
			// 	return false;
			// }
			// if(street_no == ''){
			// 	toastr["error"]("Please enter street no");
			// 	return false;
			// }
			// if(street_name == ''){
			// 	toastr["error"]("Please enter street name");
			// 	return false;
			// }


			// if(bathroom == ''){
			// 	toastr["error"]("Please enter number of bathroom");
			// 	return false;
			// }
			// if(bedroom == ''){
			// 	toastr["error"]("Please enter number of bedroom");
			// 	return false;
			// }
			// if(property_type == null){
			// 	toastr["error"]("Please select property");
			// 	return false;
			// }
			// if(house_age == ''){
			// 	toastr["error"]("Please enter house age");
			// 	return false;
			// }
			// if(area == null){
			// 	toastr["error"]("Please enter area");
			// 	return false;
			// }
			// if(availability == null){
			// 	toastr["error"]("Please select availability");
			// 	return false;
			// }
			// if(sale_lease == null){
			// 	toastr["error"]("Please select availability");
			// 	return false;
			// }
			// if(street_abbr == null){
			// 	toastr["error"]("Please select street abbr");
			// 	return false;
			// }

			

			var fileinput = $('#municipality_paper')[0].files[0];
			formdata.append("bedroom", bedroom);
			formdata.append("bathroom", bathroom);
			formdata.append("property_type", property_type);
			formdata.append("house_age", house_age);
			formdata.append("area", area);
			formdata.append("beside_road", beside_road);
			formdata.append("country", country);
			formdata.append("province", province);
			formdata.append("city", city);
			formdata.append("postal", postal);
			formdata.append("house_no", house_no);
			formdata.append("municipality_name", municipality_name);
			formdata.append("street_no", street_no);
			formdata.append("street_name", street_name);
			formdata.append("availability", availability);
			formdata.append("sale_lease", sale_lease);
			formdata.append("street_abbr", street_abbr);
			formdata.append("municipality_paper", fileinput);



			var ajaxReq = $.ajax({
				url: '<?php echo base_url()?>home/insert_home',
				type: 'POST',
				processData: false,
				contentType: false,
				data: formdata,
				beforeSend: function (xhr) {
				},
				success: function (data) {
					var obj = jQuery.parseJSON(data);
					console.log(obj);
					if(obj.status){
						window.location.href = "<?php echo base_url()."dashboard"?>";
					}else{
						toastr["error"]("Home Add Failed");
					}
				}
			});
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
	});

</script>

