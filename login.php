<div id="form" class="container">
  <div class="row">
		<div class="col-sm-12 col-md-6 col-md-offset-3">

				<div class="row">

  				<div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
  					<h3>Login</h3>
  				</div>

  				<hr align="center" width="90%">

				  <div class="col-sm-12 col-md-10 col-md-offset-1">
					<?php
					if(isset($_GET['success']) && $_GET['success'] == 'false'){ ?>
						<div class="alert alert-danger alert-dismissible">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    The email or password is incorrect.
						</div>
					<?php
          unset($_GET);
        } ?>

				    <form action="" autocomplete="off" method="POST">

            <input type="hidden" name="token" value="<?php echo $token; unset($token);?>" />
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username or email">
						</div>

						<span class="help-block"></span>

						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input  type="password" class="form-control" name="password" placeholder="Password">
						</div>

						<br />

						<button class="btn btn-lg btn-black btn-block" type="submit">Login</button>

						<span class="help-block"></span>

					</form>
				</div>
				<hr align="center" width="90%">

			</div>

      <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
        <h3><small>Or</small></h3>
      </div>
      <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
        <h3>Signup</h3>
      </div>
      <hr align="center" width="90%">
      <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
        <h5>You are a -</h5>
        <a href="?page=signupd"  class="btn btn-black btn-block btn-width"><strong> Doctor</strong></a>

        <a href="?page=signuph"  class="btn btn-black btn-block btn-width"><strong> Hospital</strong></a>
      </div>

		</div>
	</div>
</div>
