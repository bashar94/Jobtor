<div id="form" class="container">
    <div class="row">
		<div class="col-sm-12 col-xs-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

				<div class="row">

				<div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
					<h3>Sign Up as Doctor</a></h3>
				</div>

				<hr align="center" width="90%">



				  <form action="" autocomplete="off" method="POST">
            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">

              <input type="hidden" name="token" value="<?php echo $token;  unset($token); ?>" />

				    	<div class="input-group">
  							<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
  							<input type="text" class="form-control" name="fullname" placeholder="First and Last Name" required>
						  </div>

						  <span class="help-block"></span>

              <div class="input-group">
  							<span class="input-group-addon"><i class="fa fa-graduation-cap fa-fw"></i></span>
  							<input type="text" class="form-control" name="college" placeholder="Medical College Institution" required>
						  </div>

						  <span class="help-block"></span>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-medkit fa-fw"></i></span>
                <input type="text" class="form-control" name="regNo" placeholder="MBBS Registration No." required>
              </div>

              <span class="help-block"></span>

  						<div class="input-group">
  							<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
  							<input type="tel" class="form-control" name="phone" placeholder="01*********" required>
  						</div>

						  <span class="help-block"></span>

  						<div class="input-group">
  							<span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
  							<input type="email" class="form-control" name="email" placeholder="Email" required>
  						</div>

						  <span class="help-block"></span>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-birthday-cake fa-fw"></i></span>
                <input type="date" class="form-control" name="birth" placeholder="Date Of Birth(MM/DD/YYYY)" required>
              </div>

						  <span class="help-block"></span>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required title="6 characters minimum" pattern=".{6,}" required>
            </div>

            <span class="help-block"></span>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
              <input id="cpassword" type="password" class="form-control cpassword" placeholder="Confirm Password" required>
            </div>

            <span class="help-block"></span>


            <label>Currently Working in:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-briefcase fa-fw"></i></span>
              <input type="text" class="form-control" name="work1" placeholder="Working Place (Required)" required>
            </div>

            <span class="help-block"></span>
            <p><label>Working Destination:</label></p>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <select style="width: 128px;" id="division" name="division" required>
                <option value="" selected disabled>--Division--</option>

                  <?php

                  $q = "SELECT division FROM place GROUP BY division ORDER BY division ASC";  #used in: template/profile-body.php,
                	$r = mysqli_query($dbc, $q);

                  while($a = mysqli_fetch_assoc($r)){
                      echo "<option value=".$a['division'].">".$a['division']."</option>";
                  }

                  ?>

              </select>
              <span class="caret"></span>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <select style="width: 128px;" id="zilla" name="zilla" required>
                <option value="" selected disabled>--Zilla--</option>
              </select>
              <span class="caret"></span>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <select style="width: 128px; margin-bottom: 10px;" id="thana" name="thana" required>
                <option value="" selected disabled>--Thana--</option>
              </select>
              <span class="caret"></span>
            </div>



            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-briefcase fa-fw"></i></span>
              <input type="text" class="form-control" name="work2" placeholder="2nd Working Place (Optional)">
            </div>


            <span class="help-block"></span>

            <label>Designation:</label>

            <select name="designation" required>
              <option value="" selected disabled>--Select--</option>
              <option value="MBBS Doctor">MBBS Doctor</option>
              <option value="Intern">Intern</option>
            </select>
            <span class="caret"></span>



            <span class="help-block"></span>

          </div>

          <hr align="center" width="90%">

          <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 text-center">
  					<button id="submit" class="btn btn-lg btn-black btn-block" type="submit">Create Account</button>
  				</div>

				</form>
			</div>

		</div>
	</div>
</div>
