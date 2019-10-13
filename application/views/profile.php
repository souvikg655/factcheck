<head><title>Profile</title></head>

<?php include 'include/realter_header.php' ?>


<div class="main-panel">
	<div class="white-box profile-status">
		<?php
		$approval = $data->approval;
		if($approval == "PENDING"){
			$message = "waiting for admin approval";
			$class = "waiting";
		}elseif($approval == "REGECTED"){
			$message = "Rejected";
			$class = "waiting";
		}else{
			$message = "Accepted";
			$class = "waiting";
		}
		?>
		<div class="status">
			<h4>your profile status</h4>
			<a class="btn <?=$class?>"><?=$message?></a>
		</div>

		<div class="profile-details">
			<form action="#" method="POST">
				<ul>
					<li>
						<input type="text" value="<?=$data->name?>" <?=$approval=='REGECTED'?'':'readonly' ?> id="name" required="">
						<span class="highlight"></span>
						<label>full name</label>
					</li>
					<li>
						<input type="text" value="<?=$data->email?>" <?=$approval=='REGECTED'?'':'readonly' ?> id="email" required="">
						<span class="highlight"></span>
						<label>email</label>
					</li>
					<li>
						<input type="text" value="<?=$data->company?>" <?=$approval=='REGECTED'?'':'readonly' ?> id="company" required="">  
						<span class="highlight"></span>
						<label>conpamy name</label>
					</li>
					<li>
						<label for="">Identity proved</label>
						
						<figure>
							<img id="image" src="<?=base_url()?>uploads/<?=$data->image?>" alt="" >
							<?php
							if($message == "Rejected"){
							?>
								<label class="btn-file">
									<input type="file" onchange="readURL(this);" id="upload_image">
								</label>
							<?php } ?>
						</figure>
						
					</li>
				</ul>
				<h6 class="reject-data"><?=$data->reject_status?></h6>
				<?php
				if($message == "Rejected"){
					?>
					<button type="button" class="submit" id="btn_submit" >submit</button>
				<?php } ?>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader1 = new FileReader();
			reader1.onload = function (e) {
				$('#image')
				.attr('src', e.target.result);
			};
			reader1.readAsDataURL(input.files[0]);
		}
	}


	$(document).ready(function(){
		$("#btn_submit").click(function(){
			var name =  $("#name").val();
			var email =  $("#email").val();
			var company =  $("#company").val();
			
			var formdata = new FormData();
			var fileinput = $('#upload_image')[0].files[0];
			formdata.append("name", name);
			formdata.append("email", email);
			formdata.append("company", company);
			formdata.append("image", fileinput);

			var ajaxReq = $.ajax({
				url: '<?php echo base_url()?>user/update_profile',
				type: 'POST',
				processData: false,
				contentType: false,
				data: formdata,
				beforeSend: function (xhr) {
				},
				success: function (data) {
					window.location.href = "<?php echo base_url()."dashboard"?>";
				},
			});

		}); 
	});
</script>

<?php include 'include/realter_footer.php' ?>