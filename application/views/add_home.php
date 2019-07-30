<head><title>Add Home</title></head>
<?php include 'include/realter_header.php' ?>
<div class="main-panel">
	<div class="white-box add-home">
		<h3>field the details of your home</h3>
		<form action="#" method="POST" name="add_home">
			<ul>
				<li>
					<label for="">title</label>
					<input type="text" name="title" id="title">
				</li>
				<li>
					<div class="col-3">
						<label for="">numbers of bedroom(s)</label>
						<input type="text" name="bedroom" id="bedroom">
					</div>
					<div class="col-3">
						<label for="">numbers of bathroom(s)</label>
						<input type="text" name="bathroom" id="bathroom">
					</div>
					<div class="col-3">
						<label for="">property type</label>
						<select name="property" id="property">
							<option value="house">house</option>
							<option value="appertment">appertment</option>
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
						<fieldset name="" id="beside_road">
							<input type="radio" name="beside_road" checked> <span>Yes</span>
							<input type="radio" name="beside_road"> <span>No</span>
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
					<label for="">Do you have municipality paper?</label>
					<fieldset name="" id="is_municipality_paper">
						<input type="radio" name="is_municipality_paper" checked> <span>Yes</span>
						<input type="radio" name="is_municipality_paper"> <span>No</span>
					</fieldset>
				</li>
				<li class="first-hide">
					<label for="">upload municipality paper (one image only)</label>
					<input type="file" name="municipality_paper" id="municipality_paper">
				</li>
				<li>
					<label for="">Do you have property image?</label>
					<fieldset name="" id="is_property_image">
						<input type="radio" name="is_property_image" checked> <span>Yes</span>
						<input type="radio" name="is_property_image"> <span>No</span>
					</fieldset>
				</li>
				<li class="first-hide">
					<label for="">upload property image (maximum 6 images)</label>
					<input type="file" name="property_image" id="property_image">
				</li>
				<li>
					<input type="submit" value="save">
				</li>
			</ul>
		</form>
	</div>
</div>
</div>

<?php include 'include/realter_footer.php' ?>