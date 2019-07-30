<?php include 'include/user_header.php' ?>

<div class="main-panel">
	<div class="white-box add-home">
		<h3>Search your home</h3>
		<form action="<?php echo base_url()?>user/dashboard" method="POST" name="registration">
			<ul>
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
						<label for="">postal code</label>
						<input type="text" name="postal" id="postal">
					</div>
					<div class="col-2">
						<label for="">house number</label>
						<input type="text" name="house_number" id="house_number">
					</div>
				</li>
				<li>
					<label for="">address</label>
					<input type="text" name="address" id="address">
				</li>
				<li>
					<input type="submit" value="search">
				</li>
			</ul>
		</form>
	</div>
</div>
</div>

<?php include 'include/user_footer.php' ?>