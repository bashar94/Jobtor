<nav class="navbar navbar-inverse navbar-fixed-top center" role="navigation">
	<div class="container navbar-inner">


	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navDoctor" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

	      <a class="navbar-brand" href="?page=home">জবটর</a>


	      <!-- Mobile view navbar -->
	      <div class="hide-lg nav navbar-nav ">
	      <?php if(isset($_SESSION['username']))  { ?>
		    	<a class="nav-icon" href="?page=search"><i class="fa fa-search fa-fw" aria-hidden="true"></i> Search</a>
	    	<?php }else{ ?>
					<a class="nav-icon" href="?page=login"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> Login</a>

				<?php } ?>
	      </div><!-- Mobile view navbar ends -->
	    </div>



	     <!-- collapsed navbar menu -->
	    <div class="collapse navbar-collapse navbar-left" id="navDoctor">
	    	<ul style="width: 100%; text-align: left;" class="nav navbar-nav">
	    		<?php nav_main($dbc, $pageid); ?>
	    	</ul>


			<?php if(isset($_SESSION['username'])) { ?>
				<hr />
				<ul class="hide-lg nav navbar-nav">
					<li <?php if($pageid == $_SESSION['username']){ echo 'class="active"';} ?>><a href="?page=<?php echo $_SESSION['username'].'&profile=overview'; ?>"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> Profile</a></li>
					<li <?php if($pageid == 'settings'){ echo 'class="active"';} ?>><a href="?page=settings&profile=profile"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Settings</a></li>
					<li><a href="?page=logout"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Log out</a></li>
		    </ul>
		  <?php } ?>

		</div><!-- collapsed navbar menu ends-->



		<!-- Desktop view Navbar-->
		<div class="hide-ss collapse navbar-collapse navbar-right">
			<ul class="nav navbar-nav">

			<?php if(isset($_SESSION['username'])) { ?>

						<li>
							 <p class="navbar-btn" >
									 <a href="?page=search" class="btn btn-success" ><i class="fa fa-search fa-fw" aria-hidden="true"></i> Search</a>
							 </p>
						</li>

		      	<li class="dropdown">
		      		<a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_SESSION['pp_url'];?>" class="img-rounded" width="25" height="25"><strong> <?php echo $_SESSION['username']; ?> </strong><span class="caret"></span></a>

		      		<ul class="dropdown-menu">
		      			<li><a href="?page=<?php echo $_SESSION['username'].'&profile=overview'; ?>"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> Profile</a></li>
		      			<li><a href="?page=settings&profile=profile"><i class="fa fa-cog fa-fw" aria-hidden="true"></i></span> Settings</a></li>
		      			<li><a href="?page=logout"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Log out</a></li>
		      		</ul>
		      	</li>




		      <?php } else { ?>
		      	     <li>
									 <a href="?page=login" ><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> Login</a>
								 </li>
								 
	      <?php } ?>
	      </ul>


	   </div> <!-- Desktop view Navbar ends-->

	  </div><!-- /.container-fluid -->

	</nav>
