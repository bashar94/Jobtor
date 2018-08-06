<div class="row">
	<div class="panel panel-default">
		<div class="panel-body panel-shadow">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php if($profile['doctor']){ ?>
					<h3><?php echo $profile['fullname'];?><a target="_blank" href="<?php echo $profile['fb_profile']; ?>"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i></a></h3>
				<?php }else{ ?>
					<h3><?php echo $profile['college'];?></h3>
				<?php } ?>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php if($profile['doctor']){ ?>
					<h5 class="about-page">Studied at  <strong><?php echo $profile['college']; ?></strong></h5>
					<h5 class="about-page">Works at <strong><?php echo $profile['work1']; ?></strong></h5>
					<?php if($profile['work2'] != null){ ?>
						<h5 class="about-page">Works at  <strong><?php echo $profile['work2']; ?></strong></h5>
					<?php } ?>
					<h5 class="about-page">MBBS Reg. No:  <strong><?php echo $profile['mbbs_reg']; ?></strong></h5>
					<h5 class="about-page">Designation: <strong><?php echo $profile['designation']; ?></strong></h5>
				<?php }else{ ?>
					<h5 class="about-page">Representative: <strong><?php echo $profile['fullname'];?></strong><a target="_blank" href="<?php echo $profile['fb_profile']; ?>"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i></a></h5>
					<h5 class="about-page">Street Address: <strong><?php echo $profile['street']; ?></strong></h5>
					<h5 class="about-page">Location:  <strong><?php echo $profile['work_thana'].", ". $profile['work_zilla'].", ". $profile['work_division']; ?></strong></h5>
				<?php } ?>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h5><a class="about-page" href="#">Email: <strong><?php echo $profile['email']; ?></strong></a></h5>
					<h5 class="about-page">Phone: <strong><?php echo $profile['phone']; ?></strong></h5>
					<?php if($profile['doctor']){ ?>
						<h5 class="about-page">Birthday:  <strong><?php echo date ("jS F Y", strtotime($profile['birthdate'])); ?></strong></h5>
					<?php }
					unset($profile);
					?>
			</div>
		</div>
	</div>
</div>
