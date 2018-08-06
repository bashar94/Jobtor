<?php
if($profileid == 'account'){ ?>

	<div class="row">

		<div class="col-sm-12 col-md-12">

			<label><h3><Strong>Change Your Password</Strong></h3></label>

			<form class="form-horizontal" action="" autocomplete="off" method="POST">
			  <p class="help-title">Enter your current password along with a new one to change it.</p>


				<?php
				if(isset($_GET['success']) && $_GET['success'] == 'false'){ ?>
					<div class="alert alert-danger alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						 	Current password is incorrect.
					</div>
				<?php
				unset($_GET);
				} ?>


			  <div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">Current Password</label>
			    <div class="col-sm-6 col-md-6">
			      <input type="password" class="form-control" name="current" placeholder="Current Password" required>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">New Password</label>
			    <div class="col-sm-6 col-md-6">
			      <input type="password" class="form-control" name="password" id="password" placeholder="New Password" required>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">Confirm Password</label>
			    <div class="col-sm-6 col-md-6">
			      <input type="password" class="form-control cpassword" id="cpassword" placeholder="Confirm Password" required>
			    </div>
			  </div>

		   	 <div class="form-group">
			    <div class="col-sm-6 col-md-6  col-sm-offset-2 col-md-offset-2">
			      <button id="submit" type="submit" class="btn btn-black">Change</button>
			    </div>
			  </div>
			</form>
		</div>



	</div>


<?php }else{	?>
	
	<div class="row">
		<form action="" autocomplete="off" method="POST">

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

			    <div class="form-group">
			        <label>Work 1</label>
			        <input type="text" name="work1" value ="<?php if($user['work1'] != NULL){ echo $user['work1']; } ?>" class="form-control" placeholder="Your first work place">
			    </div>

					<div class="form-group">
			        <label>Work 2</label>
			        <input type="text" name="work2" value ="<?php if($user['work2'] != NULL){ echo $user['work2']; } ?>" class="form-control" placeholder="Your second work place(optional)">
			    </div>

					<div class="form-group">
			        <label>Phone</label>
			        <input type="tel" name="phone" value ="<?php if($user['phone'] != NULL){ echo $user['phone']; } ?>" class="form-control" placeholder="Phone Number">
			    </div>


					<div class="form-group">
						<label>Designation:</label>

						<select name="designation" required>
							<option value="MBBS Doctor" <?php if($user['designation'] == "MBBS Doctor"){ echo "selected"; } ?>>MBBS Doctor</option>
							<option value="Intern" <?php if($user['designation'] == "Intern"){ echo "selected"; } ?>>Intern</option>
						</select>
						<span class="caret"></span>
					</div>



	    <br />

	    	<button type="submit" class="btn btn-black">Update</button>
			</div>
		</form>
	</div>

<?php }
unset($profile);
?>
