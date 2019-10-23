<?php include 'include/realter_header.php' ?>

<div class="main-panel">
	<?php
	for ($i = 0; $i<sizeof($data); $i++){
		$ID = $data[$i]->id;
		?>
		<div class="white-box project-listing">
			<div class="aside-img">
				<img src="assets/images/banner-image1.jpg" alt="">
				<div class="more">
					<a href="#gallery-1" class="btn-gallery"><span>+20</span> images</a>
				</div>
			</div>
			<div class="aside-data">
				<div class="top-block">
					<h6 class="location"><?php echo $data[$i]->province; ?>, <?php echo $data[$i]->city; ?> </h6>
					<a href="<?php echo base_url()?>municipality_papers/<?php echo $data[$i]->municipality_paper; ?>" title="" class="pdf" download>download PDF of municipality</a>
				</div>
				<div class="buttom-block">
					<ul>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-bedroom-gray.png" alt="">
							Bedroom: <?php echo $data[$i]->bedroom; ?> 
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-bathroom-gray.png" alt="">
							Bathroom: <?php echo $data[$i]->bathroom; ?> 
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-vr-gray.png" alt="">
							Class: <?php echo $data[$i]->type; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-measurement-gray.png" alt="">
							Area: <?php echo $data[$i]->area; ?> Sq. ft.
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Near Road: <?php echo $data[$i]->beside_road; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							City: <?php echo $data[$i]->city; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Province: <?php echo $data[$i]->province; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Postal Code: <?php echo $data[$i]->postal; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							House Number: <?php echo $data[$i]->house_no; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Street Name: <?php echo $data[$i]->street_name; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Street No.: <?php echo $data[$i]->street_no; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Availability:  <?php echo $data[$i]->availability; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Street Abbr: <?php echo $data[$i]->street_abbr; ?>
						</li>
						<li>
							<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
							Sale Or Lease: <?php echo $data[$i]->sale_lease; ?>
						</li>
					</ul>
					<?php
					if($data[$i]->status == "REJECTED"){
						?>
						<ul>
							<li>
								<h6 class="reject-data"><?=$data[$i]->reject_status;?></h6>
							</li>
						</ul>
					<?php } ?>
					
				</div>
				<?php
				$status_data = $data[$i]->status;
				?>
				<?php
				if($status_data == "APPROVED"){
					?>
					<button type="button" class="approval approved">approved</button>
				<?php } ?>

				<?php
				if($status_data == "PENDING"){
					?>
					<button type="button" class="approval waiting">Pending</button>
				<?php } ?>

				<?php
				if($status_data == "REJECTED"){
					?>
					<button type="button" class="approval rejected">rejected</button>
					<!-- <a class="edit" href="javascript:void(0);">edit</a> -->
				<?php } ?>
			</div>
			<div id="gallery-1" class="hidden">
				<a href="assets/images/banner-image1.jpg"></a>
				<a href="assets/images/about-image.jpg"></a>
				<a href="assets/images/banner-about.jpg"></a>
				<a href="assets/images/banner-contact.jpg"></a>
			</div>
		</div>
	<?php } ?>
</div>
</div>
<?php include 'include/realter_footer.php' ?>