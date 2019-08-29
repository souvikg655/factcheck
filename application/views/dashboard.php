<?php include 'include/realter_header.php' ?>

		<div class="main-panel">
			<?php
			for ($i = 0; $i<sizeof($data); $i++){
			?>
			<div class="white-box project-listing">
					<div class="top-block">
						<h4><?php echo $data[$i]->title; ?></h4>
						<h6 class="location">Eglinton, Toronto </h6>
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
								Type: <?php echo $data[$i]->type; ?>
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
								Houce Number: <?php echo $data[$i]->house_no; ?>
							</li>
							<li>
								<img src="<?php echo base_url()?>assets/images/icon-builders.png" alt="">
								Address: <?php echo $data[$i]->address; ?>
							</li>
						</ul>
						<?php
							if($data[$i]->status == "REJECTED"){
						?>
						<ul>
							<li>
								<b>Rejected Reson: </b><span style="color: red;"><?php echo $data[$i]->reject_status; ?></span>
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
			<?php } ?>

		</div>
	</div>

<?php include 'include/realter_footer.php' ?>
