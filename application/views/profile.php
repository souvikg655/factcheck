<head><title>Profile</title></head>

<?php include 'include/realter_header.php' ?>


<div class="main-panel">
			<div class="white-box profile-status">
				<div class="status">
					<h4>your profile status</h4>
					<a href="javascript:void(0);" class="btn waiting">waiting for admin approval</a>
				</div>
				<div class="profile-details">
					<ul>
						<li>
							<label for="">full name</label>
							<input type="text" placeholder="Your Name" value="<?=$data->name?>" >
						</li>
						<li>
							<label for="">email</label>
							<input type="text" placeholder="email id" value="<?=$data->email?>" >
						</li>
						<li>
							<label for="">conpamy name</label>
							<input type="text" placeholder="Company Name" value="<?=$data->company?>" >
						</li>
						<li>
							<label for="">municipal authentication</label>
							<figure>
								<img src="<?=base_url()?>uploads/<?=$data->image?>" alt="" >
								<label class="btn-file">
							    	<input type="file">
							    </label>
							</figure>
						</li>
					</ul>
					<h6 class="reject-data">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ipsam nam et fuga officia, tempora nemo, odit in aliquid, voluptas expedita iusto sapiente deserunt explicabo commodi, optio laudantium quidem nihil.</h6>
					<button class="submit">submit</button>
				</div>
			</div>
		</div>

<?php include 'include/realter_footer.php' ?>