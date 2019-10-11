<head><title>Add Home</title></head>

<style type="text/css">
	.thumbnail{
		height: 50px;
		width: 50px;
	}
</style>

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
						<label for="">Proparty Type</label>
						<select name="property" id="property">
							<?php 
							foreach ($proparty as $proparty){
								?>
								<option value="<?=$proparty->name;?>"><?=$proparty->name;?></option>
							<?php } ?>
						</select>
					</div>
				</li>
				<li>
					<div class="col-3">
						<label for="">age of house</label>
						<input type="number" name="house_age" id="house_age">
					</div>
					<div class="col-3">
						<label for="">Area (square feet)</label>
						<!-- <input type="number" name="area" id="area"> -->

						<select name="area" id="area">
							<?php 
							foreach ($area as $area){
								?>
								<option value="<?=$area->value;?>"><?=$area->value;?></option>
							<?php } ?>
						</select>

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
					<div class="col-3">
						<label for="">country</label>
						<select name="country" id="country">
							<option value="canada">Canada</option>
						</select>
					</div>

					<div class="col-3">
						<label for="">province/territories</label>
						<select name="province" id="province">
							<?php 
							foreach ($province as $prov){
								?>
								<option value="<?=$prov->province;?>"><?=$prov->province;?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-3">
						<label for="">City</label>
						<select name="city" id="city"></select>
					</div>

				</li>
				<li>
					<div class="col-2">
						<label for="">Postal Code</label>
						<input type="text" name="postal" id="postal">
					</div>
					<div class="col-2">
						<label for="">house number</label>
						<input type="number" name="house_no" id="house_no">
					</div>
				</li>
				<li class="address">
					<div class="col-3">
						<label for="">Municipality Name</label>
						<input type="text" name="municipality_name" id="municipality_name">
					</div>

					<div class="col-3">
						<label for="">Street no.</label>
						<input type="number" name="street_no" id="street_no">
					</div>

					<div class="col-3">
						<label for="">Street Name</label>
						<input type="text" name="street_name" id="street_name">
					</div>
				</li>

				<li class="address">
					<div class="col-3">
						<label for="">Availability</label>
						<select name="availability" id="availability">
							<option value="Available">Available</option>
							<option value="Unavaliable">Unavaliable</option>
						</select>
					</div>

					<div class="col-3">
						<label for="">Sale or Lease</label>
						<select name="sale_lease" id="sale_lease">
							<option value="Sale">Sale</option>
							<option value="Lease">Lease</option>
						</select>
					</div>

					<div class="col-3">
						<label for="">Street Abbr</label>
						<select name="street_abbr" id="street_abbr">
							<option value="Abby">Abby</option>
							<option value="Acre">Acre</option>
						</select>
					</div>
				</li>

				<li>
				</li>
				<li>
					<input type="file" name="municipality_paper" id="municipality_paper">
					<label for="">upload municipality paper (one image only)</label>
				</li>
				<li>
					<input type="file" name="ca_image[]" accept="image/*" class="form-control uploadmcq_image" 
					id="files" multiple="multiple">
					<label for="">upload home images</label>
				</li>
				<li>
					<span class="addImageList" id="selectedFiles"></span>
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
				var html = "<li><img style=\"height:50px; width:50px;\" src=\"" + e.target.result + "\" data-file='" + f.name + "' title='" + f.name + "'><span data-file='" + f.name + "' class='selFile'><i class='fa fa-times' aria-hidden='true'></i><span><br clear=\"left\"/></li>";
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
			var title =  $("#title").val();
			var bedroom =  $("#bedroom").val();
			var bathroom =  $("#bathroom").val();
			var property_type =  $("#property").val();
			var house_age =  $("#house_age").val();
			var area =  $("#area").val();
			var beside_road = $("input[name='beside_road']:checked").val();
			var country =  $("#country").val();
			var province =  $("#province").val();
			var city =  $("#city").val();
			var postal =  $("#postal").val();
			var house_no =  $("#house_no").val();
			var municipality_name =  $("#municipality_name").val();
			var street_no =  $("#street_no").val();
			var street_name =  $("#street_name").val();
			var availability =  $("#availability").val();
			var sale_lease =  $("#sale_lease").val();
			var street_abbr =  $("#street_abbr").val();
			var home_image = $("#home_image").val();
			
			var url = window.location.href;
			var live_test_id = url.substring(url.lastIndexOf('/') + 1);
			var formdata = new FormData();
			for (var i = 0; i < storedFiles.length; i++) {
				formdata.append('home_image[]', storedFiles[i]);
			}

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
				toastr["error"]("Please choose province");
				return false;
			}
			if(city == ''){
				toastr["error"]("Please choose city");
				return false;
			}
			if(postal == ''){
				toastr["error"]("Please enter postal code");
				return false;
			}
			if(house_no == ''){
				toastr["error"]("Please enter house no");
				return false;
			}
			if(municipality_name == ''){
				toastr["error"]("Please enter municipality name");
				return false;
			}
			if(street_no == ''){
				toastr["error"]("Please enter street no");
				return false;
			}
			if(street_name == ''){
				toastr["error"]("Please enter street name");
				return false;
			}

			var fileinput = $('#municipality_paper')[0].files[0];
			formdata.append("title", title);
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

