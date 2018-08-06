<div class="col-md-3">
	<div class="profile-sidebar">

		<!-- user picture -->
		<div class="profile-userpic">
			<img src="<?php echo $profile['pp_url']?>" class="img-responsive">
			<?php
			if(isset($_SESSION['username']) && $pageid == 'settings' && $_SESSION['username'] == $profile['username']) { ?>

				<!-- profile pic upload button -->
				<div class="profile-userbuttons">
					<form method="POST" action="" id="fileUp" enctype="multipart/form-data">
						<div style="height:0px;overflow:hidden">
	   						<input type="file" id="imgUp" name="image"  accept="image/*"/>
						</div>
						<button type="button" class="btn btn-success btn-file" onclick="chooseImg();"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
					</form>
				</div>
				<!-- profile pic upload button end -->

		<?php } ?>
		</div>
		<!-- user picture ends -->

		<!-- user name and display info -->
		<?php
			if($pageid != 'settings'){ ?>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php if($profile['doctor']){
										echo $profile['fullname'];
									}else{
										echo $profile['college'];
									} ?>
					</div>
					<div class="profile-usertitle-job">
						<h3><small>
						<?php echo '(@'.$profile['username'].')' ?>
						</small><h3>
					</div>
				</div>
			<?php }?>
		<!-- user name and display info ends -->


		<!-- menu -->
		<div class="profile-usermenu">
			<ul class="nav">


				<?php if($pageid == 'settings'){

					if($profile['doctor']){?>
						<li <?php if($profileid == 'profile'){ echo 'class="active"';} ?>>
							<a href="?page=<?php echo $pageid.'&profile=profile'; ?>">
							<i class="fa fa-id-card" aria-hidden="true"></i>
							Profile</a>
						</li>
					<?php } ?>

					<li <?php if($profileid == 'account'){ echo 'class="active"';} ?>>
						<a href="?page=<?php echo $pageid.'&profile=account'; ?>">
						<i class="fa fa-user" aria-hidden="true"></i>
						Account</a>
					</li>

				<?php }else{ ?>
					<li <?php if($profileid == 'overview'){ echo 'class="active"';} ?>>
						<a href="?page=<?php echo $pageid.'&profile=overview'; ?>">
						<i class="fa fa-user-md" aria-hidden="true"></i>
						Overview</a>
					</li>

					<?php if($profile['doctor']){?>
						<li <?php if($profileid == 'jobs'){ echo 'class="active"';} ?>>
							<a href="?page=<?php echo $pageid.'&profile=jobs'; ?>">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							Temporary Jobs Search</a>
						</li>
					<?php } ?>

					<li <?php if($profileid == 'subs'){ echo 'class="active"';} ?>>
						<a href="?page=<?php echo $pageid.'&profile=subs'; ?>">
						<i class="fa fa-refresh" aria-hidden="true"></i>
						Substitutes Search</a>
					</li>

					<li <?php if($profileid == 'ad'){ echo 'class="active"';} ?>>
						<a href="?page=<?php echo $pageid.'&profile=ad'; ?>">
						<i class="fa fa-users" aria-hidden="true"></i>
						Posted Job Ads</a>
					</li>
			<?php } ?>
			</ul>
		</div>
		<!-- menu ends -->

	</div>
</div>
