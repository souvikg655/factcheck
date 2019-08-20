<?php include 'include/realter_header.php' ?>

		<div class="main-panel">
			<?php
			for ($i = 0; $i<sizeof($data); $i++){
			?>
			<div class="white-box project-listing">
				<div class="image-aside">
					<div class="owl-carousel owl-loaded single-slide">
						<div class="item">
							<a href="<?php echo base_url()?>assets/images/about-image.jpg"><img src="<?php echo base_url()?>assets/images/about-image.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="<?php echo base_url()?>assets/images/property-image.jpg"><img src="<?php echo base_url()?>assets/images/property-image.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="<?php echo base_url()?>assets/images/slider-1.jpg"><img src="<?php echo base_url()?>assets/images/slider-1.jpg" alt=""></a>
						</div>
					</div>
					<div class="image-count">
						2 more propety photo 
					</div>
				</div>
				<div class="text-aside">
					<div class="top-block">
						<h4><?php echo $data[$i]->title; ?></h4>
						<h6 class="location">Eglinton, Toronto </h6>
						<a href="<?php echo base_url()?>municipality_papers/<?php echo $data[$i]->municipality_paper; ?>" title="" class="pdf" download>download PDF of municipality</a>
					</div>
					<div class="buttom-block">
						<ul>
							<li>
								<img src="<?php echo base_url()?>assets/images/icon-bathroom-gray.png" alt="">
								<?php echo $data[$i]->bathroom; ?> Bathroom
							</li>
							<li>
								<img src="<?php echo base_url()?>assets/images/icon-measurement-gray.png" alt="">
								<?php echo $data[$i]->area; ?> Sq. ft.
							</li>
							<li>
								<img src="<?php echo base_url()?>assets/images/icon-bedroom-gray.png" alt="">
								<?php echo $data[$i]->bedroom; ?> Bedroom
							</li>
							<li>
								<img src="<?php echo base_url()?>assets/images/icon-vr-gray.png" alt="">
								cc tv coverage
							</li>
							<li>
								<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
								Build in 1990
							</li>
						</ul>
					</div>
					<?php
					$status_data = $data[$i]->status;
					?>

					<?php
					if($status_data == "approved"){
					?>
					<button type="button" class="approval approved">approved</button>
					<?php } ?>

					<?php
					if($status_data == "pending"){
					?>
					<button type="button" class="approval waiting">waiting for admin approval</button>
					<?php } ?>

					<?php
					if($status_data == "rejected"){
					?>
					<button type="button" class="approval rejected">rejected</button>
					<a class="edit" href="javascript:void(0);">edit</a>
					<?php } ?>

				</div>
			</div>
			<?php } ?>

		</div>
	</div>

<?php include 'include/realter_footer.php' ?>
